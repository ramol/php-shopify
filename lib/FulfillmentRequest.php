<?php
/**
 * Created by PhpStorm.
 * @author Tareq Mahmood <tareqtms@yahoo.com>
 * Created at 8/19/16 4:49 PM UTC+06:00
 *
 * @see https://help.shopify.com/api/reference/fulfillmentevent Shopify API Reference for FulfillmentEvent
 */

namespace PHPShopify;


/**
 * Class FulfillmentRequest
 * @package PHPShopify
 * 
 * FulfillmentRequest -> Custom actions
 * --------------------------------------------------------------------------
 * @method array accept()     Accept a fulfillment request
 * @method array reject()     Reject a fulfillment request
 */
class FulfillmentRequest extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'fulfillment_request';

    /**
     * @inheritDoc
     */
    public function pluralizeKey()
    {
        //Only one shop object for each store. So no pluralize
        return 'fulfillment_request';
    }
    /**
     * @inheritDoc
     */
    protected $customPostActions = array(
        'accept',
        'reject',
    );
}