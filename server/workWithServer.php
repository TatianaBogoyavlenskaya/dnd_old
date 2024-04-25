<?php
//работа с сервером
session_start();
include_once "select.php";
include_once "updateSelect.php";
switch ($_POST["idSelect"]) {
    case 1:
        SetUpdate($_POST["nameColumn"],$_POST["idPers"], $_POST["value"],$out);
        break;
    case 2:
        SetSelect("characteristics", $_POST["id"], $_POST["nameColumn"],$out);
        break;
    case 3:
        GetListData($_POST["table"], $_POST["nameColumn"], $out, $_SESSION["login"]);
        GetSelectData($_POST["table"], $_POST["nameColumn"], $_POST["idPers"], $out);
        break;
    case 4:
        GetListData($_POST["table"], $_POST["nameColumn"], $out);
        $id = GetSelectPersData($_POST["idPers"], "id_" . $_POST["table"]);
        GetSelectData($_POST["table"], $_POST["nameColumn"], $id, $out);
        break;
    case 5:
        $id = $_POST["idPers"];
        if ($_POST["table"] != "pers"):
            $id = GetSelectPersData($_POST["idPers"], "id_" . $_POST["table"]);
        endif;
        GetDataPersForInput($_POST["table"],  $id, $out);
        break;
    default:
        $out= array();
        break;
}
echo json_encode($out);
