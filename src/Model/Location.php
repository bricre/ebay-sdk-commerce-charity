<?php

namespace Ebay\Commerce\Charity\Model;

use OpenAPI\Runtime\AbstractModel;

class Location extends AbstractModel
{
    /**
     * The address of the charitable organization.
     *
     * @var \Ebay\Commerce\Charity\Model\Address
     */
    public $address = null;

    /**
     * The geo-coordinates of the charitable organization.
     *
     * @var \Ebay\Commerce\Charity\Model\GeoCoordinates
     */
    public $geoCoordinates = null;
}
