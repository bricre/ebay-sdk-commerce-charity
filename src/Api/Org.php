<?php

namespace Ebay\Commerce\Charity\Api;

use Ebay\Commerce\Charity\Model\CharityOrg;
use Ebay\Commerce\Charity\Model\CharitySearchResponse;

class Org extends AbstractAPI
{
    /**
     * This call is used to retrieve detailed information about supported charitable
     * organizations. It allows users to retrieve the details for a specific charitable
     * organization using its charity organization ID.<br /><br />The call returns the
     * full details for the charitable organization that matches the specified ID.
     *
     * @param string $charity_org_id the unique ID of the charitable organization
     * @param array  $headers        options:
     *                               'X-EBAY-C-MARKETPLACE-ID'	string	A header used to specify the eBay marketplace
     *                               ID.<br /><br /><b>Valid Values:</b> <code>EBAY_GB</code> and
     *                               <code>EBAY_US</code>
     *
     * @return CharityOrg
     */
    public function get(string $charity_org_id, array $headers = []): CharityOrg
    {
        return $this->request(
        'getCharityOrg',
        'GET',
        "charity_org/$charity_org_id",
        null,
        [],
        $headers
        );
    }

    /**
     * This call is used to search for supported charitable organizations. It allows
     * users to search for a specific charitable organization, or for multiple
     * charitable organizations, from a particular charitable domain and/or
     * geographical region, or by using search criteria.<br /><br />The call returns
     * paginated search results containing the charitable organizations that match the
     * specified criteria.
     *
     * @param array $queries options:
     *                       'limit'	string	The number of items, from the result set, returned in a single
     *                       page.<br /><br /><b>Valid Values:</b> <code>1-100</code><br /><br
     *                       /><b>Default:</b> <code>20</code>
     *                       'offset'	string	The number of items that will be skipped in the result set. This
     *                       is used with the <b>limit</b> field to control the pagination of the output.<br
     *                       /><br />For example, if the <b>offset</b> is set to <code>0</code> and the
     *                       <b>limit</b> is set to <code>10</code>, the method will retrieve items 1 through
     *                       10 from the list of items returned. If the <b>offset</b> is set to
     *                       <code>10</code> and the <b>limit</b> is set to <code>10</code>, the method will
     *                       retrieve items 11 through 20 from the list of items returned.<br /><br
     *                       /><b>Valid Values:</b> <code>0-10,000</code><br /><br /><b>Default:</b>
     *                       <code>0</code>
     *                       'q'	string	A query string that matches the keywords in name, mission statement,
     *                       or description.
     *                       'registration_ids'	string	A comma-separated list of charitable organization
     *                       registration IDs.<br /><br /><span class="tablenote"><b>Note: </b>Do not specify
     *                       this parameter for query-based searches. Specify either the <b>q</b> or
     *                       <b>registration_ids</b> parameter, but not both.</span><br /><br /><b>Maximum
     *                       Limit:</b> <code>20</code>
     * @param array $headers options:
     *                       'X-EBAY-C-MARKETPLACE-ID'	string	A header used to specify the eBay marketplace
     *                       ID.<br /><br /><b>Valid Values:</b> <code>EBAY_GB</code> and
     *                       <code>EBAY_US</code>
     *
     * @return CharitySearchResponse
     */
    public function gets(array $queries = [], array $headers = []): CharitySearchResponse
    {
        return $this->request(
        'getCharityOrgs',
        'GET',
        'charity_org',
        null,
        $queries,
        $headers
        );
    }

    /**
     * This call allows users to retrieve the details for a specific charitable
     * organization using its legacy charity ID, which has also been referred to as the
     * charity number, external ID, and PayPal Giving Fund ID. The legacy charity
     * ID is separate from eBay’s generic charity ID.
     *
     * @param array $queries options:
     *                       'legacy_charity_org_id'	string	The legacy ID of the charitable organization.<br
     *                       /><br /><span class="tablenote"><b>Note: </b>The legacy charity ID is the
     *                       identifier assigned to an organization upon registration with the PayPal Giving
     *                       Fund (PPGF). It has also been referred to as the external ID/charity
     *                       number.</span>
     * @param array $headers options:
     *                       'X-EBAY-C-MARKETPLACE-ID'	string	A header used to specify the eBay marketplace
     *                       ID.<br /><br /><b>Valid Values:</b> <code>EBAY_GB</code> and
     *                       <code>EBAY_US</code>
     *
     * @return CharityOrg
     */
    public function getByLegacyId(array $queries = [], array $headers = []): CharityOrg
    {
        return $this->request(
        'getCharityOrgByLegacyId',
        'GET',
        'charity_org/get_charity_org_by_legacy_id',
        null,
        $queries,
        $headers
        );
    }
}
