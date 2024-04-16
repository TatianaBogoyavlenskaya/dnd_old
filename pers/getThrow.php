<?php
include_once "../workWithDB.php";
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