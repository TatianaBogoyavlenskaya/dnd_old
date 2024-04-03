<?php 
    include_once "workWithDB.php";

    //Регистрация пользователя
    function AddUser($login,$name,$password)
    {      
        $select = "SELECT login FROM user WHERE login=?";
        $result = Select($select, "s", $login);     
        if ($result->num_rows == 1) :
            echo "<p>Пользователь с таким логином уже существует</p>";
            return;
        endif;

        $insert = "INSERT INTO user VALUES(?,?,?)";
        $result = Insert($insert, "sss", $login, $name, $password);
        if($result) :
            echo "<p>Регистрация прошла успешно</p>";
            header("Location: index.php");
        else:
            echo "<p>Ошибка при регистрации</p>";
        endif;
    } 

    //Авторизация пользователя
    function Autorization($login,$password)
    {
        $select = "SELECT * FROM user WHERE (login = ? AND password = ?)";
        $result = Select($select, "ss", $login,$password);     
        if ($result->num_rows == 1) :
            header("Location: updateFormPers.php");
            $_SESSION["login"] = $login;
            return;
        endif;
        echo "<p>Ошибка при входе. Проверьте введенные данные</p>";
        return;
    }
?>