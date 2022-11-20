<?php 

namespace Mateodioev\Safone;

use Mateodioev\Request\{Request, RequestResponse};
use Mateodioev\Safone\Traits\{Acronym, Anime, Astronomy, Carbon, ChatBot, Code, Currency, Search};
use Mateodioev\Utils\Arrays;

use function http_build_query;

class Client
{
  use Acronym, Anime, Astronomy, Carbon, ChatBot, Code, Currency, Search;

  public const API_URL = 'https://api.safone.me/';

  private static $instance;
  private Request $req;

  public function __construct() {
    $this->req = new Request();
    $this->req->init(self::API_URL);
  }

  protected function send(string $endpoint, $query = '', $body = null, string $method = 'GET'): RequestResponse
  {

    if (is_array($query)) {
      $query = http_build_query($query);
    }
    if ($body) {
      if (is_array($body)) Arrays::DeleteEmptyKeys($body);
      $this->req->addOpt(CURLOPT_POSTFIELDS, $body);
      $this->req->addHeaders(['Content-Type: application/json']);
    }

    return $this->req->setMethod($method)
      ->Run($endpoint . '?' . $query);
  }
}
