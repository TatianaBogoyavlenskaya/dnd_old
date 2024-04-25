<?php 
// Инвентарь
    session_start();
    include_once "../workWithDB.php";
    include_once "stockFunction.php";
    include_once "../pers/persFunction.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Инвентарь</title>
    <script src="../js/functionPers.js"></script>
    <script src="../js/functionSetDataPers.js"></script>
    <script src="../js/workWithServer.js"></script>
    <script src="../js/dataPers.js"></script>
<!--    TODO: посмотреть, может можно как-то подключить js в js, чтобф не подключаь кучу файлов, а только парочку, а остальные, которые нужны для них, внутри-->
    <link rel="stylesheet" href="../css/styleAllPanel.css">
    <link rel="stylesheet" href="../css/styleHeaderFooter.css">
    <link rel="stylesheet" href="../css/styleStock.css">
</head>
<body>
     <?php        
        include_once "../header.php";
        include_once "../allPanels/selectedPers.php";
    ?>
     <div class="equipmentAndStock">
         <?php
         include_once "equipment.php";
         include_once "stock.php";
         ?>
        <script>
            GetNamePers();
        //     TODO: косяк при выборе другого персонажа. Не успела разобраться, вылетает ошибка в js и не меняется перс
        </script>
    </div>
    <script>
        localStorage.setItem('type_subject', "Не выбрано");
        SetOption("type_subject", "allTypeSubject","type_subject");
        GetStock();
    </script>
    <?php
        include_once "../allPanels/rightPanel.php";
        include_once "../footer.php";
        ?>
</body>
</html>