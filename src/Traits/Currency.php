<?php

namespace Mateodioev\Safone\Traits;

use Mateodioev\Request\RequestResponse;

trait Currency
{
  public function currency(float $amount, string $origin, string $target): RequestResponse
  {
    return static::send('currency', [
      'origin' => $origin,
      'target' => $target,
      'amount' => $amount
    ]);
  }  
}

