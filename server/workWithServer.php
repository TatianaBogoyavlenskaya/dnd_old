<?php 
    //работа с сервером
    include_once "select.php";
    include_once "updateSelect.php";     
    include_once "updateId.php";     
    $out["value"] = $_POST["idSelect"];
    switch($_POST["idSelect"])
    {
        case 1:       
            $out = SetUpdate();
            break;
        case 'select':       
            $out = SetSelect();
            break;
        case 'updateId':
            UpdateId();
            break;
        case 'update':
        case 'delete':    
            default:
        break;
    }
    echo json_encode($out);
?>