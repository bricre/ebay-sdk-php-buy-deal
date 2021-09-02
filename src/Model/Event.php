<?php

namespace Ebay\Buy\Deal\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The result set for the event search.
 */
class Event extends AbstractModel
{
    /**
     * A list of coupons associated with the event.
     *
     * @var \Ebay\Buy\Deal\Model\Coupon[]
     */
    public $applicableCoupons = null;

    /**
     * The end date for the event.
     *
     * @var string
     */
    public $endDate = null;

    /**
     * The URL of the View Event page for the event, which includes the affiliate
     * tracking ID.
     *
     * @var string
     */
    public $eventAffiliateWebUrl = null;

    /**
     * The unique identifier for the event.
     *
     * @var string
     */
    public $eventId = null;

    /**
     * The web URL for the event.
     *
     * @var string
     */
    public $eventWebUrl = null;

    /**
     * The images for the event.
     *
     * @var \Ebay\Buy\Deal\Model\Image[]
     */
    public $images = null;

    /**
     * The start date for the event.
     *
     * @var string
     */
    public $startDate = null;

    /**
     * The terms associated with the event.
     *
     * @var \Ebay\Buy\Deal\Model\Terms
     */
    public $terms = null;
}
