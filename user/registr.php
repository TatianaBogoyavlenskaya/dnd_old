<!-- Страница регистрации -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleAutorization.css">
    <link rel="stylesheet" href="../css/styleHeaderFooter.css">
    <title>Регистрация</title>
</head>
<body>
<?php include_once "../header.php"; ?>
<form method="post">
    <label>
        Логин*
        <input type="text" name="login"><br>
    </label>
    <label>
        Имя*
        <input type="text" name="name"><br>
    </label>
    <label>
        Пароль*
        <input type="password" name="password"><br>
    </label>
    <label>
        Повторите пароль*
        <input type="password" name="passwordDouble"><br>
    </label>
    <a href="../index.php">Авторизоваться</a><br>
    <input type="submit" value="Зарегистрироваться">
</form>
</body>
</html>
<?php
include_once "registrAnalysis.php";
include_once "../footer.php";
?>