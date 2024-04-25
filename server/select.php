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

function GetListData($table, $column, &$out, $login = null):void
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
function GetSelectData($table, $column, $id, &$out):void
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

