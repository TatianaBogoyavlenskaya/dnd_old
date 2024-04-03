<!-- Сохранение изменений персонажа -->
<?php 
    if (!isset($_SESSION["idPers"]) || !isset($_POST["level"])):
        var_dump($_POST);
        // var_dump($_SESSION);
        return;
    endif;
    $select = "UPDATE pers SET level = ? WHERE id = ?";
    $type = "is";
    $result = Insert($select, $type, $_POST["level"], $_SESSION["idPers"]);
    if($result) :
        header("Location: updateFormPers.php");
        echo "<p>Сохранения изменены</p>";
    endif;
?>