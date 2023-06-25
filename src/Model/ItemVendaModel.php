<?php

namespace App\Model;

use App\Entities\Produto;

class ItemVendaModel
{
  public function cadastrar($dados)
  {
    $item = new \App\Entities\ItemVenda();
    $item->setProduto($dados['produto']);
    $item->setValor($dados['produto']->getValor());
    $item->setQuantidade($dados['quantidade']);

    return $item;
  }
  public function editar(int $indiceItem, int $indiceVenda, Produto $novoProduto, int $novaQuantidade)
  {
    if (isset($GLOBALS['Vendas'][$indiceVenda])) {
      $GLOBALS['Vendas'][$indiceVenda]->getItens()[$indiceItem]->setProduto($novoProduto);
      $GLOBALS['Vendas'][$indiceVenda]->getItens()[$indiceItem]->setValor($novoProduto->getValor());
      $GLOBALS['Vendas'][$indiceVenda]->getItens()[$indiceItem]->setQuantidade($novaQuantidade);

      echo "Item da Venda editado com sucesso.";
    } else {
      echo "Venda não encontrada.";
    }
  }
  public function excluir($indiceVenda, $indiceItem)
  {
    if (isset($GLOBALS['Vendas'][$indiceVenda]->getItens()[$indiceItem])) {
      unset($GLOBALS['Vendas'][$indiceVenda]->getItens()[$indiceItem]);
      echo ("Item da Venda excluído com sucesso!");
    } else {
      echo "Item da Venda não encontrado.";
    }
  }
}
