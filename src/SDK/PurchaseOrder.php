<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class PurchaseOrder extends BaseClass {

  /**
   * List of Purchase Orders
   * URL: https://books.zoho.com/api/v3/purchaseorders?organization_id={{Organization.Organization_ID}}
   * Method: GET
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function list_of_purchase_orders($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/purchaseorders?organization_id={{Organization.Organization_ID}}');
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
   * Create a Purchase Order
   * URL: https://books.zoho.com/api/v3/purchaseorders?organization_id={{Organization.Organization_ID}}
   * Method: POST
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function create_a_purchase_order($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/purchaseorders?organization_id={{Organization.Organization_ID}}');
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


}
