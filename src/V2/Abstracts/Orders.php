<?php
namespace Selistore\PrintfulApi\V2\Abstracts;

abstract class Orders
{
  /**
  * @var (paginate) Retrieve/paginate a list of orders from a specific store.
  * @var (draft) Create a new order in which the default status will be `draft`
  * @var (getSingle) Retrieve a single order from the specified store.
  * @var (delete) Delete the order if it can be deleted. An order can be deleted if it's status is draft, failed or cancelled
  * @var (update) Make a partial update of an order.
  * @var (confirm) Confirm the order and start the fulfillment in the production facility.
  * @var (getOrderItems) Retrieves the list of items that belong to the order.
  * @var (addItemToOrder) Add an item to an existing order.
  * @var (getItemFormOrder) Retrieve a single order item.
  * @var (updateOrderItem) Update item from order. !Old item would be deleted if source newer/different
  * @var (deleteOrderItem) Remove a single item from the order.
  * @var (getShipments) Get information about how and when your orders items will be delivered and fulfilled.
  * @var (getDataInvoice) Returns the invoice for an order as a base64 encoded document
  * @var (getOrderEstimation) Retrieve an order cost estimation task from a specific store. Estimation results are only available for one hour after cost estimation task is done.
  * @var (estimation) Estimate order/s with items.
  */
  abstract function paginate();
  abstract function draft(public array $credentials);
  abstract function getSingle(public int $id);
  abstract function delete(public int $id);
  abstract function update(public int $id, public $credentials);
  abstract function confirm(public int $id);
  abstract function getOrderItems(public int $id);
  abstract function addItemToOrder(public int $order_id, public array $item);
  abstract function getItemFormOrder(public $item_id, public $order_id);
  abstract function updateOrderItem(public int $order_item_id, public int|string $order_id);
  abstract function deleteOrderItem();
  abstract function getShipments();
  abstract function getDataInvoice();
  abstract function getOrderEstimation();
  abstract function estimate();
}