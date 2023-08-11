<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class RecurringInvoices extends BaseClass {

  /**
   * Create a Recurring Invoice
   * URL: https://books.zoho.com/api/v3/recurringinvoices?organization_id={{Organization.Organization_ID}}
   * Method: POST
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function create_a_recurring_invoice($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/recurringinvoices?organization_id={{Organization.Organization_ID}}');
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
   * List of Recurring Invoices
   * URL: https://books.zoho.com/api/v3/recurringinvoices?organization_id={{Organization.Organization_ID}}
   * Method: GET
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function list_of_recurring_invoices($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/recurringinvoices?organization_id={{Organization.Organization_ID}}');
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
