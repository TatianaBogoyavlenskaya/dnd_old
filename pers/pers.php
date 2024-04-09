<!-- Информация о персонаже -->
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О персонаже</title>
    <script language="JavaScript" src="../js/functionPers.js"></script>
    <link rel="stylesheet" href="../css/styleListPers.css">
</head>
<body>
    <?php        
        include_once "../workWithDB.php";
        include_once "persFunction.php";
        include_once "formPers.php";
        if (!isset($_SESSION["login"])):
            return null;
        endif;
        $result = GetPers();
        GetSelects();
        if ($result != null):
            GetDataPers($result);
            GetCharacteristics();
        endif;
    ?>
    <script language="JavaScript" src="../js/dataPers.js"></script>
</body>
</html>
<?php 
    include_once "saveDataPers.php";
?>