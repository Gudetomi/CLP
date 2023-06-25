<?php

namespace App\Model;

class VendaModel
{

  public function cadastrar($dados)
  {
    $venda = new \App\Entities\Venda();
    $venda->setNumero($dados['numero']);
    $venda->setData($dados['data']);
    $venda->setCliente($dados['cliente']);
    $venda->setItens($dados['itens']);

    // array_push($GLOBALS['Vendas'], $venda);
    $GLOBALS['Vendas'][$dados['numero']] = $venda;

    echo "Venda cadastrada com sucesso!\n\n";

    return $venda->getNumero();
  }
  public function editar($indice, $novoNumero, $novaData, $novoCliente, $novosItens)
  {
    if (isset($indice['Vendas'][$indice])) {
      $GLOBALS['Vendas'][$indice]->setNumero($novoNumero);
      $GLOBALS['Vendas'][$indice]->setData($novaData);
      $GLOBALS['Vendas'][$indice]->setCliente($novoCliente);
      $GLOBALS['Vendas'][$indice]->setItens($novosItens);

      echo "Venda editado com sucesso.";
    } else {
      echo "Venda não encontrado.";
    }
  }
  public function excluir($indice)
  {
    if (isset($indice['Vendas'][$indice])) {
      unset($GLOBALS['Vendas'][$indice]);
      echo ("Venda excluída com sucesso!");
    } else {
      echo "Venda não encontrado.";
    }
  }
}
