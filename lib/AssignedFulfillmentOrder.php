<?php
/**
 * Created by PhpStorm.
 * @author Tareq Mahmood <tareqtms@yahoo.com>
 * Created at 8/19/16 5:28 PM UTC+06:00
 *
 * @see https://help.shopify.com/api/reference/fulfillmentservice Shopify API Reference for FulfillmentService
 */

namespace PHPShopify;


class AssignedFulfillmentOrder extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'assigned_fulfillment_order';

}