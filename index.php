<?php

require './vendor/autoload.php';

$GLOBALS['Clientes'] = array();
$GLOBALS['Vendas'] = array();
$GLOBALS['Produtos'] = array();

(new \App\Model\ClienteModel())->cadastrar([
  "nome" => "miryueru",
  "endereco" => "rua",
  "rg" => "123",
  "dataNasci" => new \DateTime()
]);

(new \App\Model\ProdutoModel())->cadastrar([
  "codigo" => 1,
  "nome" => "chacahcha",
  "valor" => 9.99
]);

(new \App\Model\ProdutoModel())->cadastrar([
  "codigo" => 2,
  "nome" => "miriesa",
  "valor" => 19.90
]);

(new \App\Model\VendaModel())->cadastrar([
  "numero" => 1,
  "data" => new \DateTime(),
  "cliente" => $GLOBALS["Clientes"][0],
  "itens" => [
    (new \App\Model\ItemVendaModel())->cadastrar([
      "produto" => $GLOBALS['Produtos'][1],
      "valor" => 9.99,
      "quantidade" => 3
    ]),
    (new \App\Model\ItemVendaModel())->cadastrar([
      "produto" => $GLOBALS['Produtos'][2],
      "valor" => 19.90,
      "quantidade" => 1
    ])
  ]
]);

$app = new \App\Controller\MenuController();
$app->run();