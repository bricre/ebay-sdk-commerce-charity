<?php

namespace Ebay\Commerce\Charity\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The logo of the charitable organization.
 */
class Image extends AbstractModel
{
    /**
     * The height of the logo image.
     *
     * @var string
     */
    public $height = null;

    /**
     * The URL to the logo image location.
     *
     * @var string
     */
    public $imageUrl = null;

    /**
     * The width of the logo image.
     *
     * @var string
     */
    public $width = null;
}
