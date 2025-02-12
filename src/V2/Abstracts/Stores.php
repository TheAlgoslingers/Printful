<?php
namespace Selistore\PrintfulApi\V2\Abstracts;

abstract class Stores
{
  /**
   * @var (getSingle) Get information about a single store.
   * @var (paginate) Paginate a list of all stores available to the token.
   */
  abstract static function getSingle();
  abstract static function paginate();
}