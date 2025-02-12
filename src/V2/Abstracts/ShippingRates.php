<?php
namespace Selistore\PrintfulApi\V2\Abstracts;

abstract class ShippingRates
{
  /**
  * @var (get) Returns available shipping options and rates for the given list of products.
  */
  abstract function get();
}