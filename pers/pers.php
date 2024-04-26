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
        <script type="module" src="../js/functionPers.js"></script>
        <!--TODO: Сломаны все обращения в js, не открывается форма инвентаря-->
        <link rel="stylesheet" href="../css/styleListPers.css">
        <link rel="stylesheet" href="../css/styleAllPanel.css">
        <link rel="stylesheet" href="../css/styleHeaderFooter.css">
    </head>
    <body>
    <?php
    include_once "../header.php";
    include_once "formPers.php";
    include_once "../footer.php";
    ?>
    <script type="module" src="../js/dataPers.js"></script>
    </body>
    </html>
<?php
include_once "saveDataPers.php";
?>