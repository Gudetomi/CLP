<?php

namespace App\View;

class ClienteView
{

  public function exibirClientes()
  {
    if (isset($GLOBALS['Clientes']) && is_array($GLOBALS['Clientes'])) {
      echo "Lista de Clientes:\n";

      foreach ($GLOBALS['Clientes'] as $indice => $cliente) {
        echo "Cliente:" . $indice . "\n";
        echo "Nome: " . $cliente->nome . "\n";
        echo "Endereço: " . $cliente->endereco . "\n";
        echo "RG: " . $cliente->rg . "\n";
        echo "Data de Nascimento: " . $cliente->dataNascimento . "\n";
        echo "-------------------------\n";
      }
    } else {
      echo "A lista de clientes está vazia.\n";
    }
  }
}
