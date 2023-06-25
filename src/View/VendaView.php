<?php

namespace App\View;

class VendaView
{
  static public function exibirVendas()
  {
    if (isset($GLOBALS['Vendas']) && is_array($GLOBALS['Vendas'])) {
      echo "Lista de Vendas:\n";

      foreach ($GLOBALS['Vendas'] as $venda) {
        echo "Venda nº " . $venda->getNumero() . "\n";
        echo "Cliente: " . $venda->getCliente()->getNome() . "\n";
        echo "Data: " . $venda->getData()->format('d-m-Y') . "\n";
        echo "Produtos:\n";

        foreach($venda->getItens() as $item) {
          echo "\tItem: " . $item->getProduto()->getNome() . "\n";
          echo "\tPreço do item no momento da compra: " . $item->getValor() . "\n";
          echo "\tQtd: " . $item->getQuantidade() . "\n";
          echo "\tValor total do item: " . $item->total() . "\n";
          echo "-----------------------------\n";
        }

        echo "Valor total da venda: " . $venda->total() . "\n";
        echo "-----------------------------\n\n";
      }
    } else {
      echo "A lista de vendas está vazia.\n";
    }
  }
}
