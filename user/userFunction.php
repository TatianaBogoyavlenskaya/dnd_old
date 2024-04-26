<?php
//Регистрация пользователя
include_once "../workWithDB.php";
function AddUser($login, $name, $password): void
{
    $table = "user";
    $select = "SELECT login FROM $table WHERE login=?";
    $result = Select($select, "s", $login);
    if ($result->num_rows == 1) :
        echo "<p>Пользователь с таким логином уже существует</p>";
        return;
    endif;

    $insert = "INSERT INTO $table VALUES(?,?,?)";
    $result = Insert($insert, "sss", $login, $name, $password);
    if ($result) :
        echo "<p>Регистрация прошла успешно</p>";
        header("Location: index.php");
    else:
        echo "<p>Ошибка при регистрации</p>";
    endif;
}

//Авторизация пользователя
function Autorization($login, $password): void
{
    $table = "user";
    $select = "SELECT * FROM $table WHERE (login = ? AND password = ?)";
    $result = Select($select, "ss", $login, $password);
    if ($result->num_rows == 1) :
        $_SESSION["login"] = $login;
        echo "<script> localStorage.setItem('login', '$login');</script>";
        header("Location: pers/pers.php");
        return;
    endif;
    echo "<p>Ошибка при входе. Проверьте введенные данные</p>";
}
