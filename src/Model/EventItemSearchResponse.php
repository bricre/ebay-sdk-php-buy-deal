<?php

namespace Ebay\Buy\Deal\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The result set for the event item search.
 */
class EventItemSearchResponse extends AbstractModel
{
    /**
     * A list of event items that match the search criteria.
     *
     * @var \Ebay\Buy\Deal\Model\EventItem[]
     */
    public $eventItems = null;

    /**
     * The relative path to the current set of results.
     *
     * @var string
     */
    public $href = null;

    /**
     * The maximum number of items, from the current result set, returned on a single
     * page. Default: 20.
     *
     * @var int
     */
    public $limit = null;

    /**
     * The relative path to the next set of results.
     *
     * @var string
     */
    public $next = null;

    /**
     * The number of items that will be skipped in the result set. This is used with
     * the limit field to control the pagination of the output. For example, if the
     * offset is set to 0 and the limit is set to 10, the method will retrieve items 1
     * through 10 from the list of items returned. If the offset is set to 10 and the
     * limit is set to 10, the method will retrieve items 11 through 20 from the list
     * of items returned. Default: 0.
     *
     * @var int
     */
    public $offset = null;

    /**
     * The relative path to the previous set of results.
     *
     * @var string
     */
    public $prev = null;

    /**
     * The total number of matches for the specified search criteria.
     *
     * @var int
     */
    public $total = null;
}
