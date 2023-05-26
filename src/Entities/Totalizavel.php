<?php

namespace App\Entities;

abstract class Totalizavel
{
  abstract public function total(): float;
}
