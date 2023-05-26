<?php

namespace App\Controller;

class MenuController
{

  private $clienteController;
  private $produtoController;
  private $vendaController;

  public function __construct()
  {
    $this->clienteController = new ClienteController();
    $this->produtoController = new ProdutoController();
    $this->vendaController = new VendaController();
  }
  public function run()
  {

    while (true) {

      echo "Selecione uma opção:\n";
      echo "1. Clientes\n";
      echo "2. Produtos\n";
      echo "3. Vendas\n";
      echo "0. Sair\n";

      $opcao = readline("Opção: ");
      switch ($opcao) {
        case '1':
          echo "Você selecionou a Opção 1.\n";
          $this->clienteController->menu();
          break;
        case '2':
          echo "Você selecionou a Opção 2.\n";
          $this->produtoController->menu();
          break;
        case '3':
          echo "Você selecionou a Opção 3.\n";
          $this->vendaController->menu();
          break;
        case '0':
          echo "Saindo...\n";
          exit;
        default:
          echo "Opção inválida. Tente novamente.\n";
          break;
      }
      echo "\n";
    }
  }
}
