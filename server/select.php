<?php
//запрос на обновление данных в бд из js
include_once "../workWithDB.php";
function SetSelect($table, $nameColumn, $id, &$out)
{
    $select = "SELECT * FROM pers WHERE id=?";
    $result = Select($select, "i", $id);
    if ($table != "pers"):
        $resultArray = mysqli_fetch_array($result)["id_" . $table];
        $valueCharacteristic = GetCharacteristic($table, $nameColumn, $resultArray);
        $out["value"] = floor(($valueCharacteristic - 10) / 2);
    else:
        $out["value"] = mysqli_fetch_array($result)[$nameColumn];
    endif;
}

function GetCharacteristic($table, $name, $id)
{
    $select = "SELECT * FROM $table WHERE id=?";
    $result = Select($select, "i", $id);
    return mysqli_fetch_array($result)[$name];
}

function GetListData($table, $column, &$out, $login = null): void
{
    if ($login != null):
        $select = "SELECT * FROM $table WHERE loginUser =?";
        $result = Select($select, "s", $login);
    else:
        $select = "SELECT * FROM $table";
        $result = Select($select);
    endif;
    foreach ($result as $value) {
        $out["value"][] = $value[$column];
    }
}

//Получение индекса связанной таблицы
function GetSelectPersData($id, $column)
{
    $select = "SELECT * FROM pers WHERE id =?";
    $result = Select($select, "i", $id);
    return mysqli_fetch_array($result)[$column];
}

//Получение данных для комбобоксов
function GetSelectData($table, $column, $id, &$out): void
{
    $select = "SELECT * FROM $table WHERE id =?";
    $result = Select($select, "i", $id);
    $out["select"] = mysqli_fetch_array($result)[$column];
}

//Получение данных персонажа
function GetDataPersForInput($table, $id, &$out): void
{
    $select = "SELECT * FROM $table WHERE id =?";
    $result = Select($select, "s", $id);
    $value = mysqli_fetch_array($result);
    foreach ($value as $key => $textColumn):
        $out[$key] = $textColumn;
    endforeach;
}

//Получение данных о монетах
function GetData($table, $id)
{
    $pers = "pers";
    $select = "SELECT * FROM $pers WHERE id = ?";
    $result = Select($select, "s", $id);
    $keyResult = mysqli_fetch_array($result)["id_" . $table];
    $select = "SELECT * FROM $table WHERE id = ?";
    $result = Select($select, "s", $keyResult);
    return mysqli_fetch_array($result);
}

// Получение инвентаря
function GetStock($idPers, $isDressed, &$out)
{
    $stock = "stock";
    if ($isDressed == "true"):
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
    $subjectsText = "subjects";
    $out["value"] = "";
    foreach ($keyResult as $value):
        $id_subjects = $value["id_subjects"];
        $select = "SELECT * FROM $subjectsText WHERE id = ?";
        $result = Select($select, "s", $id_subjects);
        $subjects = mysqli_fetch_array($result);
        $count = $value["count"];
        $name = $subjects["name"];
        $typeName = $type[$subjects["id_type"]];
        $waight = $subjects["waight"];
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

