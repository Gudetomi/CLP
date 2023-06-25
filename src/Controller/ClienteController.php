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

      echo ("Opção: \n");
      $opcao = readline();

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
          echo "Voltando ao menu principal...\n";
          return;
        default:
          echo "Opção inválida. Tente novamente.\n";
          break;
      }
      echo "\n";
    }
  }
  public function cadastrar()
  {
    echo ("Informe o nome: \n");
    $nome = readline();

    echo ("Informe o endereco: \n");
    $endereco = readline();

    echo ("Informe o rg: \n");
    $rg = readline();

    echo ("Informe a data de nascimento:  \n");
    $dataNasc = readline();

    $cliente = array(
      'nome' => $nome,
      'endereco' => $endereco,
      'rg' => $rg,
      'dataNasci' => new \DateTime($dataNasc)
    );
    $cliente = $this->model->cadastrar($cliente);

    echo ("O cliente " . $cliente . " foi salvo! \n");
  }
  public function editar()
  {
    $this->view->exibirCLientes();

    echo ("Informe o indice: \n");
    $indice = readline();

    echo ("Informe o nome: \n");
    $novoNome = readline();

    echo ("Informe o endereco: \n");
    $novoEndereco = readline();

    echo ("Informe o rg: \n");
    $novoRg = readline();

    echo ("Informe a data de nascimento:  \n");
    $novaDataNascimento = readline();

    $this->model->editar($indice, $novoNome, $novoEndereco, $novoRg, $novaDataNascimento);
  }
  public function excluir()
  {
    $this->view->exibirCLientes();

    echo ("Informe o indice para a exclusão: \n");
    $indice = readline();
    if (isset($indice)) {
      $this->model->excluir($indice);
    }
  }
}
