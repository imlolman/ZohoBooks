<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class VendorPayments extends BaseClass {

  /**
   * Create a Vendor Payment
   * URL: https://books.zoho.com/api/v3/vendorpayments?organization_id={{Organization.Organization_ID}}
   * Method: POST
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function create_a_vendor_payment($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/vendorpayments?organization_id={{Organization.Organization_ID}}');
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
   * List of Vendor Payments
   * URL: https://books.zoho.com/api/v3/vendorpayments?organization_id={{Organization.Organization_ID}}
   * Method: GET
   * @param $organization_id
   * Headers:
   *  - Authorization: Zoho-authtoken {{User.Auth_Token}}
   */
  public function list_of_vendor_payments($organization_id) {
    $url = $this->replaceVariables('https://books.zoho.com/api/v3/vendorpayments?organization_id={{Organization.Organization_ID}}');
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
