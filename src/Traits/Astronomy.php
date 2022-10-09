<?php 

namespace Mateodioev\Safone\Traits;

use Mateodioev\Request\RequestResponse;

/**
 * Astronomy news
 */
trait Astronomy
{
  /**
   * Astronomy Picture of the Day
   */
  public function astronomy(): RequestResponse
  {
    return static::send('astronomy');
  }
}

