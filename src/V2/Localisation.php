<?php
namespace Selistore\PrintfulApi\V2;

class Localisation
{
  public function __construct(public string $locale = 'en_US') {
    //
  }

  public function getSupported(): array {
    return ['en_US',
      'en_GB',
      'en_CA',
      'es_ES',
      'fr_FR',
      'de_DE',
      'it_IT',
      'ja_JP'];
  }
  public function setLocale(string $locale = 'en_US') {
    $this->locale = in_array($locale, $this->getSupported())?? 'en_US';
  }

  public function getLocale() {
    return $this->locale;
  }
}