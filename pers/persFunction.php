<?php
    //Получение списка персонажей игрока    
    function GetPers()
    {        
        $select = "SELECT * FROM pers WHERE loginUser = ?";
        $result = Select($select, "s", $_SESSION["login"]);
        $_SESSION["pers"] = $result;
        foreach ($result as $value):
            $id = $value["id"];
            $name = $value["namePers"]; 
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
        $arrLocalStorageAdd = ["", "", "Spasbrosok"];
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
            // if (!isset($_COOKIE["idPers"])):
            //     setcookie("idPers", $value["id"]);
            // endif;
            if (!isset($_SESSION["idPers"])):
                $_SESSION["idPers"] = $value["id"];
            endif;
            // $_SESSION["idPers"] = $_COOKIE["idPers"];
            if ($value["id"] != $_SESSION["idPers"]): 
                continue;
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
                echo "<pre>";
                echo "</pre>";
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
        $arrType = ["namePers", "level", "passive_attention","bonus", "initiative", "class_armor", "speed", "health_max", "health_current", "health_bones","tests_death", 
        "experience", "inspiration"];
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
?>