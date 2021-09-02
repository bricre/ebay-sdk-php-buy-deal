<?php

namespace Ebay\Buy\Deal\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The detailed data returned for the event item.
 */
class EventItem extends AbstractModel
{
    /**
     * The additional images for the event item.
     *
     * @var \Ebay\Buy\Deal\Model\Image[]
     */
    public $additionalImages = null;

    /**
     * The IDs of the ancestors for the primary category.
     *
     * @var string[]
     */
    public $categoryAncestorIds = null;

    /**
     * The ID of the leaf category for the event item. A leaf category is the lowest
     * level in a category and has no children.
     *
     * @var string
     */
    public $categoryId = null;

    /**
     * A string value specifying the Energy Efficiency class.
     *
     * @var string
     */
    public $energyEfficiencyClass = null;

    /**
     * The unique event identifier associated with the item.
     *
     * @var string
     */
    public $eventId = null;

    /**
     * The image for the event item.
     *
     * @var \Ebay\Buy\Deal\Model\Image
     */
    public $image = null;

    /**
     * The item web URL with affiliate attribution.
     *
     * @var string
     */
    public $itemAffiliateWebUrl = null;

    /**
     * The unique identifier for the event item group. This is the parent item ID for
     * the seller-defined variations. Note: This field is returned for multiple-SKU
     * items.
     *
     * @var string
     */
    public $itemGroupId = null;

    /**
     * An enumeration value that indicates the type of item group. An item group
     * contains items that have various aspect differences, such as color, size, or
     * storage capacity. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/deal/types/api:ItemGroupTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $itemGroupType = null;

    /**
     * The unique identifier for the event item. Note: This field is only returned for
     * single-SKU items.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * The web URL for the event item.
     *
     * @var string
     */
    public $itemWebUrl = null;

    /**
     * The legacy item ID associated with the event item.
     *
     * @var string
     */
    public $legacyItemId = null;

    /**
     * The original price for the event item, and the discount amount and percentage.
     *
     * @var \Ebay\Buy\Deal\Model\MarketingPrice
     */
    public $marketingPrice = null;

    /**
     * The applicable price for the event item.
     *
     * @var \Ebay\Buy\Deal\Model\Amount
     */
    public $price = null;

    /**
     * A list of programs applicable to the event item.
     *
     * @var string[]|For implementation help, refer to <a
     *                   href='https://developer.ebay.com/api-docs/buy/deal/types/api:ProgramEnum'>eBay
     *                   API documentation</a>[]
     */
    public $qualifiedPrograms = null;

    /**
     * The cost required to ship the event item.
     *
     * @var \Ebay\Buy\Deal\Model\ShippingOption[]
     */
    public $shippingOptions = null;

    /**
     * The price per unit for the event item. Some European countries require listings
     * for certain types of products to include the price per unit so that buyers can
     * accurately compare prices. For example: &quot;unitPricingMeasure&quot;:
     * &quot;100g&quot;, &quot;unitPrice&quot;: { &nbsp;&nbsp;&quot;value&quot;:
     * &quot;7.99&quot;, &nbsp;&nbsp;&quot;currency&quot;: &quot;GBP&quot;.
     *
     * @var \Ebay\Buy\Deal\Model\Amount
     */
    public $unitPrice = null;

    /**
     * The designation used to specify the quantity of the event item, such as size,
     * weight, volume, and count. This helps buyers compare prices. For example, the
     * following tells the buyer that the item is 7.99 per 100 grams.
     * &quot;unitPricingMeasure&quot;: &quot;100g&quot;, &quot;unitPrice&quot;: {
     * &nbsp;&nbsp;&quot;value&quot;: &quot;7.99&quot;,
     * &nbsp;&nbsp;&quot;currency&quot;: &quot;GBP&quot;.
     *
     * @var string
     */
    public $unitPricingMeasure = null;
}
