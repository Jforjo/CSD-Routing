<?php

switch ($_GET['url']) {
    case '':
        include_once(__DIR__ . '/index.php');
        break;
    case 'calculator':
        include_once(__DIR__ . '/calculator.php');
        break;
    case 'currencyconverter':
        include_once(__DIR__ . '/currencyconverter.php');
        break;
    default:
        include_once(__DIR__ . '/include/404.php');
        break;
}

?>