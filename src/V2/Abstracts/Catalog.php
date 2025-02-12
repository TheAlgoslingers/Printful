<?php
namespace Selistore\PrintfulApi\V2\Abstracts;

abstract class Catalog
{
  /**
   * @var (setId) Set id of the catalog item that will be worked on.
  * @var (getProducts) Retrieves a list of the products available in Printful's catalog.
  * @var (getSingleProduct) Get information about a single specified catalog product.
  * @var (getSingleVariant) Get information about single specified catalog variant
  * @var (getProductVariants) Get information about all catalog variants associated with the specified catalog product.
  * @var (getCategories) Get list of all categories that are present in the catalog.
  * @var (getProductCategories) Get list of catalog categories associated with the catalog product.
  * @var (getSingleCategory) Get information about a specific catalog category.
  * @var (getProductSizeGuide) Get information about the size guide for a specific product.
  * @var (getProductPrice) Get the price of the product depending on the selling region.
  * @var (getProductAvailability) Get information about the catalog product stock status. 
  * @var (getVariantAvailability) Get information about the catalog variant stock status. 
  */
  abstract function setId();
  abstract function getProducts();
  abstract function getSingleProduct();
  abstract function getSingleVariant();
  abstract function getProductVariants();
  abstract function getCategories();
  abstract function getProductCategories();
  abstract function getSingleCategory();
  abstract function getProductSizeGuide();
  abstract function getProductPrice();
  abstract function getProductAvailability();
  abstract function getVariantAvailability();
}