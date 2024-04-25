<?php 
// Функции для работы с инвентарем
// Получение количества монет
function GetMoney($idPers)
{
    $_SESSION["idPers"] = $idPers;
    $result = GetData("money");
    $arrType = ["platinum", "gold", "silver", "bronze"];
    for ($index = 0; $index < count($arrType); $index++):       
        echo "<script> localStorage.setItem('{$arrType[$index]}', '{$result[$arrType[$index]]}');</script>";
    endfor;
}

//Получение инвентаря
function GetData($table)
{
    $pers = "pers";
    $select = "SELECT * FROM $pers WHERE id = ?";
    $result = Select($select, "s", $_SESSION["idPers"]);
    $keyResult = mysqli_fetch_array($result)["id_".$table];
    $select = "SELECT * FROM $table WHERE id = ?";
    $result = Select($select, "s", $keyResult);
    return mysqli_fetch_array($result);
}

// Получение инвентаря
function GetStock($idPers, $isDressed, &$out)
{
    $stock = "stock";
    if ($isDressed):
        $select = "SELECT * FROM $stock WHERE idPers = ? AND dressed = 1";
    else:
        $select = "SELECT * FROM $stock WHERE idPers = ?";
    endif;
    $keyResult = Select($select, "s", $idPers);
    $type_subject = "type_subject";
    $select = "SELECT * FROM $type_subject";
    $result = Select($select);
    foreach ($result as $value):
        $type[$value["id"]] = $value["type"];
    endforeach;
    $curentWeight = 0;
    $subjects = "subjects";
    $out["value"] = "";
    foreach ($keyResult as $value):
        $id_subjects = $value["id_subjects"];
        $select = "SELECT * FROM $subjects WHERE id = ?";
        $result = Select($select, "s", $id_subjects);
        $subjects = mysqli_fetch_array($result);
        $count = $value["count"];
        $name = $subjects["name"];
        $typeName = $type[$subjects["id_type"]];
        $waight =$subjects["waight"];
        $curentWeight += $waight;
    $out["value"] .= "<div class=\"stockPannelElement\" id =\"subjects\"  onclick = GetDiscriptionSubject($id_subjects)>
            <div class = \"nameElementStock\" id = \"nameElement\">$name</div>
            <div class = \"nameElementStock\" id = \"typeElement\">$typeName</div>
            <div class = \"nameElementStock\" id = \"countElement\">$count</div>
            <div class = \"nameElementStock\" id = \"weightElement\">$waight</div>
            </div>";
    endforeach;
    $out["curentWeight"] = $curentWeight;
}
