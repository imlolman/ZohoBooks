<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Organization extends BaseClass {

  /**
   * List of Organizations
   * URL: https://books.zoho.com/api/v3/organizations
   * Method: GET
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function list_of_organizations() {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/organizations');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Authorization') => $this->replaceVariables('Zoho-authtoken {{User.Auth_Token}}'),
    ];
    $options['json'] = [
      ];
    return $this->executeRequest('GET', $url, $options);
  }


  /**
   * Create an Organization
   * URL: https://books.zoho.com/api/v3/organizations
   * Method: POST
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function create_an_organization() {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/organizations');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Authorization') => $this->replaceVariables('Zoho-authtoken {{User.Auth_Token}}'),
    ];
    $options['json'] = [
      ];
    return $this->executeRequest('POST', $url, $options);
  }


}
