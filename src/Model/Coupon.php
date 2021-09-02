<?php

namespace Ebay\Buy\Deal\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The details for the coupon available for the item.
 */
class Coupon extends AbstractModel
{
    /**
     * The coupon code.
     *
     * @var string
     */
    public $redemptionCode = null;

    /**
     * The terms of use associated with the coupon.
     *
     * @var \Ebay\Buy\Deal\Model\Terms
     */
    public $terms = null;
}
