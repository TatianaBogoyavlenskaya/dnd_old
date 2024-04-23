<?php 
// Инвентарь
    session_start();
    include_once "../workWithDB.php";
    include_once "stockFunction.php";
    include_once "../pers/persFunction.php";
    $result = GetPers();
    if ($result != null):
        GetDataPers($result);
        GetCharacteristics();
    endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Инвентарь</title>
    <script language="JavaScript" src="../js/functionPers.js"></script>
    <script language="JavaScript" src="../js/functionSetDataPers.js"></script>
    <link rel="stylesheet" href="../css/styleAllPanel.css">
    <link rel="stylesheet" href="../css/styleHeaderFooter.css">
    <link rel="stylesheet" href="../css/styleStock.css">

</head>
<body>
     <?php        
        include_once "../header.php";
        include_once "../allPanels/selectedPers.php"; 
    ?>
        <script>
            SetSelectPers(); 
        </script>
    <div class="equipmentAndStock">
        <?php            
            include_once "equipment.php";
            include_once "stock.php";
            $id = (isset($_COOKIE["idPers"]))? $_COOKIE["idPers"] : $_SESSION["idPers"];            
            GetMoney($id);
        ?>
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