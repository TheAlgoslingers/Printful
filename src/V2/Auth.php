<?php
namespace Selistore\PrintfulApi\V2;

use Selistore\PrintfulApi\V2\Localisation;

class Auth extends Localisation
{
  public function __construct(private string $token, public string $locale = 'en_US') {
    //
  }

  private function headers() {
    return [
      'headers' => [
        'Authorization' => 'Bearer ' . $this->token,
        'X-PF-Language' => $this->getLocale(),
      ]
    ];
  }

  public function make(string $url, $method = 'GET') {
    return file_get_contents(dirname(dirname(dirname(__DIR__))) . '/PrintfulWebSoc/TestAuthResponse.json');

    $this->client = new \GuzzleHttp\Client($this->headers());
    
    try {
      $this->response = $this->client->request($method, $url);

      if (! $this->isRateLimited()) {
        return $this->response->getBody();
      } else {
        $timeout = $this->response->getHeaderLine('X-Ratelimit-Reset') * 1000;
        
        sleep($timeout);
        
        return $this->make($url);
      }
    } catch(Exception $e) {
      die($e);
    }
  }

  public function isRateLimited() {
    return $this->response->getStatusCode() == 429;
  }
}