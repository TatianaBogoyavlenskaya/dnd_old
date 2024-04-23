<?php 
    //запрос на обновление данных в бд из js
    include_once "../workWithDB.php";
    function SetSelect()
    {
        $table = (isset($_POST["table"]))?$_POST["table"]: null;
        $nameColumn = (isset($_POST["nameColumn"]))?$_POST["nameColumn"]: null;
        $id = $_POST["idPers"];
        $value =  mt_rand(1,$_POST["cube"]);

        $select = "SELECT * FROM pers WHERE id=?";
        $result = Select($select,"i", $id);
        $resultArray = mysqli_fetch_array($result);
        $namePers = $resultArray["namePers"];
        $out["namePers"] = $namePers;
        if ($table == "null" && $nameColumn != "null") : 
            $getValue = $resultArray[$nameColumn];
            $out["value"] = "$value + (".$getValue.") = ".($getValue+$value);
        else:
            $out["value"] = ($table != "null" && $nameColumn != "null") ? "$value+(".GetCharacteristic($table,$nameColumn, $id,$value) : $value;
        endif;
        return $out;
    }

    function GetCharacteristic($table,$name, $id,$value)
    {
        $select = "SELECT * FROM pers WHERE id =?";     
        $result = Select($select,"i",$id);
        $idCharacteristic = mysqli_fetch_array($result)["id_".$table];
        
        $select = "SELECT * FROM $table WHERE id=?";
        $result = Select($select,"i", $idCharacteristic);
        $valueCharacteristic = mysqli_fetch_array($result)[$name];
        if ($table == "characteristics"):
            $valueCharacteristic = floor(($valueCharacteristic-10)/2);
        endif;
        return $valueCharacteristic.") = ".$value+$valueCharacteristic;
    }
?>
