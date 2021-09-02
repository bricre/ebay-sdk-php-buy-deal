<?php

namespace Ebay\Buy\Deal\Api;

use Ebay\Buy\Deal\Model\Event as EventModel;
use Ebay\Buy\Deal\Model\EventSearchResponse as EventSearchResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Event extends AbstractAPI
{
    /**
     * This method retrieves the details for an eBay event. The result set contains
     * detailed information associated with the specified event ID, such as applicable
     * coupons, start and end dates, and event terms. Request headers This method uses
     * the X-EBAY-C-ENDUSERCTX request header to support revenue sharing for eBay
     * Partner Networks and to improve the accuracy of shipping and delivery time
     * estimations. For details see, Request headers in the Buying Integration Guide.
     * Restrictions This method can return a maximum of 10,000 items. For a list of
     * supported sites and other restrictions, see API Restrictions. eBay Partner
     * Network: In order to receive a commission for your sales, you must use the URL
     * returned in the itemAffiliateWebUrl field to forward your buyer to the ebay.com
     * site.
     *
     * @param string $event_id the unique identifier for the eBay event
     *
     * @return EventModel
     */
    public function get(string $event_id): EventModel
    {
        return $this->client->request('getEvent', 'GET', "event/{$event_id}",
            [
            ]
        );
    }

    /**
     * This method returns paginated results containing all eBay events for the
     * specified marketplace. Request headers This method uses the X-EBAY-C-ENDUSERCTX
     * request header to support revenue sharing for eBay Partner Networks and to
     * improve the accuracy of shipping and delivery time estimations. For details see,
     * Request headers in the Buying Integration Guide. Restrictions This method can
     * return a maximum of 10,000 items. For a list of supported sites and other
     * restrictions, see API Restrictions. eBay Partner Network: In order to receive a
     * commission for your sales, you must use the URL returned in the
     * itemAffiliateWebUrl field to forward your buyer to the ebay.com site.
     *
     * @param array $queries options:
     *                       'limit'	string	The maximum number of items, from the current result set,
     *                       returned on a single page. Default: 20 Maximum Value: 100
     *                       'offset'	string	The number of items that will be skipped in the result set. This
     *                       is used with the limit field to control the pagination of the output. For
     *                       example, if the offset is set to 0 and the limit is set to 10, the method will
     *                       retrieve items 1 through 10 from the list of items returned. If the offset is
     *                       set to 10 and the limit is set to 10, the method will retrieve items 11 through
     *                       20 from the list of items returned. Default: 0
     *
     * @return EventSearchResponse
     */
    public function gets(array $queries = []): EventSearchResponse
    {
        return $this->client->request('getEvents', 'GET', 'event',
            [
                'query' => $queries,
            ]
        );
    }
}
