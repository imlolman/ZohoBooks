<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class ContactPersons extends BaseClass {

  /**
   * Create a Contact Persons
   * URL: https://books.zoho.com/api/v3/contacts/contactpersons?organization_id={{Organization.Organization_ID}}
   * Method: POST
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function create_a_contact_persons($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/contacts/contactpersons?organization_id={{Organization.Organization_ID}}');
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
   * List of Contact Persons
   * URL: https://books.zoho.com/api/v3/contacts/contactpersons?organization_id={{Organization.Organization_ID}}
   * Method: GET
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   *  - Accept-Language: application/json
   */
  public function list_of_contact_persons($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/contacts/contactpersons?organization_id={{Organization.Organization_ID}}');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Authorization') => $this->replaceVariables('Zoho-authtoken {{User.Auth_Token}}'),
        $this->replaceVariables('Accept-Language') => $this->replaceVariables('application/json'),
    ];
    $options['json'] = [
      ];
    $options['query'] = [
        $this->replaceVariables('organization_id') => $this->replaceVariables($organization_id),
    ];
    return $this->executeRequest('GET', $url, $options);
  }


}
