<?php 
    //запрос в бд данных из js
    include_once "../workWithDB.php";
    function SetUpdate()
    {
        $nameColumn = $_POST["nameColumn"];
        $id = $_POST["idPers"];
        $value = $_POST["value"];
        $select = "SELECT * FROM pers WHERE id=?";
        $result = Select($select,"i", $id);
        $resultArray = mysqli_fetch_array($result);
        $getData = $resultArray[$nameColumn]+$value;
        $select = "UPDATE pers SET $nameColumn = ? WHERE id = ?";
        $result = Select($select,"ii", $getData,$id);
        "<script> localStorage.setItem('$nameColumn', '$getData');</script>";
        $out["value"] = $getData;    
        return $out;
    }
?>