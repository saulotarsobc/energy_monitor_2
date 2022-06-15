<?php
error_reporting(0);
header('Content-Type:application/json');

include_once('./functions.php');

$token = $_GET['token'];
if ($token != 'asdf1234') {
    echo json_encode(array('message' => 'Token inválido. Sem permissão para acessar!'), 256);
    die;
}

$func = $_GET['func'];
if ($func == '') {
    echo json_encode(array('message' => 'defina uma função!'), 256);
    die;
}


switch ($func) {
    case 'getTemperature':
        echo getTemperature();
        break;

    case 'getVoltage1':
        echo getVoltage1();
        break;

    case 'getVoltage2':
        echo getVoltage2();
        break;

    case 'getVoltage3':
        echo getVoltage3();
        break;

    case 'manager':
        echo manager();
        break;

    case 'teste':
        echo teste();
        break;

    default:
        echo json_encode(array('message' => 'método não definido'), 256);
        break;
}
