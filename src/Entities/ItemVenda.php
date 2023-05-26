<?php

namespace App\Entities;

class ItemVenda extends Totalizavel
{
  private $produto;
  private $valor;
  private $quantidade;

  public function getProduto()
  {
    return $this->produto;
  }
  public function getValor()
  {
    return $this->valor;
  }
  public function getQuantidade()
  {
    return $this->quantidade;
  }

  public function setProduto(Produto $produto)
  {
    $this->produto = $produto;
  }
  public function setValor(float $valor)
  {
    $this->valor = $valor;
  }
  public function setQuantidade(int $quantidade)
  {
    $this->quantidade = $quantidade;
  }

  public function total(): float
  {
    return $this->valor * $this->quantidade;
  }
}
