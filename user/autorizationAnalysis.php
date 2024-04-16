<?php 
// Действия при авторизации
    if (!isset($_POST["login"]) || !isset($_POST["password"])):
        echo "<p>*Введите данные для входа</p>";
        return;
    endif;
    include_once "userFunction.php";
    Autorization($_POST["login"], $_POST["password"]);
?>