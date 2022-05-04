<?php

namespace Ebay\Commerce\Charity\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The full location, ID, logo and other details of the charity organization.
 */
class CharityOrg extends AbstractModel
{
    /**
     * The ID of the charitable organization.
     *
     * @var string
     */
    public $charityOrgId = null;

    /**
     * The description of the charitable organization.
     *
     * @var string
     */
    public $description = null;

    /**
     * The location details of the charitable organization.
     *
     * @var \Ebay\Commerce\Charity\Model\Location
     */
    public $location = null;

    /**
     * The logo of the charitable organization.
     *
     * @var \Ebay\Commerce\Charity\Model\Image
     */
    public $logoImage = null;

    /**
     * The mission statement of the charitable organization.
     *
     * @var string
     */
    public $missionStatement = null;

    /**
     * The name of the charitable organization.
     *
     * @var string
     */
    public $name = null;

    /**
     * The registration ID for the charitable organization.<br /><br /><span
     * class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> For
     * the US marketplace, this is the EIN.</span>.
     *
     * @var string
     */
    public $registrationId = null;

    /**
     * The link to the website for the charitable organization.
     *
     * @var string
     */
    public $website = null;
}
