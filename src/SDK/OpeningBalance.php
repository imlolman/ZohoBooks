<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class OpeningBalance extends BaseClass {

  /**
   * Create Opening Balance
   * URL: https://books.zoho.com/api/v3/settings/openingbalances?organization_id={{ORGANIZATION_ID}}
   * Method: POST
   * Headers:
   *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
   * @param array $data = []
   */
  public function create_opening_balance($data = []) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/settings/openingbalances?organization_id={{ORGANIZATION_ID}}');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Authorization') => $this->replaceVariables('Zoho-authtoken {{ACCESS_TOKEN}}'),
    ];
    $options['form_params'] = [
        "JSONString" => json_encode($data)
    ];
    $options['query'] = [
        $this->replaceVariables('organization_id') => $this->replaceVariables('{{ORGANIZATION_ID}}'),
    ];
    return $this->executeRequest('POST', $url, $options);
  }

  /**
   * Get Opening Balance
   * URL: https://books.zoho.com/api/v3/settings/openingbalances?organization_id={{ORGANIZATION_ID}}
   * Method: GET
   * Headers:
   *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
   */
  public function get_opening_balance() {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/settings/openingbalances?organization_id={{ORGANIZATION_ID}}');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Authorization') => $this->replaceVariables('Zoho-authtoken {{ACCESS_TOKEN}}'),
    ];
    $options['query'] = [
        $this->replaceVariables('organization_id') => $this->replaceVariables('{{ORGANIZATION_ID}}'),
    ];
    return $this->executeRequest('GET', $url, $options);
  }

}
