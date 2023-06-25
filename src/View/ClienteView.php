<?php

namespace App\View;

class ClienteView
{

  static public function exibirClientes()
  {
    if (isset($GLOBALS['Clientes']) && is_array($GLOBALS['Clientes'])) {
      echo "Lista de Clientes:\n";

      foreach ($GLOBALS['Clientes'] as $indice => $cliente) {
        echo "Cliente nº " . $indice . ":\n";
        echo "Nome: " . $cliente->getNome() . "\n";
        echo "Endereço: " . $cliente->getEndereco() . "\n";
        echo "RG: " . $cliente->getRg() . "\n";
        echo "Data de Nascimento: " . $cliente->getData()->format('d-m-Y') . "\n";
        echo "-------------------------\n";
      }
    } else {
      echo "A lista de clientes está vazia.\n";
    }
  }
}
