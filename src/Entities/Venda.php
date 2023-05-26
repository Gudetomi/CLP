<?php

namespace App\Entities;

class Venda extends Totalizavel
{
  private $numero;
  private $data;
  private $cliente;
  private $itens;

  public function getNumero()
  {
    return $this->numero;
  }
  public function getData()
  {
    return $this->data;
  }
  public function getCliente()
  {
    return $this->cliente;
  }
  public function getItens()
  {
    return $this->itens;
  }

  public function setNumero(int $numero)
  {
    $this->numero = $numero;
  }
  public function setData(\DateTime $data)
  {
    $this->data = $data;
  }
  public function setCliente(Cliente $cliente)
  {
    $this->cliente = $cliente;
  }
  public function setItens(array $itens)
  {
    $this->itens = $itens;
  }

  public function total(): float
  {
    $total = 0.0;

    foreach ($this->itens as $item) {
      $total += $item->total();
    }

    return $total;
  }
}
