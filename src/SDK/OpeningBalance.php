<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class OpeningBalance extends BaseClass {

  /**
   * Create Opening Balance
   * URL: https://books.zoho.com/api/v3/settings/openingbalances?organization_id={{Organization.Organization_ID}}
   * Method: POST
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function create_opening_balance($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/settings/openingbalances?organization_id={{Organization.Organization_ID}}');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Authorization') => $this->replaceVariables('Zoho-authtoken {{User.Auth_Token}}'),
    ];
    $options['json'] = [
      ];
    $options['query'] = [
        $this->replaceVariables('organization_id') => $this->replaceVariables($organization_id),
    ];
    return $this->executeRequest('POST', $url, $options);
  }


  /**
   * Get Opening Balance
   * URL: https://books.zoho.com/api/v3/settings/openingbalances?organization_id={{Organization.Organization_ID}}
   * Method: GET
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function get_opening_balance($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/settings/openingbalances?organization_id={{Organization.Organization_ID}}');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Authorization') => $this->replaceVariables('Zoho-authtoken {{User.Auth_Token}}'),
    ];
    $options['json'] = [
      ];
    $options['query'] = [
        $this->replaceVariables('organization_id') => $this->replaceVariables($organization_id),
    ];
    return $this->executeRequest('GET', $url, $options);
  }


}