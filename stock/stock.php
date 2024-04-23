<div class="stock">
    <div class="weight">
        <label class="weightLabel">Вес</label>
        <input readonly type="text" class="weightValue" id="curentWeight">/
        <input readonly type="text" class="weightValue" id="maxWeight">
    </div>   
    <div class="sertch">
        <select class="typeSubject" id="type_subject">
            </select>
            <input type="text" class = "sertchText" id = "sertch">
            <input type="button" class="sertchButton" value="Найти">
    </div> 
    <div class="stockPannel"> 
        <div class="stockPannelElement">
            <div class = "nameElementStock" id = "nameElement">Наименование</div>
            <div class = "nameElementStock" id = "typeElement">Тип</div>
            <div class = "nameElementStock" id = "countElement">Количество</div>
            <div class = "nameElementStock" id = "weightElement">Вес</div>
        </div>
        <hr>
        <?php 
            $id = (isset($_COOKIE["idPers"]))? $_COOKIE["idPers"] : $_SESSION["idPers"];
            GetStock($id);
        ?>
    </div>
</div>