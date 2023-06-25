<?php

namespace App\Controller;

class ProdutoController
{
  private \App\Model\ProdutoModel $model;
  private \App\View\ProdutoView $view;

  public function __construct()
  {
    $this->model = new \App\Model\ProdutoModel();
    $this->view = new \App\View\ProdutoView();
  }
  public function menu()
  {
    while (true) {
      echo "Selecione uma opção:\n";
      echo "1. Cadastrar\n";
      echo "2. Editar\n";
      echo "3. Excluir\n";
      echo "4. Visualizar\n";
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
        case '4':
          echo "Você selecionou a Opção 4.\n";
          $this->visualizar();
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
    echo ("Informe o indice: \n");
    $indice = (int) readline();

    echo ("Informe o nome: \n");
    $nome = readline();

    echo ("Informe valor:  \n");
    $valor = (float) readline();

    $this->model->cadastrar(["codigo" => $indice, "nome" => $nome, "valor" => $valor]);
  }
  public function editar()
  {
    $this->view->exibirProdutos();

    echo ("Informe o código: \n");
    $codigo = readline();

    if(!isset($GLOBALS['Produtos'][$codigo])) {
      echo "Produto não encontrado.\n";
      return;
    }

    echo ("Informe o nome: \n");
    $novoNome = readline();

    echo ("Informe o valor: \n");
    $novoValor = readline();

    $this->model->editar($codigo, $novoNome, $novoValor);
  }
  public function excluir()
  {
    $this->view->exibirProdutos();

    echo ("Informe o código do produto: \n");
    $indice = readline();
    if (isset($indice)) {
      $this->model->excluir($indice);
    }
  }
  public function visualizar()
  {
    $this->view->exibirProdutos();
  }
}
