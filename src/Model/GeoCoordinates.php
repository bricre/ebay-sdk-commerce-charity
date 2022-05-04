<?php

namespace Ebay\Commerce\Charity\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Defines the format of a geographic coordinate.
 */
class GeoCoordinates extends AbstractModel
{
    /**
     * The latitude component of the geographic coordinate.
     *
     * @var float
     */
    public $latitude = null;

    /**
     * The longitude component of the geographic coordinate.
     *
     * @var float
     */
    public $longitude = null;
}
