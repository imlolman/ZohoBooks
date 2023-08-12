<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Contacts extends BaseClass {

  /**
   * Create a Contact
   * URL: https://books.zoho.com/api/v3/contacts?organization_id={{ORGANIZATION_ID}}
   * Method: POST
   * Headers:
   *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
   * @param array $data = []
   */
  public function create_a_contact($data = []) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/contacts?organization_id={{ORGANIZATION_ID}}');
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

    // dd($options);

    return $this->executeRequest('POST', $url, $options);
  }

  /**
   * List of Contacts
   * URL: https://books.zoho.com/api/v3/contacts?organization_id={{ORGANIZATION_ID}}
   * Method: GET
   * Headers:
   *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
   */
  public function list_of_contacts() {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/contacts?organization_id={{ORGANIZATION_ID}}');
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
