<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class BankRule extends BaseClass {

  /**
   * Create a rule
   * URL: https://books.zoho.com/api/v3/bankaccounts/rules?organization_id={{ORGANIZATION_ID}}
   * Method: POST
   * Headers:
   *  - Content-Type: application/x-www-form-urlencoded
   *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
   * @param array $data = []
   */
  public function create_a_rule($data = []) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/rules?organization_id={{ORGANIZATION_ID}}');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Content-Type') => $this->replaceVariables('application/x-www-form-urlencoded'),
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
   * Update a rule
   * URL: https://books.zoho.com/api/v3/bankaccounts/rules/${Rule.Rule_ID}?organization_id={{ORGANIZATION_ID}}
   * Method: PUT
   * Headers:
   *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
   * @param array $data = []
   */
  public function update_a_rule($data = []) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/rules/${Rule.Rule_ID}?organization_id={{ORGANIZATION_ID}}');
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
    return $this->executeRequest('PUT', $url, $options);
  }

  /**
   * Get a rule
   * URL: https://books.zoho.com/api/v3/bankaccounts/rules/{Rule.Rule_ID}?organization_id={{ORGANIZATION_ID}}
   * Method: GET
   * Headers:
   *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
   */
  public function get_a_rule() {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/rules/{Rule.Rule_ID}?organization_id={{ORGANIZATION_ID}}');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Authorization') => $this->replaceVariables('Zoho-authtoken {{ACCESS_TOKEN}}'),
    ];
    $options['query'] = [
        $this->replaceVariables('organization_id') => $this->replaceVariables('{{ORGANIZATION_ID}}'),
    ];
    return $this->executeRequest('GET', $url, $options);
  }

  /**
   * Get Rules List
   * URL: https://books.zoho.com/api/v3/bankaccounts/rules?account_id=${Bank.Account_ID}&organization_id={{ORGANIZATION_ID}}
   * Method: GET
   * @param $account_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
   */
  public function get_rules_list($account_id, $organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/rules?account_id=${Bank.Account_ID}&organization_id={{ORGANIZATION_ID}}');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Authorization') => $this->replaceVariables('Zoho-authtoken {{ACCESS_TOKEN}}'),
    ];
    $options['query'] = [
        $this->replaceVariables('account_id') => $this->replaceVariables($account_id),
        $this->replaceVariables('organization_id') => $this->replaceVariables('{{ORGANIZATION_ID}}'),
    ];
    return $this->executeRequest('GET', $url, $options);
  }

  /**
   * Delete a rule
   * URL: https://books.zoho.com/api/v3/bankaccounts/rules/${Rules.Rule_ID}?organization_id={{ORGANIZATION_ID}}
   * Method: DELETE
   * Headers:
   *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
   */
  public function delete_a_rule() {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/rules/${Rules.Rule_ID}?organization_id={{ORGANIZATION_ID}}');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Authorization') => $this->replaceVariables('Zoho-authtoken {{ACCESS_TOKEN}}'),
    ];
    $options['query'] = [
        $this->replaceVariables('organization_id') => $this->replaceVariables('{{ORGANIZATION_ID}}'),
    ];
    return $this->executeRequest('DELETE', $url, $options);
  }

}
