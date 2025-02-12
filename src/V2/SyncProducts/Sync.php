<?php
namespace Selistore\PrintfulApi\V2\SyncProducts;

use Selistore\PrintfulApi\V2\Auth;

class Sync extends Auth
{
  public $decoded;

  public function run($url = 'https://api.printful.com/v2/sync-products') {
    try {
      $encoded = $this->make($url);

      $this->decoded = json_decode($encoded, true);

      if ($this->queueAll()) {
        while ($this->hasNext()) {
          // sleep for 0.5 seconds
          echo "Sleeping for 0.5\n...";
          sleep(500);
          $this->make($this->hasNext()['href']);
        }
        return $this->hasNext();
      }
      
    } catch(Exception $e) {
      die($e);
    }
  }

  public function hasFirst() {
    return $this->decoded['_links']['first'] ?? false;
  }

  public function hasNext() {
    return $this->decoded['_links']['next'] ?? false;
  }

  public function hasLast() {
    return $this->decoded['_links']['last'] ?? false;
  }

  public function queueAll() {
    echo sprintf("Queuing %s products...\n", count($this->decoded['data']));
  }
}