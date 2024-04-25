<?php 
    //запрос в бд данных из js
    include_once "../workWithDB.php";
    function SetUpdate($nameColumn,$id,$value,&$out)
    {
        $select = "SELECT * FROM pers WHERE id=?";
        $result = Select($select,"i", $id);
        $resultArray = mysqli_fetch_array($result)[$nameColumn];
        $getData = $resultArray+$value;
        $select = "UPDATE pers SET $nameColumn = ? WHERE id = ?";
        Select($select,"ii", $getData,$id);
        $out["value"] = $getData;
    }
?>