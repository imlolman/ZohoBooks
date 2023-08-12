<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Organization extends BaseClass {

  /**
   * List of Organizations
   * URL: https://books.zoho.com/api/v3/organizations
   * Method: GET
   * Headers:
   *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
   */
  public function list_of_organization() {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/organizations');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Authorization') => $this->replaceVariables('Zoho-authtoken {{ACCESS_TOKEN}}'),
    ];
    return $this->executeRequest('GET', $url, $options);
  }

  /**
   * Create an Organization
   * URL: https://books.zoho.com/api/v3/organizations
   * Method: POST
   * Headers:
   *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
   * @param array $data = []
   */
  public function create_an_organization($data = []) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/organizations');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Authorization') => $this->replaceVariables('Zoho-authtoken {{ACCESS_TOKEN}}'),
    ];
    $options['form_params'] = [
        "JSONString" => json_encode($data)
    ];
    return $this->executeRequest('POST', $url, $options);
  }

}
