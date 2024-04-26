<div class="equipment">
    <div class="money">
        <label for="platinum" class="moneyLabel">Платина</label>
        <input readonly type="text" class="moneyValue" id="platinum">
        <label for="gold" class="moneyLabel">Золото</label>
        <input readonly type="text" class="moneyValue" id="gold">
        <label for="silver" class="moneyLabel">Серебро</label>
        <input readonly type="text" class="moneyValue" id="silver">
        <label for="bronze" class="moneyLabel">Бронза</label>
        <input readonly type="text" class="moneyValue" id="bronze">
        <div class="persIcon" title="Лист персонажа" onclick="OpenListPers()"></div>
        <script>GetMoney();</script>
    </div>
    <div class="stockPannelElement">
        <div class="nameElementStock" id="nameElement">Наименование</div>
        <div class="nameElementStock" id="typeElement">Тип</div>
        <div class="nameElementStock" id="countElement">Количество</div>
        <div class="nameElementStock" id="weightElement">Вес</div>
    </div>
    <hr>
    <div class="equipmentDressed" id="equipmentDressed"></div>
    <script>GetEquipment(true);</script>
</div>