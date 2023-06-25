<?php

namespace App\Entities;

abstract class Pessoa
{
  protected $nome;
  protected $endereco;

  public function getNome()
  {
    return $this->nome;
  }
  public function getEndereco()
  {
    return $this->endereco;
  }
  public function setNome(string $nome)
  {
    $this->nome = $nome;
  }
  public function setEndereco(string $endereco)
  {
    $this->endereco = $endereco;
  }
}
