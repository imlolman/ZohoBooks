## Unofficial ZohoBooks SDK

This is a PHP SDK generated with the help of the Postman Collection of ZohoBooks API by using https://github.com/imlolman/php-sdk-generator-from-postman-sdk tool created by me and then modified to work with ZohoBooks API. This SDK is not officially supported by ZohoBooks.

### Installation

Since this repository is not registered on packagist, you need to add it manually to your composer.json

```
composer config repositories.zohobooks vcs https://github.com/imlolman/ZohoBooks
```

```
composer require imlolman/zohobooks
```

### Usage

```php

<?php
require_once __DIR__ . '/vendor/autoload.php';

use ZohoBooks\ZohoBooks; // For SDK initialization
use ZohoBooks\SDK\Contacts; // For Contacts API
use ZohoBooks\SDK\Invoices; // For Invoices API
// You can use any other API from the list of APIs in the SDK

// Retrive the config from .env file, database, or you can pass the config array directly
$config = [
  "CLIENT_ID" => "", // Your client id from Zoho Developer Console
  "CLIENT_SECRET" => "", // Your client secret from Zoho Developer Console
  "REDIRECT_URI" => "", // Your redirect uri from Zoho Developer Console
  "ACCESS_TOKEN" => "", // Your access token to be genetated using OAuth2
  "REFRESH_TOKEN" => "", // Your refresh token to be genetated using OAuth2
  "ORGANIZATION_ID" => "", // Your organization id from ZohoBooks
  "ACCESS_TOKEN_EXPIRY" => "", // Your access token to be genetated using OAuth2
]

// Initialize the SDK
$newConfig = ZohoBooks::init($config)->getConfig();

// If the access token is expired, it will automatically refresh the token
if ($newConfig['ACCESS_TOKEN_EXPIRY'] != $config['ACCESS_TOKEN_EXPIRY']) {
    // save it to the same location you have saved the config so that it can be used in the next request
}

// You can use any API from the list of APIs in the SDK
$contacts = new Contacts();
$contacts->list_contacts();

$invoices = new Invoices();
$invoices->list_invoices();

$contacts->create_a_contact([
  'contact_name' => 'John Doe',
  'company_name' => 'John Doe Company',
  'website' => 'https://johndoe.com',
  'billing_address' => [
    'address' => '123 Main St',
    'city' => 'New York',
    'state' => 'NY',
    'zip' => '10001',
    'country' => 'US',
  ],
  'shipping_address' => [
    'address' => '123 Main St',
    'city' => 'New York',
    'state' => 'NY',
    'zip' => '10001',
    'country' => 'US',
  ]
])

// For more information about the parameters, please refer to the official documentation at https://www.zoho.com/books/api/v3/
```
