<?php 

namespace Mateodioev\Safone\Traits;

use Mateodioev\Request\RequestResponse;

/**
 * Anime
 */
trait Anime
{
  /**
   * @param string|null $type null to get all types
   */
  public function sfw(?string $type = null): RequestResponse
  {
    if ($type) $type = '/' . $type;
    return static::send('anime/sfw' . $type);
  }

  /**
   * @param string|null $type null to get all types
   */
  public function nsfw(?string $type = null): RequestResponse
  {
    if ($type) $type = '/' . $type;
    return static::send('anime/nsfw' . $type);
  }

  /**
   * @param integer $limit results limit
   */
  public function news(int $limit = 20): RequestResponse
  {
    return static::send('anime/news', ['limit' => $limit]);
  }

  public function search(string $query): RequestResponse
  {
    return static::send('anime/search', ['query' => $query]);
  }

  public function manga(string $query): RequestResponse
  {
    return static::send('anime/manga', ['query' => $query]);
  }

  public function character(string $query): RequestResponse
  {
    return static::send('anime/character', ['query' => $query]);
  }
}

