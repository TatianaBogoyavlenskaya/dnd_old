<pre>
<?php 
// Создание нового персонажа
    if (!isset($_POST["name"]) || !isset($_POST["level"]) ):
        echo "Не все обязательные поля заполнены";
        return;
    endif;
    $table = "pers";
    $select = "SELECT namePers FROM $table WHERE loginUser = ? AND namePers = ?";
    $result = Select($select, "ss", $_SESSION["login"],$_POST["name"]); 
    if ($result->num_rows == 1) :
        echo "<p>Персонаж с таким именем у Вас уже существует</p>";
        return;
    endif;

    $insert = "INSERT INTO $table VALUES(NULL,?,?,?,?,?)";
    $result = Insert($insert, "ssiii", $_POST["name"], $_SESSION["login"], $_POST["race"],$_POST["class"],$_POST["level"]);
    if($result) :
        echo "<p>Персонаж успешно создан</p>";
    endif;
    header("Location: pers.php");
?>
</pre>