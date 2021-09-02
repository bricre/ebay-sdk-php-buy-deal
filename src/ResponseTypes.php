<?php

namespace Ebay\Buy\Deal;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'getDealItems' => [
            '200.' => 'Ebay\\Buy\\Deal\\Model\\DealItemSearchResponse',
        ],
        'getEvent' => [
            '200.' => 'Ebay\\Buy\\Deal\\Model\\Event',
        ],
        'getEvents' => [
            '200.' => 'Ebay\\Buy\\Deal\\Model\\EventSearchResponse',
        ],
        'getEventItems' => [
            '200.' => 'Ebay\\Buy\\Deal\\Model\\EventItemSearchResponse',
        ],
    ];
}
