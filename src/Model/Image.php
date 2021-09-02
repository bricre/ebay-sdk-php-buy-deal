<?php

namespace Ebay\Buy\Deal\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the details of an image, such as size and URL.
 */
class Image extends AbstractModel
{
    /**
     * The height of the image.
     *
     * @var string
     */
    public $height = null;

    /**
     * The relative path to the image location.
     *
     * @var string
     */
    public $imageUrl = null;

    /**
     * The text associated with the image.
     *
     * @var string
     */
    public $text = null;

    /**
     * The width of the image.
     *
     * @var string
     */
    public $width = null;
}
