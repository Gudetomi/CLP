<?php

namespace App\Controller;

class ClienteController
{
  public function __construct()
  {
    $this->model = new \App\Model\ClienteModel();
    $this->view = new \App\View\ClienteView();
  }
  public function menu()
  {
    while (true) {
      echo "Selecione uma opção:\n";
      echo "1. Cadastrar\n";
      echo "2. Editar\n";
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
          $this->editar();
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
    $nome = readline("Informe o nome: \n");
    $endereco = readline("Informe o endereço:  \n");
    $rg = readline("Informe o rg:  \n");
    $dataNasc = readline("Informe a data de nascimento:  \n");

    $cliente = array(
      'nome'=> $nome,
      'endereco' => $endereco,
      'rg' => $rg,
      'dataNasci' => new \DateTime($dataNasc)
    );
    $cliente = $this->model->cadastrar($cliente);

    echo("O cliente ".$cliente."foi salvo!");
    
  }
  public function editar()
  {
  }
  public function excluir()
  {
  }
}
