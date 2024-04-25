<?php
//Информация о персонаже
    session_start();
    include_once "../workWithDB.php";
    include_once "persFunction.php";
    if (!isset($_SESSION["login"])):
        return null;
    endif;
    $result = GetPers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О персонаже</title>
    <script language="JavaScript" src="../js/workWithServer.js"></script>
    <script language="JavaScript" src="../js/functionPers.js"></script>
    <script language="JavaScript" src="../js/functionSetDataPers.js"></script>
    <link rel="stylesheet" href="../css/styleListPers.css">
    <link rel="stylesheet" href="../css/styleAllPanel.css">
    <link rel="stylesheet" href="../css/styleHeaderFooter.css">
    <script language="JavaScript" src="../js/dataPers.js"></script>
</head>
<body>
    <?php        
        include_once "../header.php";
        include_once "formPers.php";
//        GetSelects();
//        if ($result != null):
//            GetDataPers($result);
//            GetCharacteristics();
//        endif;
        include_once "../footer.php";
    ?>
    <script>GetDataPers();</script>
</body>
</html>
<?php 
    include_once "saveDataPers.php";
?>