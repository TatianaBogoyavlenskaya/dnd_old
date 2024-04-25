<?php
    // Работа с данными о персонаже
    
    //Получение списка персонажей игрока    
    function GetPers()
    {
        $table ="pers";
        $select = "SELECT * FROM $table WHERE loginUser = ?";
        $result = Select($select, "s", $_SESSION["login"]);
        $_SESSION["pers"] = $result;
        foreach ($result as $value):
            $id = $value["id"];
            $name = $value["namePers"]; 
            if (!isset($_COOKIE["idPers"])):                
                setcookie("idPers", $id,0,"/");
                echo "<script> localStorage.setItem('idPers', '$id');</script>";
                $_SESSION["idPers"] = $id;
            else:
                $_SESSION["idPers"] = $_COOKIE["idPers"];
            endif;
            echo "<script> localStorage.setItem('$name', '$id');</script>";
        endforeach;
        return $result;
    }   


    //Получение характеристик
    function GetCharacteristics():void
    {
        $arrCharacteristic = ["characteristics", "skills", "spasbrosok"];
        $arrLocalStorageAdd = ["", "Radio", "SpasbrosokRadio"];
        for ($index = 0; $index < count($arrCharacteristic); $index++):
            GenerateSelectAllData($arrCharacteristic[$index], $arrLocalStorageAdd[$index]);
        endfor;
    }

    //Получение данных персонажей игрока    
    function GetDataPers($getValue):void
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
    function GenerateSelectAllData($table, $nameLocalStorageAdd):void
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

    //Сохранение данных о персонаже в localStorage
    function SetDataPersInScript($value):void
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
    function SetInLocalStorage($name, $value):void
    {
        if (!isset($value)):
            return;
        endif;
        echo "<script> localStorage.setItem('$name', '$value');</script>";
    }

    //Получить данные запроса и положить в localStorage
    function GetSelect($name, $nameSelect, $allSelect, $select):void
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
            $tablePers ="pers";
            $tableClass_pers="class_pers";
            $select = "SELECT id_class_pers FROM $tablePers WHERE id = ?";
            $result = Select($select, "s",$value["id"]);
            $class = mysqli_fetch_array($result)["id_class_pers"];
            $select = "SELECT nameClass FROM $tableClass_pers WHERE id = ?";
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

    //Получение заклинаний
    function GetSpells($level):array
    {
        $spellsOfPers = "spellsOfPers";
        $spells = "spells";
        $select = "SELECT * FROM $spellsOfPers WHERE idPers=?";
        $result = Select($select,"i", $_SESSION["idPers"]);
        $idSpells = mysqli_fetch_array($result)["id_spells"];
        $arrSpells= array();
        foreach($idSpells as $id):
            $select = "SELECT * FROM $spells WHERE id=?";
            $result = Select($select,"i", $id);
            $spells = mysqli_fetch_array($result);
            if ($spells["level"] != $level):
                continue;
            endif;
            $arrSpells[] = $spells["name"];
        endforeach;
        return $arrSpells;
    }
