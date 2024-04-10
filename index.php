<!-- Страница авторизации -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleAutorization.css">
    <link rel="stylesheet" href="css/styleHeaderFooter.css">
    <title>Авторизация</title>
</head>
<body>
<?php include_once "header.php";?>
<form method="post">
    <label>
        Логин
        <input type="text" name="login"><br>
    </label>
    <label>
        Пароль
        <input type="password" name="password"><br>
    </label>
    <a href="user/registr.php">Зарегистрироваться</a>
    <input type="submit" value="Войти">
</form>   
</body>
</html>
<?php 
    session_start();
    include_once "workWithDB.php";
    include_once "user/autorizationAnalysis.php";
    include_once "footer.php";
?>