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
    $cliente->setData($dados['data']);

    array_push($GLOBALS['Clientes'],$cliente);

    return $cliente->getNome();

  }
  public function editar()
  {
  }
  public function excluir()
  {
  }
}
