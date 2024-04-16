<?php
    // Работа с данными о персонаже

    //Получение списка персонажей игрока    
    function GetPers()
    {        
        $select = "SELECT * FROM pers WHERE loginUser = ?";
        $result = Select($select, "s", $_SESSION["login"]);
        $_SESSION["pers"] = $result;
        foreach ($result as $value):
            $id = $value["id"];
            $name = $value["namePers"]; 
            if (!isset($_COOKIE["idPers"])):                
                setcookie("idPers", $id);
                $_SESSION["idPers"] = $id;
            else:
                $_SESSION["idPers"] = $_COOKIE["idPers"];
            endif;
            echo "<script> localStorage.setItem('$name', '$id');</script>";
        endforeach;
        $allPers = SelectFromArray($result, "namePers");
        $allPersJson = json_encode(json_encode($allPers));
        echo "<script> localStorage.setItem('allPers', $allPersJson);</script>";        
        return $result;
    }   

    //получение значений списков
    function GetSelects()
    {
        $arrTable = ["race", "class_pers", "outlook"];
        $arrColumne = ["nameRace", "nameClass", "nameOutlook"];
        $arrLocalStorage = ["allRace", "allClass", "allOutlook"];
        for($index =0; $index < count($arrTable); $index++):
            GetDataSelects($arrTable[$index], $arrColumne[$index], $arrLocalStorage[$index]);
        endfor;
    }

    //Получение характеристик
    function GetCharacteristics()
    {
        $arrCharacteristic = ["characteristics", "skills", "spasbrosok"];
        $arrLocalStorageAdd = ["", "Radio", "SpasbrosokRadio"];
        for ($index = 0; $index < count($arrCharacteristic); $index++):
            GenerateSelectAllData($arrCharacteristic[$index], $arrLocalStorageAdd[$index]);
        endfor;
    }

    //Получение данных персонажей игрока    
    function GetDataPers($getValue)
    {
        $_SESSION["pers"] = $getValue;
        foreach ($_SESSION["pers"] as $value):
            $id = $value["id"];
            $name = $value["namePers"]; 
            echo "<script> localStorage.setItem('$name', '$id');</script>";
            if (isset($_COOKIE["idPers"])):
                if ($id != $_COOKIE["idPers"]): 
                    continue;
                endif;
            else:
                if ($id != $_SESSION["idPers"]): 
                    continue;
                endif;
            endif;
            SetDataPersInScript($value);
            break;
        endforeach;
    }  




    /* Приватные функции*/

    //получение данных о персонаже
    function GenerateSelectAllData($table, $nameLocalStorageAdd)
    {
        foreach($_SESSION["pers"] as $key => $value):
            foreach($value as $key => $id):
                if ($key != "id_".$table || $value["id"] != $_SESSION["idPers"]):
                    continue;
                endif;
                $select = "SELECT * FROM $table WHERE id = ?";
                $result = Select($select, "s", $id);
                $keyResult = mysqli_fetch_array($result);
                foreach($keyResult as $keyColumn => $data):
                    if (is_numeric($keyColumn)):
                        continue;
                    endif;
                    SetInLocalStorage($keyColumn.$nameLocalStorageAdd, $data); 
                endforeach;
            endforeach;
        endforeach;
    }
    
    //Формирование запроса связанных таблиц со списками (рассы/классы и т.д.), получение данных  и их засовывание в localStorage
    function GetDataSelects($table, $column, $localStorage)
    {
        if (isset($_SESSION[$table])):
            unset($_SESSION[$table]);
        endif;
        $select = "SELECT * FROM $table";
        $result = Select($select);
        foreach($result as $data):
            $_SESSION[$table][] = $data;
        endforeach;
        $allClass = SelectFromArray($result, $column);
        $allClassJson = json_encode(json_encode($allClass));
        echo "<script> localStorage.setItem('$localStorage', $allClassJson);</script>";
        return $result;
    }

    //Формирование массива из запроса
    function SelectFromArray($result, $name)
    {
        $all = array();
        foreach ($result as $value):           
           $all[] = $value[$name];
        endforeach;
        return $all;
    }

    //Сохранение данных о персонаже в localStorage
    function SetDataPersInScript($value)
    {
        $arrType = ["namePers", "level", "bonus", "initiative", "class_armor", "speed", "health_max", "health_current", "health_bones","health_bones_curent",
        "tests_death_success", "tests_death_failure", "experience", "inspiration", "health_temporarily"];
        for ($index = 0; $index < count($arrType); $index++):        
            SetInLocalStorage($arrType[$index], $value[$arrType[$index]]);
        endfor;
        $table = ["race", "class_pers", "outlook"];
        $arrColumn = ["nameRace", "nameClass", "nameOutlook"];
        for ($index = 0; $index < count($table); $index++):
            $name =$table[$index]; 
            $nameSelect = $arrColumn[$index]; 
            $allSelect = $_SESSION[$table[$index]]; 
            $select = $value["id_".$table[$index]];
            GetSelect($name, $nameSelect, $allSelect, $select);
        endfor;   
    }

    //Положить данные в localStorage
    function SetInLocalStorage($name, $value)
    {
        if (!isset($value)):
            return;
        endif;
        echo "<script> localStorage.setItem('$name', '$value');</script>";
    }

    //Получить данные запроса и положить в localStorage
    function GetSelect($name, $nameSelect, $allSelect, $select)
    {
        foreach ($allSelect as $value): 
            if ($value["id"] == $select):
                echo "<script> localStorage.setItem('$name', '{$value[$nameSelect]}');</script>";
            endif;
        endforeach;
    }

    enum TypePers {
        case magic;
        case weapon;
    }

    //определение класса персонажа
    function GetClassPers():TypePers
    {
        foreach($_SESSION["pers"] as $value):
            if ($value["id"] != $_SESSION["idPers"]):
                continue;
            endif;
            $select = "SELECT id_class_pers FROM pers WHERE id = ?";
            $result = Select($select, "s",$value["id"]);
            $class = mysqli_fetch_array($result)["id_class_pers"];
            $select = "SELECT nameClass FROM class_pers WHERE id = ?";
            $result = Select($select, "s",$class);
            $keyResult = mysqli_fetch_array($result);
            if (!isset($keyResult["nameClass"])):
                break;
            endif;
            $typePers = $keyResult["nameClass"];
            $magic = ["Жрец","Друид","Бард","Бард","Паладин","Чародей", "Колдун", "Волшебник"];
            return (in_array($typePers, $magic))?TypePers::magic : TypePers::weapon;
        endforeach;
        return TypePers::weapon;
    }

    //Вывод заклинаний
    function WriteSpells()
    {
        for ($index = 0; $index < 10; $index++):
           $arr = GetSpells($index);
        endfor;
    }

    //Получение заклинаний 
    function GetSpells($level):array
    {
        $select = "SELECT * FROM spellsOfPers WHERE idPers=?";
        $result = Select($select,"i", $_SESSION["idPers"]);
        $idSpells = mysqli_fetch_array($result)["id_spells"];
        $arrSpells= array();
        foreach($idSpells as $id):
            $select = "SELECT * FROM spells WHERE id=?";
            $result = Select($select,"i", $id);
            $spells = mysqli_fetch_array($result);
            if ($spells["level"] != $level):
                continue;
            endif;
            $arrSpells[] = $spells["name"];
        endforeach;
        return $arrSpells;
    }

?>