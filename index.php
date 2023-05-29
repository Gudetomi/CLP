<?php

require './vendor/autoload.php';

$GLOBALS['Clientes'] = array();
$GLOBALS['Vendas'] = array();
$GLOBALS['ItemVendas'] = array();
$GLOBALS['Produtos'] = array();

$app = new \App\Controller\MenuController();
$app->run();