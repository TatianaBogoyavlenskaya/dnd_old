<!-- Формирование формы с данными о персонаже -->
<form method="post">
    <label>Персонаж
        <select name="namePers" id = "namePers" onchange="OnChangedPers(this.value)">
        </select>
    </label>
    <input type="button" value="Создать нового" onclick="ClearForm()"><br>
    <label>Имя
        <input type="text" name="name" id="name">
    </label><br>
    <label>Расса
        <select name="race" id = "race">
        </select>
    </label>
    <label>Класс
        <select name="class" id = "class">
        </select>
    </label>
    <label>Уровень
        <input type="text" name="level" id = "level">
    </label><br>
    <input type="submit" value="Сохранить изменения"><br>
</form>