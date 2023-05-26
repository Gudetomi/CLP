<?php

namespace App\Entities;

class Cliente extends Pessoa
{
  private $rg;
  private $data;

  public function getRg()
  {
    return $this->rg;
  }
  public function getData()
  {
    return $this->data;
  }
  public function setRg(string $rg)
  {
    $this->rg = $rg;
  }
  public function setData(\DateTime $data)
  {
    $this->data = $data;
  }
}
