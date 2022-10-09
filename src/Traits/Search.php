<?php 

namespace Mateodioev\Safone\Traits;

use Mateodioev\Request\RequestResponse;

trait Search
{
  public function dictionary(string $word, int $limit = 20): RequestResponse
  {
    return static::send('dictionary', ['query' => $word, 'limit' => $limit]);
  }

  public function google(string $query, int $limit = 20): RequestResponse
  {
    return static::send('google', ['query' => $query, 'limit' => $limit]);
  }

  public function github(string $query, int $limit = 20): RequestResponse
  {
    return static::send('github', ['query' => $query, 'limit' => $limit]);
  }

  public function image(string $query, int $limit = 20): RequestResponse
  {
    return static::send('image', ['query' => $query, 'limit' => $limit]);
  }

  public function lyrics(string $query): RequestResponse
  {
    return static::send('lyrics', ['query' => $query]);
  }

  public function npm(string $query, int $limit = 20): RequestResponse
  {
    return static::send('npm', ['query' => $query, 'limit' => $limit]);
  }

  public function pyPi(string $query): RequestResponse
  {
    return static::send('pypi', ['query' => $query]);
  }

  public function reddit(string $query, string $subreddit = '', int $limit = 20, bool $nsfw = false): RequestResponse
  {
    return static::send('reddit', ['query' => $query, 'subreddit' => $subreddit, 'limit' => $limit, 'nsfw' => $nsfw]);
  }

  public function tgSticker(string $query, int $limit = 20): RequestResponse
  {
    return static::send('tgSticker', ['query' => $query, 'limit' => $limit]);
  }

  public function stackOverflow(string $query, int $limit = 20): RequestResponse
  {
    return static::send('stackoverflow', ['query' => $query, 'limit' => $limit]);
  }

  public function torrent(string $query, int $limit = 20): RequestResponse
  {
    return static::send('torrent', ['query' => $query, 'limit' => $limit]);
  }

  public function tmDb(string $query, int $limit = 20, string $tmdbId = ''): RequestResponse
  {
    return static::send('tmDb', ['query' => $query, 'limit' => $limit, 'tmdb_id' => $tmdbId]);
  }

  public function urban(string $query, int $limit = 20): RequestResponse
  {
    return static::send('urban', ['query' => $query, 'limit' => $limit]);
  }

  public function unsplash(string $query, int $limit = 20): RequestResponse
  {
    return static::send('unsplash', ['query' => $query, 'limit' => $limit]);
  }

  public function ubuntu(string $query, int $limit = 20): RequestResponse
  {
    return static::send('ubuntu', ['query' => $query, 'limit' => $limit]);
  }

  public function weather(string $query, int $limit = 20): RequestResponse
  {
    return static::send('weather', ['query' => $query, 'limit' => $limit]);
  }

  public function wallpaper(string $query, int $limit = 20): RequestResponse
  {
    return static::send('wall', ['query' => $query, 'limit' => $limit]);
  }

  public function wikipedia(string $query, int $limit = 20): RequestResponse
  {
    return static::send('wiki', ['query' => $query, 'limit' => $limit]);
  }

  public function xdaDevs(string $query, int $limit = 20): RequestResponse
  {
    return static::send('xda', ['query' => $query, 'limit' => $limit]);
  }

  public function youtube(string $query, int $limit = 20): RequestResponse
  {
    return static::send('youtube', ['query' => $query, 'limit' => $limit]);
  }

  public function ytPlaylist(string $query, int $limit = 20): RequestResponse
  {
    return static::send('playlist', ['query' => $query, 'limit' => $limit]);
  }
}

