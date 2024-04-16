<?php 

    include_once "../workWithDB.php";
    include_once "getThrow.php";

    $isUpdate = (isset($_POST["isUpdate"])) ? $_POST["isUpdate"] : false;
    if ($isUpdate == "true"):
        $nameColumn = $_POST["nameColumn"];
        $id = $_POST["idPers"];
        $type = $_POST["type"];
        $value = $_POST["value"];
        $select = "SELECT * FROM pers WHERE id=?";
        $result = Select($select,"i", $id);
        $resultArray = mysqli_fetch_array($result);
        $namePers = $resultArray["namePers"];
        $out["namePers"] = $namePers;
        $getData = $resultArray[$nameColumn];
        if ($type == "add"):
            $getData += $value;
            $out["value"] = " + ";
        else:
            $getData -= $value;
            $out["value"] = " - ";
        endif;
        $table = (isset($_POST["table"]))?$_POST["table"]: null;
        $select = "UPDATE pers SET $nameColumn = ? WHERE id = ?";
        $result = Select($select,"ii", $getData,$id);
        "<script> localStorage.setItem('$nameColumn', '$getData');</script>";
        $out["value"] = $out["value"]."$value = $getData";    
    else:
        
        //запрос занчения кубика
        $table = (isset($_POST["table"]))?$_POST["table"]: null;
        $nameColumn = (isset($_POST["nameColumn"]))?$_POST["nameColumn"]: null;
        $id = $_POST["idPers"];
        $value =  mt_rand(1,$_POST["cube"]);
        $select = "SELECT * FROM pers WHERE id=?";
        $result = Select($select,"i", $id);
        $resultArray = mysqli_fetch_array($result);
        $namePers = $resultArray["namePers"];
        $out["namePers"] = $namePers;
        //запрос из таблицы персонажа
        if ($table == "null" && $nameColumn != "null") : 
            $getValue = $resultArray[$nameColumn];
            $out["value"] = "$value + (".$getValue.") = ".($getValue+$value);
        //запрос из другой таблицы
        else:
            $out["value"] = ($table != "null" && $nameColumn != "null") ? "$value+(".GetCharacteristic($table,$nameColumn, $id,$value) : $value;
        endif;
    endif;


    echo json_encode($out);
?>