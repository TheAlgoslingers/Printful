<?php
namespace Selistore\PrintfulApi\V2\Abstracts;

abstract class Countries
{
  /**
   * @var (all) Get information about all countries where Printful is available
   */
  abstract function all();
}