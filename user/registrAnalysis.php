<?php
// Действия при регистрации
    if (!isset($_POST["login"]) || !isset($_POST["name"]) || !isset($_POST["password"]) || !isset($_POST["passwordDouble"]) ||
    ($_POST["login"]==null) || ($_POST["name"]==null) || ($_POST["password"]==null) || ($_POST["passwordDouble"]==null)) :
        echo "<p>*Введите все обязательные поля</p>";
        return;
    endif;

    if ($_POST["password"] != $_POST["passwordDouble"]) :
        echo "<p>Пароль введен не правильно</p>";
    endif;

    include_once "userFunction.php";
    AddUser($_POST["login"],$_POST["name"],$_POST["password"]);
?>