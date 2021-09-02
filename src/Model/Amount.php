<?php

namespace Ebay\Buy\Deal\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The currency and value of the item.
 */
class Amount extends AbstractModel
{
    /**
     * The three-letter ISO 4217 code representing the currency of the amount in the
     * value field. Default: The currency of the authenticated user's country. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/deal/types/bas:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $currency = null;

    /**
     * The monetary value, in the currency specified by the currency field.
     *
     * @var string
     */
    public $value = null;
}
