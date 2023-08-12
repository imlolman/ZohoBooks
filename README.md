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
$contacts->list_of_contacts();

$invoices = new Invoices();
$invoices->list_of_invoices();

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

# APIs available in the SDK:

## Table of Contents

- [Projects](#projects)
  - [create_a_project](#create_a_project)
  - [list_of_projects](#list_of_projects)
- [SalesOrder](#salesorder)
  - [create_sales_order](#create_sales_order)
  - [update_sales_order](#update_sales_order)
  - [list_of_sales_orders](#list_of_sales_orders)
  - [get_a_sales_order](#get_a_sales_order)
  - [delete_a_sales_order](#delete_a_sales_order)
  - [mark_a_sales_order_as_open](#mark_a_sales_order_as_open)
  - [mark_a_sales_order_as_void](#mark_a_sales_order_as_void)
  - [get*sales_order_email_content*](#get_sales_order_email_content_)
  - [bulk_export_sales_orders](#bulk_export_sales_orders)
  - [bulk_print_sales_orders](#bulk_print_sales_orders)
  - [update_billing_address](#update_billing_address)
  - [update_shipping_address](#update_shipping_address)
  - [list_sales_orders_templates](#list_sales_orders_templates)
  - [update_sales_order_template](#update_sales_order_template)
  - [get_a_sales_order_attachment](#get_a_sales_order_attachment)
  - [add_attachment_to_a_sales_order](#add_attachment_to_a_sales_order)
  - [update_attachment_preference](#update_attachment_preference)
  - [delete_an_attachment](#delete_an_attachment)
  - [list_sales_order_commens_and_history](#list_sales_order_commens_and_history)
  - [add_comment](#add_comment)
  - [update_comment](#update_comment)
  - [delete_a_comment](#delete_a_comment)
  - [email_a_sales_order](#email_a_sales_order)
- [PurchaseOrder](#purchaseorder)
  - [list_of_purchase_orders](#list_of_purchase_orders)
  - [create_a_purchase_order](#create_a_purchase_order)
- [OpeningBalance](#openingbalance)
  - [create_opening_balance](#create_opening_balance)
  - [get_opening_balance](#get_opening_balance)
- [RecurringExpenses](#recurringexpenses)
  - [create_a_recurring_expenses](#create_a_recurring_expenses)
  - [list_of_recurring_expenses](#list_of_recurring_expenses)
- [Invoices](#invoices)
  - [create_an_invoice](#create_an_invoice)
  - [list_of_invoices](#list_of_invoices)
- [Contacts](#contacts)
  - [create_a_contact](#create_a_contact)
  - [list_of_contacts](#list_of_contacts)
- [VendorPayments](#vendorpayments)
  - [create_a_vendor_payment](#create_a_vendor_payment)
  - [list_of_vendor_payments](#list_of_vendor_payments)
- [VendorCredits](#vendorcredits)
  - [create_a_vendor_credit](#create_a_vendor_credit)
  - [list_of_vendor_credits](#list_of_vendor_credits)
- [RecurringInvoices](#recurringinvoices)
  - [create_a_recurring_invoice](#create_a_recurring_invoice)
  - [list_of_recurring_invoices](#list_of_recurring_invoices)
- [Expenses](#expenses)
  - [create_an_expense](#create_an_expense)
  - [list_of_expenses](#list_of_expenses)
- [Currency](#currency)
  - [create_a_currency](#create_a_currency)
  - [list_of_currencies](#list_of_currencies)
- [BaseCurrencyAdjustment](#basecurrencyadjustment)
  - [create_a_base_currency_adjustment](#create_a_base_currency_adjustment)
  - [list_of_base_currency_adjustments](#list_of_base_currency_adjustments)
- [Estimates](#estimates)
  - [create_an_estimate](#create_an_estimate)
  - [list_of_estimates](#list_of_estimates)
- [Taxes](#taxes)
  - [list_of_taxes](#list_of_taxes)
  - [create_a_tax](#create_a_tax)
- [Journals](#journals)
  - [create_a_journal](#create_a_journal)
  - [list_of_journals](#list_of_journals)
- [Bills](#bills)
  - [create_a_bill](#create_a_bill)
  - [list_of_bills](#list_of_bills)
- [TimeEntries](#timeentries)
  - [create_a_time_entry](#create_a_time_entry)
  - [list_of_time_entries](#list_of_time_entries)
- [ChartOfAccounts](#chartofaccounts)
  - [create_a_chart_of_account](#create_a_chart_of_account)
  - [list_of_chart_of_accounts](#list_of_chart_of_accounts)
- [Tasks](#tasks)
  - [create_a_task](#create_a_task)
  - [list_of_tasks](#list_of_tasks)
- [Organization](#organization)
  - [list_of_organization](#list_of_organization)
  - [create_an_organization](#create_an_organization)
- [CustomerPayments](#customerpayments)
  - [create_a_customer_payment](#create_a_customer_payment)
  - [list_of_customer_payments](#list_of_customer_payments)
- [RetainerInvoices](#retainerinvoices)
  - [create_a_retainer_invoice](#create_a_retainer_invoice)
  - [list_of_retainer_invoices](#list_of_retainer_invoices)
- [Users](#users)
  - [create_a_user](#create_a_user)
  - [list_of_users](#list_of_users)
- [CreditNotes](#creditnotes)
  - [create_a_credit_notes](#create_a_credit_notes)
  - [list_of_credit_notes](#list_of_credit_notes)
- [Items](#items)
  - [create_an_item](#create_an_item)
  - [list_of_items](#list_of_items)
- [BankAccount](#bankaccount)
  - [create_a_bank_account](#create_a_bank_account)
  - [update_bank_account](#update_bank_account)
  - [get_account_details](#get_account_details)
  - [list_view_of_accounts](#list_view_of_accounts)
  - [delete_an_account](#delete_an_account)
  - [deactivate_account](#deactivate_account)
  - [activate_account](#activate_account)
  - [get_last_imported_statement](#get_last_imported_statement)
  - [delete_last_imported_statement](#delete_last_imported_statement)
- [BankRule](#bankrule)
  - [create_a_rule](#create_a_rule)
  - [update_a_rule](#update_a_rule)
  - [get_a_rule](#get_a_rule)
  - [get_rules_list](#get_rules_list)
  - [delete_a_rule](#delete_a_rule)
- [BankTransactions](#banktransactions)
  - [list_of_bank_transactions](#list_of_bank_transactions)
  - [create_a_bank_transaction](#create_a_bank_transaction)
- [ContactPersons](#contactpersons)
  - [create_a_contact_persons](#create_a_contact_persons)
  - [list_of_contact_persons](#list_of_contact_persons)

# Projects <a name='projects'></a>

## create_a_project <a name='create_a_project'></a>

### Arguments:

- $data = []

### Example:

```php
$projects = new Projects();
$projects->create_a_project([]);
```

## list_of_projects <a name='list_of_projects'></a>

### Arguments:

- No arguments required.

### Example:

```php
$projects = new Projects();
$projects->list_of_projects();
```

# SalesOrder <a name='salesorder'></a>

## create_sales_order <a name='create_sales_order'></a>

### Arguments:

- $data = []

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->create_sales_order([]);
```

## update_sales_order <a name='update_sales_order'></a>

### Arguments:

- $data = []

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->update_sales_order([]);
```

## list_of_sales_orders <a name='list_of_sales_orders'></a>

### Arguments:

- No arguments required.

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->list_of_sales_orders();
```

## get_a_sales_order <a name='get_a_sales_order'></a>

### Arguments:

- No arguments required.

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->get_a_sales_order();
```

## delete_a_sales_order <a name='delete_a_sales_order'></a>

### Arguments:

- No arguments required.

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->delete_a_sales_order();
```

## mark_a_sales_order_as_open <a name='mark_a_sales_order_as_open'></a>

### Arguments:

- $data = []

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->mark_a_sales_order_as_open([]);
```

## mark_a_sales_order_as_void <a name='mark_a_sales_order_as_void'></a>

### Arguments:

- $data = []

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->mark_a_sales_order_as_void([]);
```

## get*sales_order_email_content* <a name='get_sales_order_email_content_'></a>

### Arguments:

- No arguments required.

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->get_sales_order_email_content_();
```

## bulk_export_sales_orders <a name='bulk_export_sales_orders'></a>

### Arguments:

- $organization_id
- $salesorder_ids

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->bulk_export_sales_orders();
```

## bulk_print_sales_orders <a name='bulk_print_sales_orders'></a>

### Arguments:

- $organization_id
- $salesorder_ids

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->bulk_print_sales_orders();
```

## update_billing_address <a name='update_billing_address'></a>

### Arguments:

- $data = []

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->update_billing_address([]);
```

## update_shipping_address <a name='update_shipping_address'></a>

### Arguments:

- $data = []

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->update_shipping_address([]);
```

## list_sales_orders_templates <a name='list_sales_orders_templates'></a>

### Arguments:

- No arguments required.

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->list_sales_orders_templates();
```

## update_sales_order_template <a name='update_sales_order_template'></a>

### Arguments:

- $data = []

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->update_sales_order_template([]);
```

## get_a_sales_order_attachment <a name='get_a_sales_order_attachment'></a>

### Arguments:

- No arguments required.

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->get_a_sales_order_attachment();
```

## add_attachment_to_a_sales_order <a name='add_attachment_to_a_sales_order'></a>

### Arguments:

- $data = []

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->add_attachment_to_a_sales_order([]);
```

## update_attachment_preference <a name='update_attachment_preference'></a>

### Arguments:

- $data = []

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->update_attachment_preference([]);
```

## delete_an_attachment <a name='delete_an_attachment'></a>

### Arguments:

- No arguments required.

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->delete_an_attachment();
```

## list_sales_order_commens_and_history <a name='list_sales_order_commens_and_history'></a>

### Arguments:

- No arguments required.

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->list_sales_order_commens_and_history();
```

## add_comment <a name='add_comment'></a>

### Arguments:

- $data = []

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->add_comment([]);
```

## update_comment <a name='update_comment'></a>

### Arguments:

- $data = []

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->update_comment([]);
```

## delete_a_comment <a name='delete_a_comment'></a>

### Arguments:

- No arguments required.

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->delete_a_comment();
```

## email_a_sales_order <a name='email_a_sales_order'></a>

### Arguments:

- $data = []

### Example:

```php
$salesorder = new SalesOrder();
$salesorder->email_a_sales_order([]);
```

# PurchaseOrder <a name='purchaseorder'></a>

## list_of_purchase_orders <a name='list_of_purchase_orders'></a>

### Arguments:

- No arguments required.

### Example:

```php
$purchaseorder = new PurchaseOrder();
$purchaseorder->list_of_purchase_orders();
```

## create_a_purchase_order <a name='create_a_purchase_order'></a>

### Arguments:

- $data = []

### Example:

```php
$purchaseorder = new PurchaseOrder();
$purchaseorder->create_a_purchase_order([]);
```

# OpeningBalance <a name='openingbalance'></a>

## create_opening_balance <a name='create_opening_balance'></a>

### Arguments:

- $data = []

### Example:

```php
$openingbalance = new OpeningBalance();
$openingbalance->create_opening_balance([]);
```

## get_opening_balance <a name='get_opening_balance'></a>

### Arguments:

- No arguments required.

### Example:

```php
$openingbalance = new OpeningBalance();
$openingbalance->get_opening_balance();
```

# RecurringExpenses <a name='recurringexpenses'></a>

## create_a_recurring_expenses <a name='create_a_recurring_expenses'></a>

### Arguments:

- $data = []

### Example:

```php
$recurringexpenses = new RecurringExpenses();
$recurringexpenses->create_a_recurring_expenses([]);
```

## list_of_recurring_expenses <a name='list_of_recurring_expenses'></a>

### Arguments:

- No arguments required.

### Example:

```php
$recurringexpenses = new RecurringExpenses();
$recurringexpenses->list_of_recurring_expenses();
```

# Invoices <a name='invoices'></a>

## create_an_invoice <a name='create_an_invoice'></a>

### Arguments:

- $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->create_an_invoice([]);
```

## list_of_invoices <a name='list_of_invoices'></a>

### Arguments:

- No arguments required.

### Example:

```php
$invoices = new Invoices();
$invoices->list_of_invoices();
```

# Contacts <a name='contacts'></a>

## create_a_contact <a name='create_a_contact'></a>

### Arguments:

- $data = []

### Example:

```php
$contacts = new Contacts();
$contacts->create_a_contact([]);
```

## list_of_contacts <a name='list_of_contacts'></a>

### Arguments:

- No arguments required.

### Example:

```php
$contacts = new Contacts();
$contacts->list_of_contacts();
```

# VendorPayments <a name='vendorpayments'></a>

## create_a_vendor_payment <a name='create_a_vendor_payment'></a>

### Arguments:

- $data = []

### Example:

```php
$vendorpayments = new VendorPayments();
$vendorpayments->create_a_vendor_payment([]);
```

## list_of_vendor_payments <a name='list_of_vendor_payments'></a>

### Arguments:

- No arguments required.

### Example:

```php
$vendorpayments = new VendorPayments();
$vendorpayments->list_of_vendor_payments();
```

# VendorCredits <a name='vendorcredits'></a>

## create_a_vendor_credit <a name='create_a_vendor_credit'></a>

### Arguments:

- $data = []

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->create_a_vendor_credit([]);
```

## list_of_vendor_credits <a name='list_of_vendor_credits'></a>

### Arguments:

- No arguments required.

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->list_of_vendor_credits();
```

# RecurringInvoices <a name='recurringinvoices'></a>

## create_a_recurring_invoice <a name='create_a_recurring_invoice'></a>

### Arguments:

- $data = []

### Example:

```php
$recurringinvoices = new RecurringInvoices();
$recurringinvoices->create_a_recurring_invoice([]);
```

## list_of_recurring_invoices <a name='list_of_recurring_invoices'></a>

### Arguments:

- No arguments required.

### Example:

```php
$recurringinvoices = new RecurringInvoices();
$recurringinvoices->list_of_recurring_invoices();
```

# Expenses <a name='expenses'></a>

## create_an_expense <a name='create_an_expense'></a>

### Arguments:

- $data = []

### Example:

```php
$expenses = new Expenses();
$expenses->create_an_expense([]);
```

## list_of_expenses <a name='list_of_expenses'></a>

### Arguments:

- No arguments required.

### Example:

```php
$expenses = new Expenses();
$expenses->list_of_expenses();
```

# Currency <a name='currency'></a>

## create_a_currency <a name='create_a_currency'></a>

### Arguments:

- $data = []

### Example:

```php
$currency = new Currency();
$currency->create_a_currency([]);
```

## list_of_currencies <a name='list_of_currencies'></a>

### Arguments:

- No arguments required.

### Example:

```php
$currency = new Currency();
$currency->list_of_currencies();
```

# BaseCurrencyAdjustment <a name='basecurrencyadjustment'></a>

## create_a_base_currency_adjustment <a name='create_a_base_currency_adjustment'></a>

### Arguments:

- $organization_id
- $account_ids
- $data = []

### Example:

```php
$basecurrencyadjustment = new BaseCurrencyAdjustment();
$basecurrencyadjustment->create_a_base_currency_adjustment([]);
```

## list_of_base_currency_adjustments <a name='list_of_base_currency_adjustments'></a>

### Arguments:

- No arguments required.

### Example:

```php
$basecurrencyadjustment = new BaseCurrencyAdjustment();
$basecurrencyadjustment->list_of_base_currency_adjustments();
```

# Estimates <a name='estimates'></a>

## create_an_estimate <a name='create_an_estimate'></a>

### Arguments:

- $data = []

### Example:

```php
$estimates = new Estimates();
$estimates->create_an_estimate([]);
```

## list_of_estimates <a name='list_of_estimates'></a>

### Arguments:

- No arguments required.

### Example:

```php
$estimates = new Estimates();
$estimates->list_of_estimates();
```

# Taxes <a name='taxes'></a>

## list_of_taxes <a name='list_of_taxes'></a>

### Arguments:

- No arguments required.

### Example:

```php
$taxes = new Taxes();
$taxes->list_of_taxes();
```

## create_a_tax <a name='create_a_tax'></a>

### Arguments:

- $data = []

### Example:

```php
$taxes = new Taxes();
$taxes->create_a_tax([]);
```

# Journals <a name='journals'></a>

## create_a_journal <a name='create_a_journal'></a>

### Arguments:

- $data = []

### Example:

```php
$journals = new Journals();
$journals->create_a_journal([]);
```

## list_of_journals <a name='list_of_journals'></a>

### Arguments:

- No arguments required.

### Example:

```php
$journals = new Journals();
$journals->list_of_journals();
```

# Bills <a name='bills'></a>

## create_a_bill <a name='create_a_bill'></a>

### Arguments:

- $data = []

### Example:

```php
$bills = new Bills();
$bills->create_a_bill([]);
```

## list_of_bills <a name='list_of_bills'></a>

### Arguments:

- No arguments required.

### Example:

```php
$bills = new Bills();
$bills->list_of_bills();
```

# TimeEntries <a name='timeentries'></a>

## create_a_time_entry <a name='create_a_time_entry'></a>

### Arguments:

- $data = []

### Example:

```php
$timeentries = new TimeEntries();
$timeentries->create_a_time_entry([]);
```

## list_of_time_entries <a name='list_of_time_entries'></a>

### Arguments:

- No arguments required.

### Example:

```php
$timeentries = new TimeEntries();
$timeentries->list_of_time_entries();
```

# ChartOfAccounts <a name='chartofaccounts'></a>

## create_a_chart_of_account <a name='create_a_chart_of_account'></a>

### Arguments:

- $data = []

### Example:

```php
$chartofaccounts = new ChartOfAccounts();
$chartofaccounts->create_a_chart_of_account([]);
```

## list_of_chart_of_accounts <a name='list_of_chart_of_accounts'></a>

### Arguments:

- No arguments required.

### Example:

```php
$chartofaccounts = new ChartOfAccounts();
$chartofaccounts->list_of_chart_of_accounts();
```

# Tasks <a name='tasks'></a>

## create_a_task <a name='create_a_task'></a>

### Arguments:

- $data = []

### Example:

```php
$tasks = new Tasks();
$tasks->create_a_task([]);
```

## list_of_tasks <a name='list_of_tasks'></a>

### Arguments:

- No arguments required.

### Example:

```php
$tasks = new Tasks();
$tasks->list_of_tasks();
```

# Organization <a name='organization'></a>

## list_of_organization <a name='list_of_organization'></a>

### Arguments:

- No arguments required.

### Example:

```php
$organization = new Organization();
$organization->list_of_organization();
```

## create_an_organization <a name='create_an_organization'></a>

### Arguments:

- $data = []

### Example:

```php
$organization = new Organization();
$organization->create_an_organization([]);
```

# CustomerPayments <a name='customerpayments'></a>

## create_a_customer_payment <a name='create_a_customer_payment'></a>

### Arguments:

- $data = []

### Example:

```php
$customerpayments = new CustomerPayments();
$customerpayments->create_a_customer_payment([]);
```

## list_of_customer_payments <a name='list_of_customer_payments'></a>

### Arguments:

- No arguments required.

### Example:

```php
$customerpayments = new CustomerPayments();
$customerpayments->list_of_customer_payments();
```

# RetainerInvoices <a name='retainerinvoices'></a>

## create_a_retainer_invoice <a name='create_a_retainer_invoice'></a>

### Arguments:

- $data = []

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->create_a_retainer_invoice([]);
```

## list_of_retainer_invoices <a name='list_of_retainer_invoices'></a>

### Arguments:

- No arguments required.

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->list_of_retainer_invoices();
```

# Users <a name='users'></a>

## create_a_user <a name='create_a_user'></a>

### Arguments:

- $data = []

### Example:

```php
$users = new Users();
$users->create_a_user([]);
```

## list_of_users <a name='list_of_users'></a>

### Arguments:

- No arguments required.

### Example:

```php
$users = new Users();
$users->list_of_users();
```

# CreditNotes <a name='creditnotes'></a>

## create_a_credit_notes <a name='create_a_credit_notes'></a>

### Arguments:

- $data = []

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->create_a_credit_notes([]);
```

## list_of_credit_notes <a name='list_of_credit_notes'></a>

### Arguments:

- No arguments required.

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->list_of_credit_notes();
```

# Items <a name='items'></a>

## create_an_item <a name='create_an_item'></a>

### Arguments:

- $data = []

### Example:

```php
$items = new Items();
$items->create_an_item([]);
```

## list_of_items <a name='list_of_items'></a>

### Arguments:

- No arguments required.

### Example:

```php
$items = new Items();
$items->list_of_items();
```

# BankAccount <a name='bankaccount'></a>

## create_a_bank_account <a name='create_a_bank_account'></a>

### Arguments:

- $data = []

### Example:

```php
$bankaccount = new BankAccount();
$bankaccount->create_a_bank_account([]);
```

## update_bank_account <a name='update_bank_account'></a>

### Arguments:

- $data = []

### Example:

```php
$bankaccount = new BankAccount();
$bankaccount->update_bank_account([]);
```

## get_account_details <a name='get_account_details'></a>

### Arguments:

- No arguments required.

### Example:

```php
$bankaccount = new BankAccount();
$bankaccount->get_account_details();
```

## list_view_of_accounts <a name='list_view_of_accounts'></a>

### Arguments:

- No arguments required.

### Example:

```php
$bankaccount = new BankAccount();
$bankaccount->list_view_of_accounts();
```

## delete_an_account <a name='delete_an_account'></a>

### Arguments:

- No arguments required.

### Example:

```php
$bankaccount = new BankAccount();
$bankaccount->delete_an_account();
```

## deactivate_account <a name='deactivate_account'></a>

### Arguments:

- $data = []

### Example:

```php
$bankaccount = new BankAccount();
$bankaccount->deactivate_account([]);
```

## activate_account <a name='activate_account'></a>

### Arguments:

- $data = []

### Example:

```php
$bankaccount = new BankAccount();
$bankaccount->activate_account([]);
```

## get_last_imported_statement <a name='get_last_imported_statement'></a>

### Arguments:

- No arguments required.

### Example:

```php
$bankaccount = new BankAccount();
$bankaccount->get_last_imported_statement();
```

## delete_last_imported_statement <a name='delete_last_imported_statement'></a>

### Arguments:

- No arguments required.

### Example:

```php
$bankaccount = new BankAccount();
$bankaccount->delete_last_imported_statement();
```

# BankRule <a name='bankrule'></a>

## create_a_rule <a name='create_a_rule'></a>

### Arguments:

- $data = []

### Example:

```php
$bankrule = new BankRule();
$bankrule->create_a_rule([]);
```

## update_a_rule <a name='update_a_rule'></a>

### Arguments:

- $data = []

### Example:

```php
$bankrule = new BankRule();
$bankrule->update_a_rule([]);
```

## get_a_rule <a name='get_a_rule'></a>

### Arguments:

- No arguments required.

### Example:

```php
$bankrule = new BankRule();
$bankrule->get_a_rule();
```

## get_rules_list <a name='get_rules_list'></a>

### Arguments:

- $account_id
- $organization_id

### Example:

```php
$bankrule = new BankRule();
$bankrule->get_rules_list();
```

## delete_a_rule <a name='delete_a_rule'></a>

### Arguments:

- No arguments required.

### Example:

```php
$bankrule = new BankRule();
$bankrule->delete_a_rule();
```

# BankTransactions <a name='banktransactions'></a>

## list_of_bank_transactions <a name='list_of_bank_transactions'></a>

### Arguments:

- No arguments required.

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->list_of_bank_transactions();
```

## create_a_bank_transaction <a name='create_a_bank_transaction'></a>

### Arguments:

- $data = []

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->create_a_bank_transaction([]);
```

# ContactPersons <a name='contactpersons'></a>

## create_a_contact_persons <a name='create_a_contact_persons'></a>

### Arguments:

- $data = []

### Example:

```php
$contactpersons = new ContactPersons();
$contactpersons->create_a_contact_persons([]);
```

## list_of_contact_persons <a name='list_of_contact_persons'></a>

### Arguments:

- No arguments required.

### Example:

```php
$contactpersons = new ContactPersons();
$contactpersons->list_of_contact_persons();
```
