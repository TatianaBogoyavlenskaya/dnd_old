<!-- Формирование формы с данными о персонаже -->
<?php 
    $select = "SELECT * FROM pers WHERE loginUser = ? ";
    $_SESSION["pers"] = Select($select, "s", $_SESSION["login"]);
    ?>
    <script>
        function OnChangedPers(value)
        {            
            id = localStorage.getItem(value);
            // name = localStorage.getItem("name");
            document.cookie = "idPers = " + id;
            location.reload();            
        }
    </script>
    <form method="post">
        <?php foreach ($_SESSION["pers"] as $value):
            if ($value["id"] != $_COOKIE["idPers"]): continue;
            endif;
            $id = $value["id"];
            $name = $value["namePers"];   
            echo "<script> localStorage.setItem('$name', '$id');</script>";
            echo "<script> localStorage.setItem('name', '$name');</script>";
            ?>
            <label>Персонаж
                <select name="namePers" onchange="OnChangedPers(this.value)">
                    <?php                    
                        GetPers($value["namePers"], false); 
                    ?>
                </select>
            </label>
            <input type="submit" value="Выбрать">
            <input type="button" value="Создать нового" ><br>
            <label>Имя
                <input type="text" name="name" id="name">
            </label><br>
            <label>Расса
                <select name="race">
                    <?php
                        GetRuss($value["race"]); 
                    ?>
                </select>
            </label>
            <label>Класс
                <select name="class">
                    <?php
                        GetClass($value["class"]); 
                    ?>
                </select>
            </label>
            <label>Уровень*
                <input type="text" name="level" value="<?php echo $value["level"];?>">
            </label><br>
            <input type="submit" value="Сохранить изменения"><br>
        </form>
        <?php
        endforeach;
?>