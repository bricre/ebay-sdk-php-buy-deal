<?php

namespace Ebay\Buy\Deal\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The terms for the event, provided in a full-text description and summary.
 */
class Terms extends AbstractModel
{
    /**
     * A full-text description of the terms.
     *
     * @var string
     */
    public $fullText = null;

    /**
     * A summarized description of the terms.
     *
     * @var string
     */
    public $summary = null;
}
