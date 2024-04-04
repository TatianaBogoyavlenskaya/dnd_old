<!-- Информация о персонаже -->
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О персонаже</title>
    <script language="JavaScript" src="../js/functionPers.js"></script>
</head>
<body>
    <?php        
        include_once "../workWithDB.php";
        include_once "persFunction.php";
        include_once "formPers.php";
        $result = GetPers();
        GetRuss();
        GetClass();
        if ($result != null):
            GetDataPers($result);
        endif;
    ?>
    <script language="JavaScript" src="../js/dataPers.js"></script>
</body>
</html>
<?php 
    include_once "saveDataPers.php";
?>