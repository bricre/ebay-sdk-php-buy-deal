<?php

namespace Ebay\Buy\Deal\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The detailed data returned for the deal item.
 */
class DealItem extends AbstractModel
{
    /**
     * The additional images for the deal item.
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
     * The ID of the leaf category for the deal item. A leaf category is the lowest
     * level in a category and has no children.
     *
     * @var string
     */
    public $categoryId = null;

    /**
     * A boolean value specifying whether the listing has commission.
     *
     * @var bool
     */
    public $commissionable = null;

    /**
     * The deal associated with the item with affiliate attribution.
     *
     * @var string
     */
    public $dealAffiliateWebUrl = null;

    /**
     * The date after which the deal ends.
     *
     * @var string
     */
    public $dealEndDate = null;

    /**
     * The date on which the deal starts.
     *
     * @var string
     */
    public $dealStartDate = null;

    /**
     * The web URL for the deal associated with the item.
     *
     * @var string
     */
    public $dealWebUrl = null;

    /**
     * A string value specifying the Energy Efficiency class.
     *
     * @var string
     */
    public $energyEfficiencyClass = null;

    /**
     * The primary image for the deal item.
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
     * The unique identifier for the deal item group. This is the parent item ID for
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
     * The unique identifier for the deal item. Note: This field is only returned for
     * single-SKU items.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * The web URL for the deal item.
     *
     * @var string
     */
    public $itemWebUrl = null;

    /**
     * The legacy item ID associated with the deal item.
     *
     * @var string
     */
    public $legacyItemId = null;

    /**
     * The original price for the deal item, and the discount amount and percentage.
     *
     * @var \Ebay\Buy\Deal\Model\MarketingPrice
     */
    public $marketingPrice = null;

    /**
     * The price for the deal item. Note: The price does include the value-added tax
     * (VAT) for applicable jurisdictions when requested from supported marketplaces.
     * In this case, users must pass the X-EBAY-C-MARKETPLACE-ID request header
     * specifying the supported marketplace (such as EBAY_GB) to see the VAT-inclusive
     * pricing. For more information on VAT, refer to VAT Obligations in the EU.
     *
     * @var \Ebay\Buy\Deal\Model\Amount
     */
    public $price = null;

    /**
     * A list of programs applicable to the item.
     *
     * @var string[]|For implementation help, refer to <a
     *                   href='https://developer.ebay.com/api-docs/buy/deal/types/api:ProgramEnum'>eBay
     *                   API documentation</a>[]
     */
    public $qualifiedPrograms = null;

    /**
     * The cost required to ship the deal item.
     *
     * @var \Ebay\Buy\Deal\Model\ShippingOption[]
     */
    public $shippingOptions = null;

    /**
     * The price per unit for the deal item. Some European countries require listings
     * for certain types of products to include the price per unit so that buyers can
     * accurately compare prices. For example: &quot;unitPricingMeasure&quot;:
     * &quot;100g&quot;, &quot;unitPrice&quot;: { &nbsp;&nbsp;&quot;value&quot;:
     * &quot;7.99&quot;, &nbsp;&nbsp;&quot;currency&quot;: &quot;GBP&quot;.
     *
     * @var \Ebay\Buy\Deal\Model\Amount
     */
    public $unitPrice = null;

    /**
     * The designation used to specify the quantity of the deal item, such as size,
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
