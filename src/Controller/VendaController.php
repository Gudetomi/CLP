<?php

namespace App\Controller;

class VendaController
{
  public function __construct()
  {
    $this->model = new VendaModel();
    $this->view = new VendaView();
  }
  public function menu()
  {
    while (true) {
      echo "Selecione uma opção:\n";
      echo "1. Cadastrar\n";
      echo "2. Visualizar\n";
      echo "3. Excluir\n";
      echo "0. Sair\n";

      $opcao = readline("Opção: ");
      switch ($opcao) {
        case '1':
          echo "Você selecionou a Opção 1.\n";
          $this->cadastrar();
          break;
        case '2':
          echo "Você selecionou a Opção 2.\n";
          $this->visualizar();
          break;
        case '3':
          echo "Você selecionou a Opção 3.\n";
          $this->excluir();
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
  public function cadastrar()
  {
  }
  public function visualizar()
  {
  }
  public function excluir()
  {
  }
}
