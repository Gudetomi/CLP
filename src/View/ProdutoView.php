<?php

namespace App\View;

class ProdutoView
{
  static public function exibirProdutos()
  {
    if (isset($GLOBALS['Produtos']) && is_array($GLOBALS['Produtos'])) {
      echo "Lista de Produtos:\n";

      foreach ($GLOBALS['Produtos'] as $indice => $produto) {
        echo "Produto nº " . $indice . "\n";
        echo "Código: " . $produto->getCodigo() . "\n";
        echo "Nome: " . $produto->getNome() . "\n";
        echo "Valor: " . $produto->getValor() . "\n";
        echo "-------------------------\n";
      }
    } else {
      echo "A lista de produtos está vazia.\n";
    }
  }
}
