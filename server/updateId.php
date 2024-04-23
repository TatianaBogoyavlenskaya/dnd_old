<?php
    function UpdateId()
    {
        $id = $_POST["idPers"];
        setcookie("idPers", $id);
        $_SESSION["idPers"] = $id;
    }
?>