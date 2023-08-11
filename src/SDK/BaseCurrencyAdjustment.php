<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class BaseCurrencyAdjustment extends BaseClass {

  /**
   * Create a Base Currency Adjustment
   * URL: https://books.zoho.com/api/v3/basecurrencyadjustment?organization_id={{Organization.Organization_ID}}&account_ids=${Accounts.Account_ID}
   * Method: POST
   * @param $organization_id
   * @param $account_ids
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function create_a_base_currency_adjustment($organization_id, $account_ids) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/basecurrencyadjustment?organization_id={{Organization.Organization_ID}}&account_ids=${Accounts.Account_ID}');
    $options = [];
    $options['headers'] = [
        $this->replaceVariables('Authorization') => $this->replaceVariables('Zoho-authtoken {{User.Auth_Token}}'),
    ];
    $options['json'] = [
      ];
    $options['query'] = [
        $this->replaceVariables('organization_id') => $this->replaceVariables($organization_id),
        $this->replaceVariables('account_ids') => $this->replaceVariables($account_ids),
    ];
    return $this->executeRequest('POST', $url, $options);
  }


  /**
   * List of Base Currency Adjustments
   * URL: https://books.zoho.com/api/v3/basecurrencyadjustment?organization_id={{Organization.Organization_ID}}
   * Method: GET
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function list_of_base_currency_adjustments($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/basecurrencyadjustment?organization_id={{Organization.Organization_ID}}');
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
