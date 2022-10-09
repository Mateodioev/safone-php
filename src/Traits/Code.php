<?php 

namespace Mateodioev\Safone\Traits;

use Mateodioev\Request\RequestResponse;

trait Code
{
  public function executeCode(string $language, string $code, $stdin = null, $args = []): RequestResponse
  {
    return static::send('execute', '', json_encode([
      'language' => $language,
      'code'     => $code,
      'stdin'    => $stdin,
      'args'     => $args
    ]), 'POST');
  }

  public function getLanguagesCode(): RequestResponse
  {
    return static::send('execute/languages');
  }
}

