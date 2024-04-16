<?php 
// Сохранение изменений персонажа
    if (!isset($_SESSION["idPers"]) || !isset($_POST["level"])):
        return;
    endif;
    $select = "UPDATE pers SET level = ? WHERE id = ?";
    $type = "is";
    $result = Insert($select, $type, $_POST["level"], $_SESSION["idPers"]);
    var_dump($_POST);
    if($result) :
         header("Location: pers.php");
    endif;
?>