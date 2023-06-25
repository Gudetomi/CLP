<?php

namespace App\Entities;

class Produto
{
  private $codigo;
  private $nome;
  private $valor;

  public function getCodigo()
  {
    return $this->codigo;
  }
  public function getNome()
  {
    return $this->nome;
  }
  public function getValor()
  {
    return $this->valor;
  }
  public function setCodigo(int $codigo)
  {
    $this->codigo = $codigo;
  }
  public function setNome(string $nome)
  {
    $this->nome = $nome;
  }
  public function setValor(float $valor)
  {
    $this->valor = $valor;
  }
}
