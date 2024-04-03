<!-- Информация о персонаже -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О персонаже</title>
</head>
<body>
    <?php 
        include_once "workWithDB.php";
        include_once "persFunction.php";
        include_once "generateFormPers.php";
        ?>
        <script>
            var inputName = document.getElementById("name");
            inputName.value = localStorage.getItem("name");
        </script>
</body>
</html>
<?php 
    include_once "saveDataPers.php";
?>