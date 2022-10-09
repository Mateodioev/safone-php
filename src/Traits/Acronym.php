<?php 

namespace Mateodioev\Safone\Traits;

use Mateodioev\Request\RequestResponse;

trait Acronym
{
  public function acronym(string $word): RequestResponse
  {
    return static::send('acronym', ['word' => $word]);
  }
}
