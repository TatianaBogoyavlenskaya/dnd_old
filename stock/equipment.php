<div class="equipment">
    <div class="money">
        <label class="moneyLabel">Платина</label>
        <input readonly type="text" class="moneyValue" id="platinum">
        <label class="moneyLabel">Золото</label>
        <input readonly type="text" class="moneyValue" id="gold">
        <label class="moneyLabel">Серебро</label>
        <input readonly type="text" class="moneyValue" id="silver">
        <label class="moneyLabel">Бронза</label>
        <input readonly type="text" class="moneyValue" id="bronze">
        <div class="persIcon" title="Лист персонажа" onclick="OpenListPers()"></div>
    </div>
    
    <div class="stockPannelElement">
        <div class = "nameElementStock" id = "nameElement">Наименование</div>
        <div class = "nameElementStock" id = "typeElement">Тип</div>
        <div class = "nameElementStock" id = "countElement">Количество</div>
        <div class = "nameElementStock" id = "weightElement">Вес</div>
    </div>
    <hr>
    <div class = "equipmentDressed">
        <?php 
            $id = (isset($_COOKIE["idPers"]))? $_COOKIE["idPers"] : $_SESSION["idPers"];
            GetStock($id, true);
        ?>
    </div>
</div>