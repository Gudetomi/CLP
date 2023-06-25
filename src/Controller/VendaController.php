<?php

namespace App\Controller;

use App\Model\ItemVendaModel;

class VendaController
{
  private $model;

  public function __construct()
  {
    $this->model = new \App\Model\VendaModel();
  }
  public function menu()
  {
    while (true) {
      echo "Selecione uma opção:\n";
      echo "1. Cadastrar\n";
      echo "2. Visualizar\n";
      echo "3. Excluir\n";
      echo "0. Sair\n";

      echo ("Opção: ");
      $opcao = readline();

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
    $dados['numero'] = (int) readline("Digite o numero da venda:\n");

    $dados['data'] = new \DateTime(readline("Digite a data da venda:\n"));

    \App\View\ClienteView::exibirClientes();
    $indiceCliente = (int) readline("Digite o numero do cliente:\n");
    $dados['cliente'] = $GLOBALS['Clientes'][$indiceCliente];

    \App\View\ProdutoView::exibirProdutos();
    $produtos = [];
    while (true) {
      $indiceProduto = readline("Digite o numero do produto ou 'c' para continuar:\n");
      if ($indiceProduto === 'c') break;

      $produtos[] = $GLOBALS['Produtos'][$indiceProduto];
    }

    $dados['itens'] = [];
    $itemVendaModel = new ItemVendaModel();
    foreach ($produtos as $p) {
      $quantidade = (int) readline("Digite a quantidade do produto " . $p->getNome() . ":\n");
      $dados['itens'][] = $itemVendaModel->cadastrar(['produto' => $p, 'quantidade' => $quantidade]);
    }

    $numVenda = $this->model->cadastrar($dados);

    echo "Venda nº $numVenda cadastrada com sucesso!\n";
  }
  public function visualizar()
  {
    \App\View\VendaView::exibirVendas();
  }
  public function excluir()
  {
    $indice = readline("Digite o numero do produto a ser excluido: ");
    unset($GLOBALS["Vendas"][$indice]);
  }
}
