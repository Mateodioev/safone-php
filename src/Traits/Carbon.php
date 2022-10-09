<?php 

namespace Mateodioev\Safone\Traits;

use Mateodioev\Request\RequestResponse;
use function json_encode;

trait Carbon
{
  public function getCarbon(string $code, ?string $color = 'white'): RequestResponse
  {
    if ($color) {
      return $this->getWithColorCarbon($code, $color);
    }
    return static::send('carbon', ['code' => $code]);
  }

  private function getWithColorCarbon(string $code, string $color): RequestResponse
  {
    return static::send('carbon', '', json_encode([
      'code' => $code,
      'backgroundColor' => $color
    ]), 'POST');
  }
}

