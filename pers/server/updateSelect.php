<?php 
    //запрос в бд данных из js
    include_once "../workWithDB.php";
    include_once "getThrow.php";
    function SetUpdate()
    {
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
        return $out;
    }
?>