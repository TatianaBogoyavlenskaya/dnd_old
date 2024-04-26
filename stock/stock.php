<div class="stock">
    <div class="weight">
        <label for="curentWeight" class="weightLabel">Вес</label>
        <input readonly type="text" class="weightValue" id="curentWeight">/
        <label for="maxWeight"></label>
        <input readonly type="text" class="weightValue" id="maxWeight">
    </div>
    <div class="sertch">
        <label for="type_subject"></label>
        <select class="typeSubject" id="type_subject">
        </select>
        <label for="sertch"></label>
        <input type="text" class="sertchText" id="sertch">
        <input type="button" class="sertchButton" value="Найти">
    </div>
    <div class="stockPannel" id="stockPannel">
        <div class="stockPannelElement">
            <div class="nameElementStock" id="nameElement">Наименование</div>
            <div class="nameElementStock" id="typeElement">Тип</div>
            <div class="nameElementStock" id="countElement">Количество</div>
            <div class="nameElementStock" id="weightElement">Вес</div>
        </div>
        <hr>
        <div class="stockElement" id="stockElement"></div>
    </div>
    <script>GetEquipment();</script>
</div>