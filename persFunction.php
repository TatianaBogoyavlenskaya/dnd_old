<?php
    include_once "workWithDB.php";
    //Получение списка персонажей игрока    
    function GetPers($selected = null, $update = true)
    {
        if (!isset($_SESSION["login"])):
            return;
        endif;
        $select = "SELECT * FROM pers WHERE loginUser = ?";
        $result = Select($select, "s", $_SESSION["login"]);
        $id = WriteOption($result, "namePers", $selected);
        if ($result->num_rows > 0 && $update == true) :
            $_SESSION["idPers"] = $id;
            header("Location: updateFormPers.php");
        endif;
    }    

    //Получение списка расс
    function GetRuss($selected = null)
    {
        $select = "SELECT * FROM race";
        $result = Select($select);
        WriteOption($result, "nameRace", $selected);
    }

    //Получение списка классов
    function GetClass($selected = null)
    {
        $select = "SELECT * FROM class_pers";
        $result = Select($select);
        WriteOption($result, "nameClass", $selected);
    }

    //Вывод в html пункта выпадающего списка
    function WriteOption($result, $name, $selected)
    {
        $id = 0;
        foreach ($result as $value):
            if ($selected != null):
                if ($value["id"] == $selected || $value["namePers"] == $selected):
                    echo "<option value=".$value[$name]." selected>{$value[$name]}</option>";
                    $id = $value["id"];
                    continue;
                endif;
            endif;
            echo "<option value=".$value[$name].">{$value[$name]}</option>";
        endforeach;
        return $id;
    }
?>