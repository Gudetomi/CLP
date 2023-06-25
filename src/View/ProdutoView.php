<?php

namespace App\View;

class ProdutoView
{

  public function exibirClientes()
  {
    if (isset($GLOBALS['Produtos']) && is_array($GLOBALS['Produtos'])) {
      echo "Lista de Produtos:\n";

      foreach ($GLOBALS['Produtos'] as $indice => $produto) {
        echo "Produto:" . $indice . "\n";
        echo "Código: " . $produto->codigo . "\n";
        echo "Nome: " . $produto->nome . "\n";
        echo "Valor: " . $produto->valor . "\n";
        echo "-------------------------\n";
      }
    } else {
      echo "A lista de produtos está vazia.\n";
    }
  }
}
