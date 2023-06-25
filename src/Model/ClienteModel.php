<?php

namespace App\Model;

class ClienteModel
{
  public function cadastrar($dados)
  {
    $cliente = new \App\Entities\Cliente();
    $cliente->setNome($dados['nome']);
    $cliente->setEndereco($dados['endereco']);
    $cliente->setRg($dados['rg']);
    $cliente->setData($dados['dataNasci']);

    array_push($GLOBALS['Clientes'], $cliente);

    echo "Cliente cadastrado com sucesso!\n\n";

    return $cliente->getNome();
  }
  public function editar($indice, $novoNome, $novoEndereco, $novoRg, $novaDataNascimento)
  {
    if (isset($GLOBALS['Clientes'][$indice])) {
      $GLOBALS['Clientes'][$indice]->setNome($novoNome);
      $GLOBALS['Clientes'][$indice]->setEndereco($novoEndereco);
      $GLOBALS['Clientes'][$indice]->setRg($novoRg);
      $GLOBALS['Clientes'][$indice]->setData($novaDataNascimento);

      echo "Cliente editado com sucesso.";
    } else {
      echo "Cliente não encontrado.";
    }
  }
  public function excluir($indice)
  {
    unset($GLOBALS['Clientes'][$indice]);
    echo ("Cliente excluído com sucesso!");
  }
}
