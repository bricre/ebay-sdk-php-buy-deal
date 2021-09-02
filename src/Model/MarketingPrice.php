<?php

namespace Ebay\Buy\Deal\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A type that describes the seller discount.
 */
class MarketingPrice extends AbstractModel
{
    /**
     * The monetary value of the seller discount.
     *
     * @var \Ebay\Buy\Deal\Model\Amount
     */
    public $discountAmount = null;

    /**
     * The percentage of the seller discount based on the value returned in the
     * originalPrice field.
     *
     * @var string
     */
    public $discountPercentage = null;

    /**
     * The monetary value of the item prior to the discount.
     *
     * @var \Ebay\Buy\Deal\Model\Amount
     */
    public $originalPrice = null;

    /**
     * The pricing treatment (discount) that was applied to the price of the item.
     * Note: The pricing treatment affects how and where the discounted price can be
     * displayed. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/deal/types/api:PriceTreatmentEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $priceTreatment = null;
}
