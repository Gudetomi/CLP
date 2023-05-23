<?php
class Produto
{
  private $produto;
  private $nome;
  private $valor;

  public function getProduto()
  {
    return $this->produto;
  }
  public function getNome()
  {
    return $this->nome;
  }
  public function getValor()
  {
    return $this->valor;
  }
  public function setProduto(int $produto)
  {
    $this->produto = $produto;
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
