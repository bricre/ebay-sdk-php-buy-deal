<?php

namespace Ebay\Buy\Deal\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The details provided for the shipping provider, such as shipping cost and type.
 */
class ShippingOption extends AbstractModel
{
    /**
     * The final shipping cost for all items after all discounts are applied. Note: The
     * price does include the value-added tax (VAT) for applicable jurisdictions when
     * requested from supported marketplaces. In this case, users must pass the
     * X-EBAY-C-MARKETPLACE-ID request header specifying the supported marketplace
     * (such as EBAY_GB) to see the VAT-inclusive pricing. For more information on VAT,
     * refer to VAT Obligations in the EU.
     *
     * @var \Ebay\Buy\Deal\Model\Amount
     */
    public $shippingCost = null;

    /**
     * The class of the shipping cost. Valid Values: FIXED or CALCULATED Code so that
     * your app gracefully handles any future changes to this list.
     *
     * @var string
     */
    public $shippingCostType = null;
}
