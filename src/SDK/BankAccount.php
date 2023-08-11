<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class BankAccount extends BaseClass {

  /**
   * Create a bank account
   * URL: https://books.zoho.com/api/v3/bankaccounts?organization_id={{Organization.Organization_ID}}
   * Method: POST
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function create_a_bank_account($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts?organization_id={{Organization.Organization_ID}}');
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
   * Update bank account
   * URL: https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}?organization_id={{Organization.Organization_ID}}
   * Method: PUT
   * @param $organization_id
   * Headers:
   *  - Content-Type: application/x-www-form-urlencoded
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function update_bank_account($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}?organization_id={{Organization.Organization_ID}}');
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
    return $this->executeRequest('PUT', $url, $options);
  }


  /**
   * Get account details
   * URL: https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}?organization_id={{Organization.Organization_ID}}
   * Method: GET
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function get_account_details($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}?organization_id={{Organization.Organization_ID}}');
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
   * List view of accounts
   * URL: https://books.zoho.com/api/v3/bankaccounts?organization_id={{Organization.Organization_ID}}
   * Method: GET
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function list_view_of_accounts($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts?organization_id={{Organization.Organization_ID}}');
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
   * Delete an account
   * URL: https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}?organization_id={{Organization.Organization_ID}}
   * Method: DELETE
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function delete_an_account($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}?organization_id={{Organization.Organization_ID}}');
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


  /**
   * Deactivate account
   * URL: https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}/inactive?organization_id={{Organization.Organization_ID}}
   * Method: POST
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function deactivate_account($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}/inactive?organization_id={{Organization.Organization_ID}}');
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
   * Activate account
   * URL: https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}/active?organization_id={{Organization.Organization_ID}}
   * Method: POST
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function activate_account($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}/active?organization_id={{Organization.Organization_ID}}');
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
   * Get last imported statement
   * URL: https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}/statement/lastimported?organization_id={{Organization.Organization_ID}}
   * Method: GET
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function get_last_imported_statement($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}/statement/lastimported?organization_id={{Organization.Organization_ID}}');
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
   * Delete last imported statement
   * URL: https://books.zoho.com/api/v3/bankaccounts/${Accounts.Account_ID}/statement/${Statements.Statement_ID}?organization_id={{Organization.Organization_ID}}
   * Method: DELETE
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function delete_last_imported_statement($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/bankaccounts/${Accounts.Account_ID}/statement/${Statements.Statement_ID}?organization_id={{Organization.Organization_ID}}');
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
