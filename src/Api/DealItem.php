<?php

namespace Ebay\Buy\Deal\Api;

use Ebay\Buy\Deal\Model\DealItemSearchResponse as DealItemSearchResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class DealItem extends AbstractAPI
{
    /**
     * This method retrieves a paginated set of deal items. The result set contains all
     * deal items associated with the specified search criteria and marketplace ID.
     * Request headers This method uses the X-EBAY-C-ENDUSERCTX request header to
     * support revenue sharing for eBay Partner Networks and to improve the accuracy of
     * shipping and delivery time estimations. For details see, Request headers in the
     * Buying Integration Guide. Restrictions This method can return a maximum of
     * 10,000 items. For a list of supported sites and other restrictions, see API
     * Restrictions. eBay Partner Network: In order to receive a commission for your
     * sales, you must use the URL returned in the itemAffiliateWebUrl field to forward
     * your buyer to the ebay.com site.
     *
     * @param array $queries options:
     *                       'category_ids'	string	The unique identifier of the eBay category for the search.
     *                       'commissionable'	string	A filter for commissionable deals. Restriction: This
     *                       filter is currently only supported for the US marketplace.
     *                       'delivery_country'	string	A filter for items that can be shipped to the
     *                       specified country.
     *                       'limit'	string	The maximum number of items, from the current result set,
     *                       returned on a single page.
     *                       'offset'	string	The number of items that will be skipped in the result set. This
     *                       is used with the limit field to control the pagination of the output. For
     *                       example, if the offset is set to 0 and the limit is set to 10, the method will
     *                       retrieve items 1 through 10 from the list of items returned. If the offset is
     *                       set to 10 and the limit is set to 10, the method will retrieve items 11 through
     *                       20 from the list of items returned. Default: 0
     *
     * @return DealItemSearchResponse
     */
    public function gets(array $queries = []): DealItemSearchResponse
    {
        return $this->client->request('getDealItems', 'GET', 'deal_item',
            [
                'query' => $queries,
            ]
        );
    }
}
