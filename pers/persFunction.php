<?php
    //Получение списка персонажей игрока    
    function GetPers($selected = null, $update = true)
    {
        if (!isset($_SESSION["login"])):
            return null;
        endif;
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

    //Получение списка расс
    function GetRuss()
    {
        $select = "SELECT * FROM race";
        $result = Select($select);
        $allRace = SelectFromArray($result, "nameRace");
        $allRaceJson = json_encode(json_encode($allRace));
        echo "<script> localStorage.setItem('allRace', $allRaceJson);</script>";
        return $result;
    }

    //Получение списка классов
    function GetClass()
    {
        $select = "SELECT * FROM class_pers";
        $result = Select($select);
        $allClass = SelectFromArray($result, "nameClass");
        $allClassJson = json_encode(json_encode($allClass));
        echo "<script> localStorage.setItem('allClass', $allClassJson);</script>";
        return $result;
    }

    //Формирование массива из запроса
    function SelectFromArray($result, $name)
    {
        $allRace = array();
        foreach ($result as $value):           
           $allRace[] = $value[$name];
        endforeach;
        return $allRace;
    }

    //Получение данных персонажей игрока    
    function GetDataPers($getValue)
    {
        $_SESSION["pers"] = $getValue;
        foreach ($_SESSION["pers"] as $value):
            $id = $value["id"];
            $name = $value["namePers"]; 
            echo "<script> localStorage.setItem('$name', '$id');</script>";
            if (!isset($_COOKIE["idPers"])):
                echo "shaa";
                setcookie("idPers", $value["id"]);
            endif;
            $_SESSION["idPers"] = $_COOKIE["idPers"];
            if ($value["id"] != $_COOKIE["idPers"]): 
                continue;
            endif;
            SetDataPersInScript($value);
            break;
        endforeach;
    }    

    //Сохранение данных о персонаже в localStorage
    function SetDataPersInScript($value)
    {
        $id = $value["id"];
        $name = $value["namePers"]; 
        $race = $value["race"];
        $class = $value["class"]; 
        $level = $value["level"]; 
        echo "<script> localStorage.setItem('id', '$id');</script>";
        echo "<script> localStorage.setItem('name', '$name');</script>";
        echo "<script> localStorage.setItem('level', '$level');</script>";

        $raceSelect = GetRuss();
        GetSelect("race", "nameRace",$raceSelect, $race);
        $classSelect = GetClass();
        GetSelect("class", "nameClass",$classSelect, $class);         
    }

    function GetSelect($name, $nameSelect, $allSelect, $select)
    {
        foreach ($allSelect as $value): 
            if ($value["id"] == $select):
                echo "<script> localStorage.setItem('$name', '{$value[$nameSelect]}');</script>";
            endif;
        endforeach;
    }
?>