<?php

namespace App\Model;

class ProdutoModel
{
  public function cadastrar($dados)
  {
    $produto = new \App\Entities\Produto();
    $produto->setCodigo($dados['codigo']);
    $produto->setNome($dados['nome']);
    $produto->setValor($dados['valor']);

    $GLOBALS['Produtos'][$dados['codigo']] = $produto;

    echo "Produto cadastrado com sucesso!\n\n";

    return $produto->getNome();
  }
  public function editar($indice, $novoNome, $novoValor)
  {
    if (isset($GLOBALS['Produtos'][$indice])) {
      $GLOBALS['Produtos'][$indice]->setNome($novoNome);
      $GLOBALS['Produtos'][$indice]->setValor($novoValor);

      echo "Produto editado com sucesso.";
    } else {
      echo "Produto não encontrado.";
    }
  }
  public function excluir($indice)
  {
    if (isset($GLOBALS['Produtos'][$indice])) {
      unset($GLOBALS['Produtos'][$indice]);
      echo ("Produto excluído com sucesso!");
    } else {
      echo "Produto não encontrado.";
    }
  }
}
