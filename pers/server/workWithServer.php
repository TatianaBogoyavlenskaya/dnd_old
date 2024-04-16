<?php 
    //работа с сервером
    include_once "server/select.php";
    include_once "server/updateSelect.php";

    switch($_POST["typeSelect"])
    {
        case 'update':
            $out = SetUpdate();
            break;
        case 'select':
            $out = SetSelect();
            break;
        case 'updateSelect':
        case 'delete':
        default: 
        break;
    }
    echo json_encode($out);
?>