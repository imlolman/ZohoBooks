<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class BankRule extends BaseClass {

  /**
   * Create a rule
   * URL: https://books.zoho.com/api/v3/bankaccounts/rules?organization_id={{Organization.Organization_ID}}
   * Method: POST
   * @param $organization_id
   * Headers:
   *  - Content-Type: application/x-www-form-urlencoded
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function create_a_rule($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/rules?organization_id={{Organization.Organization_ID}}');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Content-Type') => $this->replaceVariables('application/x-www-form-urlencoded'),
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
   * Update a rule
   * URL: https://books.zoho.com/api/v3/bankaccounts/rules/${Rule.Rule_ID}?organization_id={{Organization.Organization_ID}}
   * Method: PUT
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function update_a_rule($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/rules/${Rule.Rule_ID}?organization_id={{Organization.Organization_ID}}');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Authorization') => $this->replaceVariables('Zoho-authtoken {{User.Auth_Token}}'),
    ];
    $options['json'] = [
      ];
    $options['query'] = [
        $this->replaceVariables('organization_id') => $this->replaceVariables($organization_id),
    ];
    return $this->executeRequest('PUT', $url, $options);
  }


  /**
   * Get a rule
   * URL: https://books.zoho.com/api/v3/bankaccounts/rules/{Rule.Rule_ID}?organization_id={{Organization.Organization_ID}}
   * Method: GET
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function get_a_rule($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/rules/{Rule.Rule_ID}?organization_id={{Organization.Organization_ID}}');
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


  /**
   * Get Rules List
   * URL: https://books.zoho.com/api/v3/bankaccounts/rules?account_id=${Bank.Account_ID}&organization_id={{Organization.Organization_ID}}
   * Method: GET
   * @param $account_id
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function get_rules_list($account_id, $organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/rules?account_id=${Bank.Account_ID}&organization_id={{Organization.Organization_ID}}');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Authorization') => $this->replaceVariables('Zoho-authtoken {{User.Auth_Token}}'),
    ];
    $options['json'] = [
      ];
    $options['query'] = [
        $this->replaceVariables('account_id') => $this->replaceVariables($account_id),
        $this->replaceVariables('organization_id') => $this->replaceVariables($organization_id),
    ];
    return $this->executeRequest('GET', $url, $options);
  }


  /**
   * Delete a rule
   * URL: https://books.zoho.com/api/v3/bankaccounts/rules/${Rules.Rule_ID}?organization_id={{Organization.Organization_ID}}
   * Method: DELETE
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function delete_a_rule($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/rules/${Rules.Rule_ID}?organization_id={{Organization.Organization_ID}}');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Authorization') => $this->replaceVariables('Zoho-authtoken {{User.Auth_Token}}'),
    ];
    $options['json'] = [
      ];
    $options['query'] = [
        $this->replaceVariables('organization_id') => $this->replaceVariables($organization_id),
    ];
    return $this->executeRequest('DELETE', $url, $options);
  }


}
