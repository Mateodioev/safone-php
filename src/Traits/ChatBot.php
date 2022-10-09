<?php 

namespace Mateodioev\Safone\Traits;

use Mateodioev\Request\RequestResponse;

/**
 * @param string|null $type null to get all types
 */
trait ChatBot
{
  public function chatBot(string $query, int $userId, string $botName = '', string $botMaster = ''): RequestResponse
  {
    return static::send('chatbot', [
      'query' => $query,
      'user_id' => $userId,
      'bot_name' => $botName,
      'bot_master' => $botMaster
    ]);
  }
}
