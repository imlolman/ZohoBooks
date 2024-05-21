## Unofficial ZohoBooks SDK

This is a PHP SDK generated with the help of the Postman Collection of ZohoBooks API by using https://github.com/imlolman/php-sdk-generator-from-postman-sdk tool created by me and then modified to work with ZohoBooks API. This SDK is not officially supported by ZohoBooks.

### Installation

```
composer require imlolman/zohobooks
```

### Usage

1: We have to get code to get access and refresh token. We can get code by visiting the following URL in the browser and authorizing the zohoBooks, you will get code in return:
```https://accounts.zoho.com/oauth/v2/auth?response_type=code&client_id={{{{ CLIENT ID HERE }}}}&scope=ZohoBooks.fullaccess.all&redirect_uri={{{{ YOUR REDIRECT URI HERE }}}}&prompt=consent&access_type=offline```

2: After visiting the URL, you will get an authorization code that you can use to get access and refresh token by sending a `POST` request to the following URL:
```https://accounts.zoho.com/oauth/v2/token?client_id={{{{ CLIENT ID HERE }}}}&grant_type=authorization_code&client_secret={{{{ CLIENT SECRET HERE }}}}&redirect_uri={{{{ REDIRECT URI }}}}&code={{{{ AUTHORIZATION CODE FROM ABOVE REQUEST }}}}```

3: Once you have tokens, use in below code

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
  "ZOHO_BOOKS_DOMAIN" => "www.zohoapis.com", // Your ZohoBooks domain (default: www.zohoapis.com), can bewww.zohoapis.in,www.zohoapis.eu, etc.
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

# Table of Contents

-   [SalesOrders](#salesorders)
    -   [create_a_sales_order](#create_a_sales_order)
    -   [list_sales_orders](#list_sales_orders)
    -   [update_a_sales_order](#update_a_sales_order)
    -   [get_a_sales_order](#get_a_sales_order)
    -   [delete_a_sales_order](#delete_a_sales_order)
    -   [mark_a_sales_order_as_open](#mark_a_sales_order_as_open)
    -   [mark_a_sales_order_as_void](#mark_a_sales_order_as_void)
    -   [update_a_sales_order_sub_status](#update_a_sales_order_sub_status)
    -   [email_a_sales_order](#email_a_sales_order)
    -   [get_sales_order_email_content](#get_sales_order_email_content)
    -   [submit_a_sales_order_for_approval](#submit_a_sales_order_for_approval)
    -   [approve_a_sales_order](#approve_a_sales_order)
    -   [bulk_export_sales_orders](#bulk_export_sales_orders)
    -   [bulk_print_sales_orders](#bulk_print_sales_orders)
    -   [update_billing_address](#update_billing_address)
    -   [update_shipping_address](#update_shipping_address)
    -   [list_sales_order_templates](#list_sales_order_templates)
    -   [update_sales_order_template](#update_sales_order_template)
    -   [add_attachment_to_a_sales_order](#add_attachment_to_a_sales_order)
    -   [update_attachment_preference](#update_attachment_preference)
    -   [get_a_sales_order_attachment](#get_a_sales_order_attachment)
    -   [delete_an_attachment](#delete_an_attachment)
    -   [add_comment](#add_comment)
    -   [list_sales_order_comments_and_history](#list_sales_order_comments_and_history)
    -   [update_comment](#update_comment)
    -   [delete_a_comment](#delete_a_comment)
-   [Organizations](#organizations)
    -   [create_an_organization](#create_an_organization)
    -   [get_organization_details](#get_organization_details)
    -   [delete_an_organization](#delete_an_organization)
    -   [get_organization](#get_organization)
    -   [update_organization](#update_organization)
-   [BankRules](#bankrules)
    -   [create_a_rule](#create_a_rule)
    -   [get_rules_list](#get_rules_list)
    -   [update_a_rule](#update_a_rule)
    -   [get_a_rule](#get_a_rule)
    -   [delete_a_rule](#delete_a_rule)
-   [BankAccounts](#bankaccounts)
    -   [create_a_bank_account](#create_a_bank_account)
    -   [list_view_of_accounts](#list_view_of_accounts)
    -   [update_bank_account](#update_bank_account)
    -   [get_account_details](#get_account_details)
    -   [delete_an_account](#delete_an_account)
    -   [deactivate_account](#deactivate_account)
    -   [activate_account](#activate_account)
    -   [import_a_bank_credit_card_statement](#import_a_bank_credit_card_statement)
    -   [get_last_imported_statement](#get_last_imported_statement)
    -   [delete_last_imported_statement](#delete_last_imported_statement)
-   [Projects](#projects)
    -   [create_a_project](#create_a_project)
    -   [list_projects](#list_projects)
    -   [update_project](#update_project)
    -   [get_a_project](#get_a_project)
    -   [delete_project](#delete_project)
    -   [activate_project](#activate_project)
    -   [inactivate_a_project](#inactivate_a_project)
    -   [clone_project](#clone_project)
    -   [assign_users](#assign_users)
    -   [list_users](#list_users)
    -   [invite_user](#invite_user)
    -   [update_user](#update_user)
    -   [get_a_user](#get_a_user)
    -   [delete_user](#delete_user)
    -   [post_comment](#post_comment)
    -   [list_comments](#list_comments)
    -   [delete_comment](#delete_comment)
    -   [list_invoices](#list_invoices)
-   [RecurringBills](#recurringbills)
    -   [create_a_recurring_bill](#create_a_recurring_bill)
    -   [list_recurring_bills](#list_recurring_bills)
    -   [update_a_recurring_bill](#update_a_recurring_bill)
    -   [get_a_recurring_bill](#get_a_recurring_bill)
    -   [delete_a_recurring_bill](#delete_a_recurring_bill)
    -   [stop_a_recurring_bill](#stop_a_recurring_bill)
    -   [resume_a_recurring_bill](#resume_a_recurring_bill)
    -   [list_recurring_bill_history](#list_recurring_bill_history)
-   [CustomModules](#custommodules)
    -   [create_custom_modules](#create_custom_modules)
    -   [bulk_update_custom_module](#bulk_update_custom_module)
    -   [get_record_list_of_a_custom_module](#get_record_list_of_a_custom_module)
    -   [delete_custom_modules](#delete_custom_modules)
    -   [update_custom_module](#update_custom_module)
    -   [get_individual_record_details](#get_individual_record_details)
    -   [delete_individual_records](#delete_individual_records)
-   [RecurringExpenses](#recurringexpenses)
    -   [create_a_recurring_expense](#create_a_recurring_expense)
    -   [list_recurring_expenses](#list_recurring_expenses)
    -   [update_a_recurring_expense](#update_a_recurring_expense)
    -   [get_a_recurring_expense](#get_a_recurring_expense)
    -   [delete_a_recurring_expense](#delete_a_recurring_expense)
    -   [stop_a_recurring_expense](#stop_a_recurring_expense)
    -   [resume_a_recurring_expense](#resume_a_recurring_expense)
    -   [list_child_expenses_created](#list_child_expenses_created)
    -   [list_recurring_expense_history](#list_recurring_expense_history)
-   [Invoices](#invoices)
    -   [create_an_invoice](#create_an_invoice)
    -   [list_invoices](#list_invoices)
    -   [update_an_invoice](#update_an_invoice)
    -   [get_an_invoice](#get_an_invoice)
    -   [delete_an_invoice](#delete_an_invoice)
    -   [mark_an_invoice_as_sent](#mark_an_invoice_as_sent)
    -   [void_an_invoice](#void_an_invoice)
    -   [mark_as_draft](#mark_as_draft)
    -   [email_invoices](#email_invoices)
    -   [submit_an_invoice_for_approval](#submit_an_invoice_for_approval)
    -   [approve_an_invoice](#approve_an_invoice)
    -   [email_an_invoice](#email_an_invoice)
    -   [get_invoice_email_content](#get_invoice_email_content)
    -   [remind_customer](#remind_customer)
    -   [get_payment_reminder_mail_content](#get_payment_reminder_mail_content)
    -   [bulk_invoice_reminder](#bulk_invoice_reminder)
    -   [bulk_export_invoices](#bulk_export_invoices)
    -   [bulk_print_invoices](#bulk_print_invoices)
    -   [disable_payment_reminder](#disable_payment_reminder)
    -   [enable_payment_reminder](#enable_payment_reminder)
    -   [write_off_invoice](#write_off_invoice)
    -   [cancel_write_off](#cancel_write_off)
    -   [update_billing_address](#update_billing_address)
    -   [update_shipping_address](#update_shipping_address)
    -   [list_invoice_templates](#list_invoice_templates)
    -   [update_invoice_template](#update_invoice_template)
    -   [list_invoice_payments](#list_invoice_payments)
    -   [list_credits_applied](#list_credits_applied)
    -   [apply_credits](#apply_credits)
    -   [delete_a_payment](#delete_a_payment)
    -   [delete_applied_credit](#delete_applied_credit)
    -   [add_attachment_to_an_invoice](#add_attachment_to_an_invoice)
    -   [update_attachment_preference](#update_attachment_preference)
    -   [get_an_invoice_attachment](#get_an_invoice_attachment)
    -   [delete_an_attachment](#delete_an_attachment)
    -   [delete_the_expense_receipt](#delete_the_expense_receipt)
    -   [add_comment](#add_comment)
    -   [list_invoice_comments_and_history](#list_invoice_comments_and_history)
    -   [update_comment](#update_comment)
    -   [delete_a_comment](#delete_a_comment)
-   [Contacts](#contacts)
    -   [create_a_contact](#create_a_contact)
    -   [list_contacts](#list_contacts)
    -   [update_a_contact](#update_a_contact)
    -   [get_contact](#get_contact)
    -   [delete_a_contact](#delete_a_contact)
    -   [mark_as_active](#mark_as_active)
    -   [mark_as_inactive](#mark_as_inactive)
    -   [enable_portal_access](#enable_portal_access)
    -   [enable_payment_reminders](#enable_payment_reminders)
    -   [disable_payment_reminders](#disable_payment_reminders)
    -   [email_statement](#email_statement)
    -   [get_statement_mail_content](#get_statement_mail_content)
    -   [email_contact](#email_contact)
    -   [list_comments](#list_comments)
    -   [add_additional_address](#add_additional_address)
    -   [get_contact_addresses](#get_contact_addresses)
    -   [edit_additional_address](#edit_additional_address)
    -   [delete_additional_address](#delete_additional_address)
    -   [list_refunds](#list_refunds)
    -   [track_1099](#track_1099)
    -   [untrack_1099](#untrack_1099)
-   [VendorCredits](#vendorcredits)
    -   [create_a_vendor_credit](#create_a_vendor_credit)
    -   [list_vendor_credits](#list_vendor_credits)
    -   [update_vendor_credit](#update_vendor_credit)
    -   [get_vendor_credit](#get_vendor_credit)
    -   [delete_vendor_credit](#delete_vendor_credit)
    -   [convert_to_open](#convert_to_open)
    -   [void_vendor_credit](#void_vendor_credit)
    -   [submit_a_vendor_credit_for_approval](#submit_a_vendor_credit_for_approval)
    -   [approve_a_vendor_credit](#approve_a_vendor_credit)
    -   [apply_credits_to_a_bill](#apply_credits_to_a_bill)
    -   [list_bills_credited](#list_bills_credited)
    -   [delete_bills_credited](#delete_bills_credited)
    -   [refund_a_vendor_credit](#refund_a_vendor_credit)
    -   [list_refunds_of_a_vendor_credit](#list_refunds_of_a_vendor_credit)
    -   [update_vendor_credit_refund](#update_vendor_credit_refund)
    -   [get_vendor_credit_refund](#get_vendor_credit_refund)
    -   [delete_vendor_credit_refund](#delete_vendor_credit_refund)
    -   [list_vendor_credit_refunds](#list_vendor_credit_refunds)
    -   [add_a_comment](#add_a_comment)
    -   [list_vendor_credit_comments_and_history](#list_vendor_credit_comments_and_history)
    -   [delete_a_comment](#delete_a_comment)
-   [RecurringInvoices](#recurringinvoices)
    -   [create_a_recurring_invoice](#create_a_recurring_invoice)
    -   [list_all_recurring_invoice](#list_all_recurring_invoice)
    -   [update_recurring_invoice](#update_recurring_invoice)
    -   [get_a_recurring_invoice](#get_a_recurring_invoice)
    -   [delete_a_recurring_invoice](#delete_a_recurring_invoice)
    -   [stop_a_recurring_invoice](#stop_a_recurring_invoice)
    -   [resume_a_recurring_invoice](#resume_a_recurring_invoice)
    -   [update_recurring_invoice_template](#update_recurring_invoice_template)
    -   [list_recurring_invoice_history](#list_recurring_invoice_history)
-   [Expenses](#expenses)
    -   [create_an_expense](#create_an_expense)
    -   [list_expenses](#list_expenses)
    -   [update_an_expense](#update_an_expense)
    -   [get_an_expense](#get_an_expense)
    -   [delete_an_expense](#delete_an_expense)
    -   [list_expense_history_and_comments](#list_expense_history_and_comments)
    -   [create_an_employee](#create_an_employee)
    -   [list_employees](#list_employees)
    -   [get_an_employee](#get_an_employee)
    -   [delete_an_employee](#delete_an_employee)
    -   [add_receipt_to_an_expense](#add_receipt_to_an_expense)
    -   [get_an_expense_receipt](#get_an_expense_receipt)
    -   [delete_a_receipt](#delete_a_receipt)
-   [Currency](#currency)
    -   [create_a_currency](#create_a_currency)
    -   [list_currencies](#list_currencies)
    -   [update_a_currency](#update_a_currency)
    -   [get_a_currency](#get_a_currency)
    -   [delete_a_currency](#delete_a_currency)
    -   [create_an_exchange_rate](#create_an_exchange_rate)
    -   [list_exchange_rates](#list_exchange_rates)
    -   [update_an_exchange_rate](#update_an_exchange_rate)
    -   [get_an_exchange_rate](#get_an_exchange_rate)
    -   [delete_an_exchage_rate](#delete_an_exchage_rate)
-   [OpeningBalances](#openingbalances)
    -   [create_opening_balance](#create_opening_balance)
    -   [update_opening_balance](#update_opening_balance)
    -   [get_opening_balance](#get_opening_balance)
    -   [delete_opening_balance](#delete_opening_balance)
-   [BaseCurrencyAdjustment](#basecurrencyadjustment)
    -   [create_a_base_currency_adjustment](#create_a_base_currency_adjustment)
    -   [list_base_currency_adjustment](#list_base_currency_adjustment)
    -   [get_a_base_currency_adjustment](#get_a_base_currency_adjustment)
    -   [delete_a_base_currency_adjustment](#delete_a_base_currency_adjustment)
    -   [list_account_details_for_base_currency_adjustment](#list_account_details_for_base_currency_adjustment)
-   [Estimates](#estimates)
    -   [create_an_estimate](#create_an_estimate)
    -   [list_estimates](#list_estimates)
    -   [update_an_estimate](#update_an_estimate)
    -   [get_an_estimate](#get_an_estimate)
    -   [delete_an_estimate](#delete_an_estimate)
    -   [mark_an_estimate_as_sent](#mark_an_estimate_as_sent)
    -   [mark_an_estimate_as_accepted](#mark_an_estimate_as_accepted)
    -   [mark_an_estimate_as_declined](#mark_an_estimate_as_declined)
    -   [submit_an_estimate_for_approval](#submit_an_estimate_for_approval)
    -   [approve_an_estimate](#approve_an_estimate)
    -   [email_an_estimate](#email_an_estimate)
    -   [get_estimate_email_content](#get_estimate_email_content)
    -   [email_multiple_estimates](#email_multiple_estimates)
    -   [bulk_export_estimates](#bulk_export_estimates)
    -   [bulk_print_estimates](#bulk_print_estimates)
    -   [update_billing_address](#update_billing_address)
    -   [update_shipping_address](#update_shipping_address)
    -   [list_estimate_template](#list_estimate_template)
    -   [update_estimate_template](#update_estimate_template)
    -   [add_comments](#add_comments)
    -   [list_estimate_comments_and_history](#list_estimate_comments_and_history)
    -   [update_comment](#update_comment)
    -   [delete_a_comment](#delete_a_comment)
-   [Taxes](#taxes)
    -   [create_a_tax](#create_a_tax)
    -   [list_taxes](#list_taxes)
    -   [update_a_tax](#update_a_tax)
    -   [get_a_tax](#get_a_tax)
    -   [delete_a_tax](#delete_a_tax)
    -   [update_a_tax_group](#update_a_tax_group)
    -   [get_a_tax_group](#get_a_tax_group)
    -   [delete_a_tax_group](#delete_a_tax_group)
    -   [create_a_tax_group](#create_a_tax_group)
    -   [create*a_tax_authority\_\_us_and_ca_edition_only*](#create_a_tax_authority__us_and_ca_edition_only_)
    -   [list*tax_authorities\_\_us_edition_only*](#list_tax_authorities__us_edition_only_)
    -   [update*a_tax_authority\_\_us_and_ca_edition_only*](#update_a_tax_authority__us_and_ca_edition_only_)
    -   [get*a_tax_authority\_\_us_and_ca_edition_only*](#get_a_tax_authority__us_and_ca_edition_only_)
    -   [delete*a_tax_authority\_\_us_and_ca_edition_only*](#delete_a_tax_authority__us_and_ca_edition_only_)
    -   [create*a_tax_exemption\_\_us_edition_only*](#create_a_tax_exemption__us_edition_only_)
    -   [list*tax_exemptions\_\_us_edition_only*](#list_tax_exemptions__us_edition_only_)
    -   [update*a_tax_exemption\_\_us_edition_only*](#update_a_tax_exemption__us_edition_only_)
    -   [get*a_tax_exemption\_\_us_edition_only*](#get_a_tax_exemption__us_edition_only_)
    -   [delete*a_tax_exemption\_\_us_edition_only*](#delete_a_tax_exemption__us_edition_only_)
-   [Journals](#journals)
    -   [create_a_journal](#create_a_journal)
    -   [get_journal_list](#get_journal_list)
    -   [update_a_journal](#update_a_journal)
    -   [get_journal](#get_journal)
    -   [delete_a_journal](#delete_a_journal)
    -   [mark_a_journal_as_published](#mark_a_journal_as_published)
    -   [add_attachment_to_a_journal](#add_attachment_to_a_journal)
    -   [add_comment](#add_comment)
    -   [delete_a_comment](#delete_a_comment)
-   [Bills](#bills)
    -   [create_a_bill](#create_a_bill)
    -   [list_bills](#list_bills)
    -   [update_a_bill](#update_a_bill)
    -   [get_a_bill](#get_a_bill)
    -   [delete_a_bill](#delete_a_bill)
    -   [void_a_bill](#void_a_bill)
    -   [mark_a_bill_as_open](#mark_a_bill_as_open)
    -   [submit_a_bill_for_approval](#submit_a_bill_for_approval)
    -   [approve_a_bill](#approve_a_bill)
    -   [update_billing_address](#update_billing_address)
    -   [list_bill_payments](#list_bill_payments)
    -   [apply_credits](#apply_credits)
    -   [delete_a_payment](#delete_a_payment)
    -   [add_attachment_to_a_bill](#add_attachment_to_a_bill)
    -   [get_a_bill_attachment](#get_a_bill_attachment)
    -   [delete_an_attachment](#delete_an_attachment)
    -   [add_comment](#add_comment)
    -   [list_bill_comments_and_history](#list_bill_comments_and_history)
    -   [delete_a_comment](#delete_a_comment)
-   [TimeEntries](#timeentries)
    -   [log_time_entries](#log_time_entries)
    -   [list_time_entries](#list_time_entries)
    -   [delete_time_entries](#delete_time_entries)
    -   [update_time_entry](#update_time_entry)
    -   [get_a_time_entry](#get_a_time_entry)
    -   [delete_time_entry](#delete_time_entry)
    -   [start_timer](#start_timer)
    -   [stop_timer](#stop_timer)
    -   [get_timer](#get_timer)
-   [ChartOfAccounts](#chartofaccounts)
    -   [create_an_account](#create_an_account)
    -   [list_chart_of_accounts](#list_chart_of_accounts)
    -   [update_an_account](#update_an_account)
    -   [get_an_account](#get_an_account)
    -   [delete_an_account](#delete_an_account)
    -   [mark_an_account_as_active](#mark_an_account_as_active)
    -   [mark_an_account_as_inactive](#mark_an_account_as_inactive)
    -   [list_of_transactions_for_an_account](#list_of_transactions_for_an_account)
    -   [delete_a_transaction](#delete_a_transaction)
-   [Tasks](#tasks)
    -   [add_a_task](#add_a_task)
    -   [list_tasks](#list_tasks)
    -   [update_a_task](#update_a_task)
    -   [get_a_task](#get_a_task)
    -   [delete_task](#delete_task)
-   [CustomerPayments](#customerpayments)
    -   [create_a_payment](#create_a_payment)
    -   [list_customer_payments](#list_customer_payments)
    -   [update_a_payment](#update_a_payment)
    -   [retrieve_a_payment](#retrieve_a_payment)
    -   [delete_a_payment](#delete_a_payment)
    -   [refund_an_excess_customer_payment](#refund_an_excess_customer_payment)
    -   [list_refunds_of_a_customer_payment](#list_refunds_of_a_customer_payment)
    -   [update_a_refund](#update_a_refund)
    -   [details_of_a_refund](#details_of_a_refund)
    -   [delete_a_refund](#delete_a_refund)
-   [RetainerInvoices](#retainerinvoices)
    -   [create_a_retainerinvoice](#create_a_retainerinvoice)
    -   [list_a_retainer_invoices](#list_a_retainer_invoices)
    -   [update_a_retainerinvoice](#update_a_retainerinvoice)
    -   [get_a_retainer_invoice](#get_a_retainer_invoice)
    -   [delete_a_retainer_invoice](#delete_a_retainer_invoice)
    -   [mark_a_retainer_invoice_as_sent](#mark_a_retainer_invoice_as_sent)
    -   [update_retainer_invoice_template](#update_retainer_invoice_template)
    -   [void_a_retainer_invoice](#void_a_retainer_invoice)
    -   [mark_as_draft](#mark_as_draft)
    -   [submit_a_retainer_invoice_for_approval](#submit_a_retainer_invoice_for_approval)
    -   [approve_a_retainer_invoice](#approve_a_retainer_invoice)
    -   [email_a_retainer_invoice](#email_a_retainer_invoice)
    -   [get_retainer_invoice_email_content](#get_retainer_invoice_email_content)
    -   [update_billing_address](#update_billing_address)
    -   [list_retainer_invoice_templates](#list_retainer_invoice_templates)
    -   [add_attachment_to_a_retainer_invoice](#add_attachment_to_a_retainer_invoice)
    -   [get_a_retainer_invoice_attachment](#get_a_retainer_invoice_attachment)
    -   [delete_an_attachment](#delete_an_attachment)
    -   [add_comment](#add_comment)
    -   [list_retainer_invoice_comments_and_history](#list_retainer_invoice_comments_and_history)
    -   [update_comment](#update_comment)
    -   [delete_a_comment](#delete_a_comment)
-   [Users](#users)
    -   [create_a_user](#create_a_user)
    -   [list_users](#list_users)
    -   [update_a_user](#update_a_user)
    -   [get_a_user](#get_a_user)
    -   [delete_a_user](#delete_a_user)
    -   [get_current_user](#get_current_user)
    -   [invite_a_user](#invite_a_user)
    -   [mark_user_as_active](#mark_user_as_active)
    -   [mark_user_as_inactive](#mark_user_as_inactive)
-   [CreditNotes](#creditnotes)
    -   [create_a_credit_note](#create_a_credit_note)
    -   [list_all_credit_notes](#list_all_credit_notes)
    -   [update_a_credit_note](#update_a_credit_note)
    -   [get_a_credit_note](#get_a_credit_note)
    -   [delete_a_credit_note](#delete_a_credit_note)
    -   [email_a_credit_note](#email_a_credit_note)
    -   [get_email_content](#get_email_content)
    -   [void_a_credit_note](#void_a_credit_note)
    -   [convert_credit_note_to_draft](#convert_credit_note_to_draft)
    -   [convert_to_open](#convert_to_open)
    -   [submit_a_credit_note_for_approval](#submit_a_credit_note_for_approval)
    -   [approve_a_credit_note](#approve_a_credit_note)
    -   [email_history](#email_history)
    -   [update_billing_address](#update_billing_address)
    -   [update_shipping_address](#update_shipping_address)
    -   [list_credit_note_template](#list_credit_note_template)
    -   [update_a_credit_note_template](#update_a_credit_note_template)
    -   [credit_to_an_invoice](#credit_to_an_invoice)
    -   [list_invoices_credited](#list_invoices_credited)
    -   [delete_invoices_credited](#delete_invoices_credited)
    -   [add_a_comment](#add_a_comment)
    -   [list_credit_note_comments_and_history](#list_credit_note_comments_and_history)
    -   [delete_a_comment](#delete_a_comment)
    -   [list_credit_note_refunds](#list_credit_note_refunds)
    -   [refund_credit_note](#refund_credit_note)
    -   [list_refunds_of_a_credit_note](#list_refunds_of_a_credit_note)
    -   [update_credit_note_refund](#update_credit_note_refund)
    -   [get_credit_note_refund](#get_credit_note_refund)
    -   [delete_credit_note_refund](#delete_credit_note_refund)
-   [Items](#items)
    -   [create_an_item](#create_an_item)
    -   [list_items](#list_items)
    -   [update_an_item](#update_an_item)
    -   [get_an_item](#get_an_item)
    -   [delete_an_item](#delete_an_item)
    -   [mark_as_active](#mark_as_active)
    -   [mark_as_inactive](#mark_as_inactive)
-   [PurchaseOrders](#purchaseorders)
    -   [create_a_purchase_order](#create_a_purchase_order)
    -   [list_purchase_orders](#list_purchase_orders)
    -   [update_a_purchase_order](#update_a_purchase_order)
    -   [get_a_purchase_order](#get_a_purchase_order)
    -   [delete_purchase_order](#delete_purchase_order)
    -   [mark_a_purchase_order_as_open](#mark_a_purchase_order_as_open)
    -   [mark_as_billed](#mark_as_billed)
    -   [cancel_a_purchase_order](#cancel_a_purchase_order)
    -   [submit_a_purchase_order_for_approval](#submit_a_purchase_order_for_approval)
    -   [approve_a_purchase_order](#approve_a_purchase_order)
    -   [email_a_purchase_order](#email_a_purchase_order)
    -   [get_purchase_order_email_content](#get_purchase_order_email_content)
    -   [update_billing_address](#update_billing_address)
    -   [list_purchase_order_templates](#list_purchase_order_templates)
    -   [update_purchase_order_template](#update_purchase_order_template)
    -   [add_attachment_to_a_purchase_order](#add_attachment_to_a_purchase_order)
    -   [update_attachment_preference](#update_attachment_preference)
    -   [get_a_purchase_order_attachment](#get_a_purchase_order_attachment)
    -   [delete_an_attachment](#delete_an_attachment)
    -   [add_comment](#add_comment)
    -   [list_purchase_order_comments_and_history](#list_purchase_order_comments_and_history)
    -   [update_comment](#update_comment)
    -   [delete_a_comment](#delete_a_comment)
-   [BankTransactions](#banktransactions)
    -   [create_a_transaction_for_an_account](#create_a_transaction_for_an_account)
    -   [get_transactions_list](#get_transactions_list)
    -   [update_a_transaction](#update_a_transaction)
    -   [get_transaction](#get_transaction)
    -   [delete_a_transaction](#delete_a_transaction)
    -   [match_a_transaction](#match_a_transaction)
    -   [get_matching_transactions](#get_matching_transactions)
    -   [unmatch_a_matched_transaction](#unmatch_a_matched_transaction)
    -   [exclude_a_transaction](#exclude_a_transaction)
    -   [restore_a_transaction](#restore_a_transaction)
    -   [categorize_an_uncategorized_transaction](#categorize_an_uncategorized_transaction)
    -   [categorize_as_expense](#categorize_as_expense)
    -   [uncategorize_a_categorized_transaction](#uncategorize_a_categorized_transaction)
    -   [categorize_a_vendor_payment](#categorize_a_vendor_payment)
    -   [categorize_as_customer_payment](#categorize_as_customer_payment)
    -   [categorize_as_credit_note_refunds](#categorize_as_credit_note_refunds)
    -   [categorize_as_vendor_credit_refunds](#categorize_as_vendor_credit_refunds)
    -   [categorize_as_customer_payment_refund](#categorize_as_customer_payment_refund)
    -   [categorize_as_vendor_payment_refund](#categorize_as_vendor_payment_refund)
-   [ContactPersons](#contactpersons)
    -   [create_a_contact_person](#create_a_contact_person)
    -   [update_a_contact_person](#update_a_contact_person)
    -   [delete_a_contact_person](#delete_a_contact_person)
    -   [list_contact_persons](#list_contact_persons)
    -   [get_a_contact_person](#get_a_contact_person)
    -   [mark_as_primary_contact_person](#mark_as_primary_contact_person)

# SalesOrders <a name='salesorders'></a>

## create_a_sales_order <a name='create_a_sales_order'></a>

### Arguments:

-   $data = []

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->create_a_sales_order($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_sales_orders <a name='list_sales_orders'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->list_sales_orders();
```

## update_a_sales_order <a name='update_a_sales_order'></a>

### Arguments:

-   $salesorderid
-   $data = []

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->update_a_sales_order($salesorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_sales_order <a name='get_a_sales_order'></a>

### Arguments:

-   $salesorderid

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->get_a_sales_order($salesorderid);
```

## delete_a_sales_order <a name='delete_a_sales_order'></a>

### Arguments:

-   $salesorderid

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->delete_a_sales_order($salesorderid);
```

## mark_a_sales_order_as_open <a name='mark_a_sales_order_as_open'></a>

### Arguments:

-   $salesorderid
-   $data = []

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->mark_a_sales_order_as_open($salesorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## mark_a_sales_order_as_void <a name='mark_a_sales_order_as_void'></a>

### Arguments:

-   $salesorderid
-   $data = []

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->mark_a_sales_order_as_void($salesorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## update_a_sales_order_sub_status <a name='update_a_sales_order_sub_status'></a>

### Arguments:

-   $salesorderid
-   $statuscode
-   $data = []

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->update_a_sales_order_sub_status($salesorderid, $statuscode, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## email_a_sales_order <a name='email_a_sales_order'></a>

### Arguments:

-   $salesorderid
-   $data = []

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->email_a_sales_order($salesorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_sales_order_email_content <a name='get_sales_order_email_content'></a>

### Arguments:

-   $salesorderid

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->get_sales_order_email_content($salesorderid);
```

## submit_a_sales_order_for_approval <a name='submit_a_sales_order_for_approval'></a>

### Arguments:

-   $salesorderid
-   $data = []

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->submit_a_sales_order_for_approval($salesorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## approve_a_sales_order <a name='approve_a_sales_order'></a>

### Arguments:

-   $salesorderid
-   $data = []

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->approve_a_sales_order($salesorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## bulk_export_sales_orders <a name='bulk_export_sales_orders'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->bulk_export_sales_orders();
```

## bulk_print_sales_orders <a name='bulk_print_sales_orders'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->bulk_print_sales_orders();
```

## update_billing_address <a name='update_billing_address'></a>

### Arguments:

-   $salesorderid
-   $data = []

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->update_billing_address($salesorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## update_shipping_address <a name='update_shipping_address'></a>

### Arguments:

-   $salesorderid
-   $data = []

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->update_shipping_address($salesorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_sales_order_templates <a name='list_sales_order_templates'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->list_sales_order_templates();
```

## update_sales_order_template <a name='update_sales_order_template'></a>

### Arguments:

-   $salesorderid
-   $templateid
-   $data = []

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->update_sales_order_template($salesorderid, $templateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## add_attachment_to_a_sales_order <a name='add_attachment_to_a_sales_order'></a>

### Arguments:

-   $salesorderid
-   $data = []

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->add_attachment_to_a_sales_order($salesorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## update_attachment_preference <a name='update_attachment_preference'></a>

### Arguments:

-   $salesorderid
-   $data = []

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->update_attachment_preference($salesorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_sales_order_attachment <a name='get_a_sales_order_attachment'></a>

### Arguments:

-   $salesorderid

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->get_a_sales_order_attachment($salesorderid);
```

## delete_an_attachment <a name='delete_an_attachment'></a>

### Arguments:

-   $salesorderid

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->delete_an_attachment($salesorderid);
```

## add_comment <a name='add_comment'></a>

### Arguments:

-   $salesorderid
-   $data = []

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->add_comment($salesorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_sales_order_comments_and_history <a name='list_sales_order_comments_and_history'></a>

### Arguments:

-   $salesorderid

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->list_sales_order_comments_and_history($salesorderid);
```

## update_comment <a name='update_comment'></a>

### Arguments:

-   $salesorderid
-   $commentid
-   $data = []

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->update_comment($salesorderid, $commentid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## delete_a_comment <a name='delete_a_comment'></a>

### Arguments:

-   $salesorderid
-   $commentid

### Example:

```php
$salesorders = new SalesOrders();
$salesorders->delete_a_comment($salesorderid, $commentid);
```

# Organizations <a name='organizations'></a>

## create_an_organization <a name='create_an_organization'></a>

### Arguments:

-   $data = []

### Example:

```php
$organizations = new Organizations();
$organizations->create_an_organization($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_organization_details <a name='get_organization_details'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$organizations = new Organizations();
$organizations->get_organization_details();
```

## delete_an_organization <a name='delete_an_organization'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$organizations = new Organizations();
$organizations->delete_an_organization();
```

## get_organization <a name='get_organization'></a>

### Arguments:

-   $organizationid

### Example:

```php
$organizations = new Organizations();
$organizations->get_organization($organizationid);
```

## update_organization <a name='update_organization'></a>

### Arguments:

-   $organizationid
-   $data = []

### Example:

```php
$organizations = new Organizations();
$organizations->update_organization($organizationid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

# BankRules <a name='bankrules'></a>

## create_a_rule <a name='create_a_rule'></a>

### Arguments:

-   $data = []

### Example:

```php
$bankrules = new BankRules();
$bankrules->create_a_rule($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_rules_list <a name='get_rules_list'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$bankrules = new BankRules();
$bankrules->get_rules_list();
```

## update_a_rule <a name='update_a_rule'></a>

### Arguments:

-   $ruleid
-   $data = []

### Example:

```php
$bankrules = new BankRules();
$bankrules->update_a_rule($ruleid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_rule <a name='get_a_rule'></a>

### Arguments:

-   $ruleid

### Example:

```php
$bankrules = new BankRules();
$bankrules->get_a_rule($ruleid);
```

## delete_a_rule <a name='delete_a_rule'></a>

### Arguments:

-   $ruleid

### Example:

```php
$bankrules = new BankRules();
$bankrules->delete_a_rule($ruleid);
```

# BankAccounts <a name='bankaccounts'></a>

## create_a_bank_account <a name='create_a_bank_account'></a>

### Arguments:

-   $data = []

### Example:

```php
$bankaccounts = new BankAccounts();
$bankaccounts->create_a_bank_account($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_view_of_accounts <a name='list_view_of_accounts'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$bankaccounts = new BankAccounts();
$bankaccounts->list_view_of_accounts();
```

## update_bank_account <a name='update_bank_account'></a>

### Arguments:

-   $accountid
-   $data = []

### Example:

```php
$bankaccounts = new BankAccounts();
$bankaccounts->update_bank_account($accountid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_account_details <a name='get_account_details'></a>

### Arguments:

-   $accountid

### Example:

```php
$bankaccounts = new BankAccounts();
$bankaccounts->get_account_details($accountid);
```

## delete_an_account <a name='delete_an_account'></a>

### Arguments:

-   $accountid

### Example:

```php
$bankaccounts = new BankAccounts();
$bankaccounts->delete_an_account($accountid);
```

## deactivate_account <a name='deactivate_account'></a>

### Arguments:

-   $accountid
-   $data = []

### Example:

```php
$bankaccounts = new BankAccounts();
$bankaccounts->deactivate_account($accountid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## activate_account <a name='activate_account'></a>

### Arguments:

-   $accountid
-   $data = []

### Example:

```php
$bankaccounts = new BankAccounts();
$bankaccounts->activate_account($accountid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## import_a_bank_credit_card_statement <a name='import_a_bank_credit_card_statement'></a>

### Arguments:

-   $data = []

### Example:

```php
$bankaccounts = new BankAccounts();
$bankaccounts->import_a_bank_credit_card_statement($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_last_imported_statement <a name='get_last_imported_statement'></a>

### Arguments:

-   $accountid

### Example:

```php
$bankaccounts = new BankAccounts();
$bankaccounts->get_last_imported_statement($accountid);
```

## delete_last_imported_statement <a name='delete_last_imported_statement'></a>

### Arguments:

-   $accountid
-   $statementid

### Example:

```php
$bankaccounts = new BankAccounts();
$bankaccounts->delete_last_imported_statement($accountid, $statementid);
```

# Projects <a name='projects'></a>

## create_a_project <a name='create_a_project'></a>

### Arguments:

-   $data = []

### Example:

```php
$projects = new Projects();
$projects->create_a_project($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_projects <a name='list_projects'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$projects = new Projects();
$projects->list_projects();
```

## update_project <a name='update_project'></a>

### Arguments:

-   $projectid
-   $data = []

### Example:

```php
$projects = new Projects();
$projects->update_project($projectid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_project <a name='get_a_project'></a>

### Arguments:

-   $projectid

### Example:

```php
$projects = new Projects();
$projects->get_a_project($projectid);
```

## delete_project <a name='delete_project'></a>

### Arguments:

-   $projectid

### Example:

```php
$projects = new Projects();
$projects->delete_project($projectid);
```

## activate_project <a name='activate_project'></a>

### Arguments:

-   $projectid
-   $data = []

### Example:

```php
$projects = new Projects();
$projects->activate_project($projectid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## inactivate_a_project <a name='inactivate_a_project'></a>

### Arguments:

-   $projectid
-   $data = []

### Example:

```php
$projects = new Projects();
$projects->inactivate_a_project($projectid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## clone_project <a name='clone_project'></a>

### Arguments:

-   $projectid
-   $data = []

### Example:

```php
$projects = new Projects();
$projects->clone_project($projectid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## assign_users <a name='assign_users'></a>

### Arguments:

-   $projectid
-   $data = []

### Example:

```php
$projects = new Projects();
$projects->assign_users($projectid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_users <a name='list_users'></a>

### Arguments:

-   $projectid

### Example:

```php
$projects = new Projects();
$projects->list_users($projectid);
```

## invite_user <a name='invite_user'></a>

### Arguments:

-   $projectid
-   $data = []

### Example:

```php
$projects = new Projects();
$projects->invite_user($projectid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## update_user <a name='update_user'></a>

### Arguments:

-   $projectid
-   $userid
-   $data = []

### Example:

```php
$projects = new Projects();
$projects->update_user($projectid, $userid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_user <a name='get_a_user'></a>

### Arguments:

-   $projectid
-   $userid

### Example:

```php
$projects = new Projects();
$projects->get_a_user($projectid, $userid);
```

## delete_user <a name='delete_user'></a>

### Arguments:

-   $projectid
-   $userid

### Example:

```php
$projects = new Projects();
$projects->delete_user($projectid, $userid);
```

## post_comment <a name='post_comment'></a>

### Arguments:

-   $projectid
-   $data = []

### Example:

```php
$projects = new Projects();
$projects->post_comment($projectid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_comments <a name='list_comments'></a>

### Arguments:

-   $projectid

### Example:

```php
$projects = new Projects();
$projects->list_comments($projectid);
```

## delete_comment <a name='delete_comment'></a>

### Arguments:

-   $projectid
-   $commentid

### Example:

```php
$projects = new Projects();
$projects->delete_comment($projectid, $commentid);
```

## list_invoices <a name='list_invoices'></a>

### Arguments:

-   $projectid

### Example:

```php
$projects = new Projects();
$projects->list_invoices($projectid);
```

# RecurringBills <a name='recurringbills'></a>

## create_a_recurring_bill <a name='create_a_recurring_bill'></a>

### Arguments:

-   $data = []

### Example:

```php
$recurringbills = new RecurringBills();
$recurringbills->create_a_recurring_bill($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_recurring_bills <a name='list_recurring_bills'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$recurringbills = new RecurringBills();
$recurringbills->list_recurring_bills();
```

## update_a_recurring_bill <a name='update_a_recurring_bill'></a>

### Arguments:

-   $recurringbillid
-   $data = []

### Example:

```php
$recurringbills = new RecurringBills();
$recurringbills->update_a_recurring_bill($recurringbillid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_recurring_bill <a name='get_a_recurring_bill'></a>

### Arguments:

-   $recurringbillid

### Example:

```php
$recurringbills = new RecurringBills();
$recurringbills->get_a_recurring_bill($recurringbillid);
```

## delete_a_recurring_bill <a name='delete_a_recurring_bill'></a>

### Arguments:

-   $recurringbillid

### Example:

```php
$recurringbills = new RecurringBills();
$recurringbills->delete_a_recurring_bill($recurringbillid);
```

## stop_a_recurring_bill <a name='stop_a_recurring_bill'></a>

### Arguments:

-   $recurringbillid
-   $data = []

### Example:

```php
$recurringbills = new RecurringBills();
$recurringbills->stop_a_recurring_bill($recurringbillid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## resume_a_recurring_bill <a name='resume_a_recurring_bill'></a>

### Arguments:

-   $recurringbillid
-   $data = []

### Example:

```php
$recurringbills = new RecurringBills();
$recurringbills->resume_a_recurring_bill($recurringbillid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_recurring_bill_history <a name='list_recurring_bill_history'></a>

### Arguments:

-   $recurringbillid

### Example:

```php
$recurringbills = new RecurringBills();
$recurringbills->list_recurring_bill_history($recurringbillid);
```

# CustomModules <a name='custommodules'></a>

## create_custom_modules <a name='create_custom_modules'></a>

### Arguments:

-   $modulename
-   $data = []

### Example:

```php
$custommodules = new CustomModules();
$custommodules->create_custom_modules($modulename, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## bulk_update_custom_module <a name='bulk_update_custom_module'></a>

### Arguments:

-   $modulename
-   $data = []

### Example:

```php
$custommodules = new CustomModules();
$custommodules->bulk_update_custom_module($modulename, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_record_list_of_a_custom_module <a name='get_record_list_of_a_custom_module'></a>

### Arguments:

-   $modulename

### Example:

```php
$custommodules = new CustomModules();
$custommodules->get_record_list_of_a_custom_module($modulename);
```

## delete_custom_modules <a name='delete_custom_modules'></a>

### Arguments:

-   $modulename

### Example:

```php
$custommodules = new CustomModules();
$custommodules->delete_custom_modules($modulename);
```

## update_custom_module <a name='update_custom_module'></a>

### Arguments:

-   $modulename
-   $moduleid
-   $data = []

### Example:

```php
$custommodules = new CustomModules();
$custommodules->update_custom_module($modulename, $moduleid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_individual_record_details <a name='get_individual_record_details'></a>

### Arguments:

-   $modulename
-   $moduleid

### Example:

```php
$custommodules = new CustomModules();
$custommodules->get_individual_record_details($modulename, $moduleid);
```

## delete_individual_records <a name='delete_individual_records'></a>

### Arguments:

-   $modulename
-   $moduleid

### Example:

```php
$custommodules = new CustomModules();
$custommodules->delete_individual_records($modulename, $moduleid);
```

# RecurringExpenses <a name='recurringexpenses'></a>

## create_a_recurring_expense <a name='create_a_recurring_expense'></a>

### Arguments:

-   $data = []

### Example:

```php
$recurringexpenses = new RecurringExpenses();
$recurringexpenses->create_a_recurring_expense($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_recurring_expenses <a name='list_recurring_expenses'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$recurringexpenses = new RecurringExpenses();
$recurringexpenses->list_recurring_expenses();
```

## update_a_recurring_expense <a name='update_a_recurring_expense'></a>

### Arguments:

-   $recurringexpenseid
-   $data = []

### Example:

```php
$recurringexpenses = new RecurringExpenses();
$recurringexpenses->update_a_recurring_expense($recurringexpenseid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_recurring_expense <a name='get_a_recurring_expense'></a>

### Arguments:

-   $recurringexpenseid

### Example:

```php
$recurringexpenses = new RecurringExpenses();
$recurringexpenses->get_a_recurring_expense($recurringexpenseid);
```

## delete_a_recurring_expense <a name='delete_a_recurring_expense'></a>

### Arguments:

-   $recurringexpenseid

### Example:

```php
$recurringexpenses = new RecurringExpenses();
$recurringexpenses->delete_a_recurring_expense($recurringexpenseid);
```

## stop_a_recurring_expense <a name='stop_a_recurring_expense'></a>

### Arguments:

-   $recurringexpenseid
-   $data = []

### Example:

```php
$recurringexpenses = new RecurringExpenses();
$recurringexpenses->stop_a_recurring_expense($recurringexpenseid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## resume_a_recurring_expense <a name='resume_a_recurring_expense'></a>

### Arguments:

-   $recurringexpenseid
-   $data = []

### Example:

```php
$recurringexpenses = new RecurringExpenses();
$recurringexpenses->resume_a_recurring_expense($recurringexpenseid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_child_expenses_created <a name='list_child_expenses_created'></a>

### Arguments:

-   $recurringexpenseid

### Example:

```php
$recurringexpenses = new RecurringExpenses();
$recurringexpenses->list_child_expenses_created($recurringexpenseid);
```

## list_recurring_expense_history <a name='list_recurring_expense_history'></a>

### Arguments:

-   $recurringexpenseid

### Example:

```php
$recurringexpenses = new RecurringExpenses();
$recurringexpenses->list_recurring_expense_history($recurringexpenseid);
```

# Invoices <a name='invoices'></a>

## create_an_invoice <a name='create_an_invoice'></a>

### Arguments:

-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->create_an_invoice($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_invoices <a name='list_invoices'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$invoices = new Invoices();
$invoices->list_invoices();
```

## update_an_invoice <a name='update_an_invoice'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->update_an_invoice($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_an_invoice <a name='get_an_invoice'></a>

### Arguments:

-   $invoiceid

### Example:

```php
$invoices = new Invoices();
$invoices->get_an_invoice($invoiceid);
```

## delete_an_invoice <a name='delete_an_invoice'></a>

### Arguments:

-   $invoiceid

### Example:

```php
$invoices = new Invoices();
$invoices->delete_an_invoice($invoiceid);
```

## mark_an_invoice_as_sent <a name='mark_an_invoice_as_sent'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->mark_an_invoice_as_sent($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## void_an_invoice <a name='void_an_invoice'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->void_an_invoice($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## mark_as_draft <a name='mark_as_draft'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->mark_as_draft($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## email_invoices <a name='email_invoices'></a>

### Arguments:

-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->email_invoices($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## submit_an_invoice_for_approval <a name='submit_an_invoice_for_approval'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->submit_an_invoice_for_approval($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## approve_an_invoice <a name='approve_an_invoice'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->approve_an_invoice($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## email_an_invoice <a name='email_an_invoice'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->email_an_invoice($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_invoice_email_content <a name='get_invoice_email_content'></a>

### Arguments:

-   $invoiceid

### Example:

```php
$invoices = new Invoices();
$invoices->get_invoice_email_content($invoiceid);
```

## remind_customer <a name='remind_customer'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->remind_customer($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_payment_reminder_mail_content <a name='get_payment_reminder_mail_content'></a>

### Arguments:

-   $invoiceid

### Example:

```php
$invoices = new Invoices();
$invoices->get_payment_reminder_mail_content($invoiceid);
```

## bulk_invoice_reminder <a name='bulk_invoice_reminder'></a>

### Arguments:

-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->bulk_invoice_reminder($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## bulk_export_invoices <a name='bulk_export_invoices'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$invoices = new Invoices();
$invoices->bulk_export_invoices();
```

## bulk_print_invoices <a name='bulk_print_invoices'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$invoices = new Invoices();
$invoices->bulk_print_invoices();
```

## disable_payment_reminder <a name='disable_payment_reminder'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->disable_payment_reminder($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## enable_payment_reminder <a name='enable_payment_reminder'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->enable_payment_reminder($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## write_off_invoice <a name='write_off_invoice'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->write_off_invoice($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## cancel_write_off <a name='cancel_write_off'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->cancel_write_off($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## update_billing_address <a name='update_billing_address'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->update_billing_address($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## update_shipping_address <a name='update_shipping_address'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->update_shipping_address($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_invoice_templates <a name='list_invoice_templates'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$invoices = new Invoices();
$invoices->list_invoice_templates();
```

## update_invoice_template <a name='update_invoice_template'></a>

### Arguments:

-   $invoiceid
-   $templateid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->update_invoice_template($invoiceid, $templateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_invoice_payments <a name='list_invoice_payments'></a>

### Arguments:

-   $invoiceid

### Example:

```php
$invoices = new Invoices();
$invoices->list_invoice_payments($invoiceid);
```

## list_credits_applied <a name='list_credits_applied'></a>

### Arguments:

-   $invoiceid

### Example:

```php
$invoices = new Invoices();
$invoices->list_credits_applied($invoiceid);
```

## apply_credits <a name='apply_credits'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->apply_credits($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## delete_a_payment <a name='delete_a_payment'></a>

### Arguments:

-   $invoiceid
-   $invoicepaymentid

### Example:

```php
$invoices = new Invoices();
$invoices->delete_a_payment($invoiceid, $invoicepaymentid);
```

## delete_applied_credit <a name='delete_applied_credit'></a>

### Arguments:

-   $invoiceid
-   $creditnotesinvoiceid

### Example:

```php
$invoices = new Invoices();
$invoices->delete_applied_credit($invoiceid, $creditnotesinvoiceid);
```

## add_attachment_to_an_invoice <a name='add_attachment_to_an_invoice'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->add_attachment_to_an_invoice($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## update_attachment_preference <a name='update_attachment_preference'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->update_attachment_preference($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_an_invoice_attachment <a name='get_an_invoice_attachment'></a>

### Arguments:

-   $invoiceid

### Example:

```php
$invoices = new Invoices();
$invoices->get_an_invoice_attachment($invoiceid);
```

## delete_an_attachment <a name='delete_an_attachment'></a>

### Arguments:

-   $invoiceid

### Example:

```php
$invoices = new Invoices();
$invoices->delete_an_attachment($invoiceid);
```

## delete_the_expense_receipt <a name='delete_the_expense_receipt'></a>

### Arguments:

-   $expenseid

### Example:

```php
$invoices = new Invoices();
$invoices->delete_the_expense_receipt($expenseid);
```

## add_comment <a name='add_comment'></a>

### Arguments:

-   $invoiceid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->add_comment($invoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_invoice_comments_and_history <a name='list_invoice_comments_and_history'></a>

### Arguments:

-   $invoiceid

### Example:

```php
$invoices = new Invoices();
$invoices->list_invoice_comments_and_history($invoiceid);
```

## update_comment <a name='update_comment'></a>

### Arguments:

-   $invoiceid
-   $commentid
-   $data = []

### Example:

```php
$invoices = new Invoices();
$invoices->update_comment($invoiceid, $commentid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## delete_a_comment <a name='delete_a_comment'></a>

### Arguments:

-   $invoiceid
-   $commentid

### Example:

```php
$invoices = new Invoices();
$invoices->delete_a_comment($invoiceid, $commentid);
```

# Contacts <a name='contacts'></a>

## create_a_contact <a name='create_a_contact'></a>

### Arguments:

-   $data = []

### Example:

```php
$contacts = new Contacts();
$contacts->create_a_contact($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_contacts <a name='list_contacts'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$contacts = new Contacts();
$contacts->list_contacts();
```

## update_a_contact <a name='update_a_contact'></a>

### Arguments:

-   $contactid
-   $data = []

### Example:

```php
$contacts = new Contacts();
$contacts->update_a_contact($contactid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_contact <a name='get_contact'></a>

### Arguments:

-   $contactid

### Example:

```php
$contacts = new Contacts();
$contacts->get_contact($contactid);
```

## delete_a_contact <a name='delete_a_contact'></a>

### Arguments:

-   $contactid

### Example:

```php
$contacts = new Contacts();
$contacts->delete_a_contact($contactid);
```

## mark_as_active <a name='mark_as_active'></a>

### Arguments:

-   $contactid
-   $data = []

### Example:

```php
$contacts = new Contacts();
$contacts->mark_as_active($contactid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## mark_as_inactive <a name='mark_as_inactive'></a>

### Arguments:

-   $contactid
-   $data = []

### Example:

```php
$contacts = new Contacts();
$contacts->mark_as_inactive($contactid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## enable_portal_access <a name='enable_portal_access'></a>

### Arguments:

-   $contactid
-   $data = []

### Example:

```php
$contacts = new Contacts();
$contacts->enable_portal_access($contactid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## enable_payment_reminders <a name='enable_payment_reminders'></a>

### Arguments:

-   $contactid
-   $data = []

### Example:

```php
$contacts = new Contacts();
$contacts->enable_payment_reminders($contactid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## disable_payment_reminders <a name='disable_payment_reminders'></a>

### Arguments:

-   $contactid
-   $data = []

### Example:

```php
$contacts = new Contacts();
$contacts->disable_payment_reminders($contactid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## email_statement <a name='email_statement'></a>

### Arguments:

-   $contactid
-   $data = []

### Example:

```php
$contacts = new Contacts();
$contacts->email_statement($contactid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_statement_mail_content <a name='get_statement_mail_content'></a>

### Arguments:

-   $contactid

### Example:

```php
$contacts = new Contacts();
$contacts->get_statement_mail_content($contactid);
```

## email_contact <a name='email_contact'></a>

### Arguments:

-   $contactid
-   $data = []

### Example:

```php
$contacts = new Contacts();
$contacts->email_contact($contactid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_comments <a name='list_comments'></a>

### Arguments:

-   $contactid

### Example:

```php
$contacts = new Contacts();
$contacts->list_comments($contactid);
```

## add_additional_address <a name='add_additional_address'></a>

### Arguments:

-   $contactid
-   $data = []

### Example:

```php
$contacts = new Contacts();
$contacts->add_additional_address($contactid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_contact_addresses <a name='get_contact_addresses'></a>

### Arguments:

-   $contactid

### Example:

```php
$contacts = new Contacts();
$contacts->get_contact_addresses($contactid);
```

## edit_additional_address <a name='edit_additional_address'></a>

### Arguments:

-   $contactid
-   $addressid
-   $data = []

### Example:

```php
$contacts = new Contacts();
$contacts->edit_additional_address($contactid, $addressid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## delete_additional_address <a name='delete_additional_address'></a>

### Arguments:

-   $contactid
-   $addressid

### Example:

```php
$contacts = new Contacts();
$contacts->delete_additional_address($contactid, $addressid);
```

## list_refunds <a name='list_refunds'></a>

### Arguments:

-   $contactid

### Example:

```php
$contacts = new Contacts();
$contacts->list_refunds($contactid);
```

## track_1099 <a name='track_1099'></a>

### Arguments:

-   $contactid
-   $data = []

### Example:

```php
$contacts = new Contacts();
$contacts->track_1099($contactid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## untrack_1099 <a name='untrack_1099'></a>

### Arguments:

-   $contactid
-   $data = []

### Example:

```php
$contacts = new Contacts();
$contacts->untrack_1099($contactid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

# VendorCredits <a name='vendorcredits'></a>

## create_a_vendor_credit <a name='create_a_vendor_credit'></a>

### Arguments:

-   $data = []

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->create_a_vendor_credit($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_vendor_credits <a name='list_vendor_credits'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->list_vendor_credits();
```

## update_vendor_credit <a name='update_vendor_credit'></a>

### Arguments:

-   $vendorcreditid
-   $data = []

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->update_vendor_credit($vendorcreditid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_vendor_credit <a name='get_vendor_credit'></a>

### Arguments:

-   $vendorcreditid

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->get_vendor_credit($vendorcreditid);
```

## delete_vendor_credit <a name='delete_vendor_credit'></a>

### Arguments:

-   $vendorcreditid

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->delete_vendor_credit($vendorcreditid);
```

## convert_to_open <a name='convert_to_open'></a>

### Arguments:

-   $vendorcreditid
-   $data = []

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->convert_to_open($vendorcreditid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## void_vendor_credit <a name='void_vendor_credit'></a>

### Arguments:

-   $vendorcreditid
-   $data = []

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->void_vendor_credit($vendorcreditid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## submit_a_vendor_credit_for_approval <a name='submit_a_vendor_credit_for_approval'></a>

### Arguments:

-   $vendorcreditid
-   $data = []

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->submit_a_vendor_credit_for_approval($vendorcreditid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## approve_a_vendor_credit <a name='approve_a_vendor_credit'></a>

### Arguments:

-   $vendorcreditid
-   $data = []

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->approve_a_vendor_credit($vendorcreditid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## apply_credits_to_a_bill <a name='apply_credits_to_a_bill'></a>

### Arguments:

-   $vendorcreditid
-   $data = []

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->apply_credits_to_a_bill($vendorcreditid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_bills_credited <a name='list_bills_credited'></a>

### Arguments:

-   $vendorcreditid

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->list_bills_credited($vendorcreditid);
```

## delete_bills_credited <a name='delete_bills_credited'></a>

### Arguments:

-   $vendorcreditid
-   $vendorcreditbillid

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->delete_bills_credited($vendorcreditid, $vendorcreditbillid);
```

## refund_a_vendor_credit <a name='refund_a_vendor_credit'></a>

### Arguments:

-   $vendorcreditid
-   $data = []

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->refund_a_vendor_credit($vendorcreditid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_refunds_of_a_vendor_credit <a name='list_refunds_of_a_vendor_credit'></a>

### Arguments:

-   $vendorcreditid

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->list_refunds_of_a_vendor_credit($vendorcreditid);
```

## update_vendor_credit_refund <a name='update_vendor_credit_refund'></a>

### Arguments:

-   $vendorcreditid
-   $vendorcreditrefundid
-   $data = []

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->update_vendor_credit_refund($vendorcreditid, $vendorcreditrefundid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_vendor_credit_refund <a name='get_vendor_credit_refund'></a>

### Arguments:

-   $vendorcreditid
-   $vendorcreditrefundid

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->get_vendor_credit_refund($vendorcreditid, $vendorcreditrefundid);
```

## delete_vendor_credit_refund <a name='delete_vendor_credit_refund'></a>

### Arguments:

-   $vendorcreditid
-   $vendorcreditrefundid

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->delete_vendor_credit_refund($vendorcreditid, $vendorcreditrefundid);
```

## list_vendor_credit_refunds <a name='list_vendor_credit_refunds'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->list_vendor_credit_refunds();
```

## add_a_comment <a name='add_a_comment'></a>

### Arguments:

-   $vendorcreditid
-   $data = []

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->add_a_comment($vendorcreditid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_vendor_credit_comments_and_history <a name='list_vendor_credit_comments_and_history'></a>

### Arguments:

-   $vendorcreditid

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->list_vendor_credit_comments_and_history($vendorcreditid);
```

## delete_a_comment <a name='delete_a_comment'></a>

### Arguments:

-   $vendorcreditid
-   $commentid

### Example:

```php
$vendorcredits = new VendorCredits();
$vendorcredits->delete_a_comment($vendorcreditid, $commentid);
```

# RecurringInvoices <a name='recurringinvoices'></a>

## create_a_recurring_invoice <a name='create_a_recurring_invoice'></a>

### Arguments:

-   $data = []

### Example:

```php
$recurringinvoices = new RecurringInvoices();
$recurringinvoices->create_a_recurring_invoice($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_all_recurring_invoice <a name='list_all_recurring_invoice'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$recurringinvoices = new RecurringInvoices();
$recurringinvoices->list_all_recurring_invoice();
```

## update_recurring_invoice <a name='update_recurring_invoice'></a>

### Arguments:

-   $recurringinvoiceid
-   $data = []

### Example:

```php
$recurringinvoices = new RecurringInvoices();
$recurringinvoices->update_recurring_invoice($recurringinvoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_recurring_invoice <a name='get_a_recurring_invoice'></a>

### Arguments:

-   $recurringinvoiceid

### Example:

```php
$recurringinvoices = new RecurringInvoices();
$recurringinvoices->get_a_recurring_invoice($recurringinvoiceid);
```

## delete_a_recurring_invoice <a name='delete_a_recurring_invoice'></a>

### Arguments:

-   $recurringinvoiceid

### Example:

```php
$recurringinvoices = new RecurringInvoices();
$recurringinvoices->delete_a_recurring_invoice($recurringinvoiceid);
```

## stop_a_recurring_invoice <a name='stop_a_recurring_invoice'></a>

### Arguments:

-   $recurringinvoiceid
-   $data = []

### Example:

```php
$recurringinvoices = new RecurringInvoices();
$recurringinvoices->stop_a_recurring_invoice($recurringinvoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## resume_a_recurring_invoice <a name='resume_a_recurring_invoice'></a>

### Arguments:

-   $recurringinvoiceid
-   $data = []

### Example:

```php
$recurringinvoices = new RecurringInvoices();
$recurringinvoices->resume_a_recurring_invoice($recurringinvoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## update_recurring_invoice_template <a name='update_recurring_invoice_template'></a>

### Arguments:

-   $recurringinvoiceid
-   $templateid
-   $data = []

### Example:

```php
$recurringinvoices = new RecurringInvoices();
$recurringinvoices->update_recurring_invoice_template($recurringinvoiceid, $templateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_recurring_invoice_history <a name='list_recurring_invoice_history'></a>

### Arguments:

-   $recurringinvoiceid

### Example:

```php
$recurringinvoices = new RecurringInvoices();
$recurringinvoices->list_recurring_invoice_history($recurringinvoiceid);
```

# Expenses <a name='expenses'></a>

## create_an_expense <a name='create_an_expense'></a>

### Arguments:

-   $data = []

### Example:

```php
$expenses = new Expenses();
$expenses->create_an_expense($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_expenses <a name='list_expenses'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$expenses = new Expenses();
$expenses->list_expenses();
```

## update_an_expense <a name='update_an_expense'></a>

### Arguments:

-   $expenseid
-   $data = []

### Example:

```php
$expenses = new Expenses();
$expenses->update_an_expense($expenseid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_an_expense <a name='get_an_expense'></a>

### Arguments:

-   $expenseid

### Example:

```php
$expenses = new Expenses();
$expenses->get_an_expense($expenseid);
```

## delete_an_expense <a name='delete_an_expense'></a>

### Arguments:

-   $expenseid

### Example:

```php
$expenses = new Expenses();
$expenses->delete_an_expense($expenseid);
```

## list_expense_history_and_comments <a name='list_expense_history_and_comments'></a>

### Arguments:

-   $expenseid

### Example:

```php
$expenses = new Expenses();
$expenses->list_expense_history_and_comments($expenseid);
```

## create_an_employee <a name='create_an_employee'></a>

### Arguments:

-   $data = []

### Example:

```php
$expenses = new Expenses();
$expenses->create_an_employee($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_employees <a name='list_employees'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$expenses = new Expenses();
$expenses->list_employees();
```

## get_an_employee <a name='get_an_employee'></a>

### Arguments:

-   $employeeid

### Example:

```php
$expenses = new Expenses();
$expenses->get_an_employee($employeeid);
```

## delete_an_employee <a name='delete_an_employee'></a>

### Arguments:

-   $employeeid

### Example:

```php
$expenses = new Expenses();
$expenses->delete_an_employee($employeeid);
```

## add_receipt_to_an_expense <a name='add_receipt_to_an_expense'></a>

### Arguments:

-   $expenseid
-   $data = []

### Example:

```php
$expenses = new Expenses();
$expenses->add_receipt_to_an_expense($expenseid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_an_expense_receipt <a name='get_an_expense_receipt'></a>

### Arguments:

-   $expenseid

### Example:

```php
$expenses = new Expenses();
$expenses->get_an_expense_receipt($expenseid);
```

## delete_a_receipt <a name='delete_a_receipt'></a>

### Arguments:

-   $expenseid

### Example:

```php
$expenses = new Expenses();
$expenses->delete_a_receipt($expenseid);
```

# Currency <a name='currency'></a>

## create_a_currency <a name='create_a_currency'></a>

### Arguments:

-   $data = []

### Example:

```php
$currency = new Currency();
$currency->create_a_currency($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_currencies <a name='list_currencies'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$currency = new Currency();
$currency->list_currencies();
```

## update_a_currency <a name='update_a_currency'></a>

### Arguments:

-   $currencyid
-   $data = []

### Example:

```php
$currency = new Currency();
$currency->update_a_currency($currencyid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_currency <a name='get_a_currency'></a>

### Arguments:

-   $currencyid

### Example:

```php
$currency = new Currency();
$currency->get_a_currency($currencyid);
```

## delete_a_currency <a name='delete_a_currency'></a>

### Arguments:

-   $currencyid

### Example:

```php
$currency = new Currency();
$currency->delete_a_currency($currencyid);
```

## create_an_exchange_rate <a name='create_an_exchange_rate'></a>

### Arguments:

-   $currencyid
-   $data = []

### Example:

```php
$currency = new Currency();
$currency->create_an_exchange_rate($currencyid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_exchange_rates <a name='list_exchange_rates'></a>

### Arguments:

-   $currencyid

### Example:

```php
$currency = new Currency();
$currency->list_exchange_rates($currencyid);
```

## update_an_exchange_rate <a name='update_an_exchange_rate'></a>

### Arguments:

-   $currencyid
-   $exchangerateid
-   $data = []

### Example:

```php
$currency = new Currency();
$currency->update_an_exchange_rate($currencyid, $exchangerateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_an_exchange_rate <a name='get_an_exchange_rate'></a>

### Arguments:

-   $currencyid
-   $exchangerateid

### Example:

```php
$currency = new Currency();
$currency->get_an_exchange_rate($currencyid, $exchangerateid);
```

## delete_an_exchage_rate <a name='delete_an_exchage_rate'></a>

### Arguments:

-   $currencyid
-   $exchangerateid

### Example:

```php
$currency = new Currency();
$currency->delete_an_exchage_rate($currencyid, $exchangerateid);
```

# OpeningBalances <a name='openingbalances'></a>

## create_opening_balance <a name='create_opening_balance'></a>

### Arguments:

-   $data = []

### Example:

```php
$openingbalances = new OpeningBalances();
$openingbalances->create_opening_balance($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## update_opening_balance <a name='update_opening_balance'></a>

### Arguments:

-   $data = []

### Example:

```php
$openingbalances = new OpeningBalances();
$openingbalances->update_opening_balance($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_opening_balance <a name='get_opening_balance'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$openingbalances = new OpeningBalances();
$openingbalances->get_opening_balance();
```

## delete_opening_balance <a name='delete_opening_balance'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$openingbalances = new OpeningBalances();
$openingbalances->delete_opening_balance();
```

# BaseCurrencyAdjustment <a name='basecurrencyadjustment'></a>

## create_a_base_currency_adjustment <a name='create_a_base_currency_adjustment'></a>

### Arguments:

-   $data = []

### Example:

```php
$basecurrencyadjustment = new BaseCurrencyAdjustment();
$basecurrencyadjustment->create_a_base_currency_adjustment($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_base_currency_adjustment <a name='list_base_currency_adjustment'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$basecurrencyadjustment = new BaseCurrencyAdjustment();
$basecurrencyadjustment->list_base_currency_adjustment();
```

## get_a_base_currency_adjustment <a name='get_a_base_currency_adjustment'></a>

### Arguments:

-   $basecurrencyadjustmentid

### Example:

```php
$basecurrencyadjustment = new BaseCurrencyAdjustment();
$basecurrencyadjustment->get_a_base_currency_adjustment($basecurrencyadjustmentid);
```

## delete_a_base_currency_adjustment <a name='delete_a_base_currency_adjustment'></a>

### Arguments:

-   $basecurrencyadjustmentid

### Example:

```php
$basecurrencyadjustment = new BaseCurrencyAdjustment();
$basecurrencyadjustment->delete_a_base_currency_adjustment($basecurrencyadjustmentid);
```

## list_account_details_for_base_currency_adjustment <a name='list_account_details_for_base_currency_adjustment'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$basecurrencyadjustment = new BaseCurrencyAdjustment();
$basecurrencyadjustment->list_account_details_for_base_currency_adjustment();
```

# Estimates <a name='estimates'></a>

## create_an_estimate <a name='create_an_estimate'></a>

### Arguments:

-   $data = []

### Example:

```php
$estimates = new Estimates();
$estimates->create_an_estimate($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_estimates <a name='list_estimates'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$estimates = new Estimates();
$estimates->list_estimates();
```

## update_an_estimate <a name='update_an_estimate'></a>

### Arguments:

-   $estimateid
-   $data = []

### Example:

```php
$estimates = new Estimates();
$estimates->update_an_estimate($estimateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_an_estimate <a name='get_an_estimate'></a>

### Arguments:

-   $estimateid

### Example:

```php
$estimates = new Estimates();
$estimates->get_an_estimate($estimateid);
```

## delete_an_estimate <a name='delete_an_estimate'></a>

### Arguments:

-   $estimateid

### Example:

```php
$estimates = new Estimates();
$estimates->delete_an_estimate($estimateid);
```

## mark_an_estimate_as_sent <a name='mark_an_estimate_as_sent'></a>

### Arguments:

-   $estimateid
-   $data = []

### Example:

```php
$estimates = new Estimates();
$estimates->mark_an_estimate_as_sent($estimateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## mark_an_estimate_as_accepted <a name='mark_an_estimate_as_accepted'></a>

### Arguments:

-   $estimateid
-   $data = []

### Example:

```php
$estimates = new Estimates();
$estimates->mark_an_estimate_as_accepted($estimateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## mark_an_estimate_as_declined <a name='mark_an_estimate_as_declined'></a>

### Arguments:

-   $estimateid
-   $data = []

### Example:

```php
$estimates = new Estimates();
$estimates->mark_an_estimate_as_declined($estimateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## submit_an_estimate_for_approval <a name='submit_an_estimate_for_approval'></a>

### Arguments:

-   $estimateid
-   $data = []

### Example:

```php
$estimates = new Estimates();
$estimates->submit_an_estimate_for_approval($estimateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## approve_an_estimate <a name='approve_an_estimate'></a>

### Arguments:

-   $estimateid
-   $data = []

### Example:

```php
$estimates = new Estimates();
$estimates->approve_an_estimate($estimateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## email_an_estimate <a name='email_an_estimate'></a>

### Arguments:

-   $estimateid
-   $data = []

### Example:

```php
$estimates = new Estimates();
$estimates->email_an_estimate($estimateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_estimate_email_content <a name='get_estimate_email_content'></a>

### Arguments:

-   $estimateid

### Example:

```php
$estimates = new Estimates();
$estimates->get_estimate_email_content($estimateid);
```

## email_multiple_estimates <a name='email_multiple_estimates'></a>

### Arguments:

-   $data = []

### Example:

```php
$estimates = new Estimates();
$estimates->email_multiple_estimates($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## bulk_export_estimates <a name='bulk_export_estimates'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$estimates = new Estimates();
$estimates->bulk_export_estimates();
```

## bulk_print_estimates <a name='bulk_print_estimates'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$estimates = new Estimates();
$estimates->bulk_print_estimates();
```

## update_billing_address <a name='update_billing_address'></a>

### Arguments:

-   $estimateid
-   $data = []

### Example:

```php
$estimates = new Estimates();
$estimates->update_billing_address($estimateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## update_shipping_address <a name='update_shipping_address'></a>

### Arguments:

-   $estimateid
-   $data = []

### Example:

```php
$estimates = new Estimates();
$estimates->update_shipping_address($estimateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_estimate_template <a name='list_estimate_template'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$estimates = new Estimates();
$estimates->list_estimate_template();
```

## update_estimate_template <a name='update_estimate_template'></a>

### Arguments:

-   $estimateid
-   $templateid
-   $data = []

### Example:

```php
$estimates = new Estimates();
$estimates->update_estimate_template($estimateid, $templateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## add_comments <a name='add_comments'></a>

### Arguments:

-   $estimateid
-   $data = []

### Example:

```php
$estimates = new Estimates();
$estimates->add_comments($estimateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_estimate_comments_and_history <a name='list_estimate_comments_and_history'></a>

### Arguments:

-   $estimateid

### Example:

```php
$estimates = new Estimates();
$estimates->list_estimate_comments_and_history($estimateid);
```

## update_comment <a name='update_comment'></a>

### Arguments:

-   $estimateid
-   $commentid
-   $data = []

### Example:

```php
$estimates = new Estimates();
$estimates->update_comment($estimateid, $commentid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## delete_a_comment <a name='delete_a_comment'></a>

### Arguments:

-   $estimateid
-   $commentid

### Example:

```php
$estimates = new Estimates();
$estimates->delete_a_comment($estimateid, $commentid);
```

# Taxes <a name='taxes'></a>

## create_a_tax <a name='create_a_tax'></a>

### Arguments:

-   $data = []

### Example:

```php
$taxes = new Taxes();
$taxes->create_a_tax($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_taxes <a name='list_taxes'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$taxes = new Taxes();
$taxes->list_taxes();
```

## update_a_tax <a name='update_a_tax'></a>

### Arguments:

-   $taxid
-   $data = []

### Example:

```php
$taxes = new Taxes();
$taxes->update_a_tax($taxid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_tax <a name='get_a_tax'></a>

### Arguments:

-   $taxid

### Example:

```php
$taxes = new Taxes();
$taxes->get_a_tax($taxid);
```

## delete_a_tax <a name='delete_a_tax'></a>

### Arguments:

-   $taxid

### Example:

```php
$taxes = new Taxes();
$taxes->delete_a_tax($taxid);
```

## update_a_tax_group <a name='update_a_tax_group'></a>

### Arguments:

-   $taxgroupid
-   $data = []

### Example:

```php
$taxes = new Taxes();
$taxes->update_a_tax_group($taxgroupid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_tax_group <a name='get_a_tax_group'></a>

### Arguments:

-   $taxgroupid

### Example:

```php
$taxes = new Taxes();
$taxes->get_a_tax_group($taxgroupid);
```

## delete_a_tax_group <a name='delete_a_tax_group'></a>

### Arguments:

-   $taxgroupid

### Example:

```php
$taxes = new Taxes();
$taxes->delete_a_tax_group($taxgroupid);
```

## create_a_tax_group <a name='create_a_tax_group'></a>

### Arguments:

-   $data = []

### Example:

```php
$taxes = new Taxes();
$taxes->create_a_tax_group($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## create*a_tax_authority\_\_us_and_ca_edition_only* <a name='create_a_tax_authority__us_and_ca_edition_only_'></a>

### Arguments:

-   $data = []

### Example:

```php
$taxes = new Taxes();
$taxes->create_a_tax_authority__us_and_ca_edition_only_($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list*tax_authorities\_\_us_edition_only* <a name='list_tax_authorities__us_edition_only_'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$taxes = new Taxes();
$taxes->list_tax_authorities__us_edition_only_();
```

## update*a_tax_authority\_\_us_and_ca_edition_only* <a name='update_a_tax_authority__us_and_ca_edition_only_'></a>

### Arguments:

-   $taxauthorityid
-   $data = []

### Example:

```php
$taxes = new Taxes();
$taxes->update_a_tax_authority__us_and_ca_edition_only_($taxauthorityid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get*a_tax_authority\_\_us_and_ca_edition_only* <a name='get_a_tax_authority__us_and_ca_edition_only_'></a>

### Arguments:

-   $taxauthorityid

### Example:

```php
$taxes = new Taxes();
$taxes->get_a_tax_authority__us_and_ca_edition_only_($taxauthorityid);
```

## delete*a_tax_authority\_\_us_and_ca_edition_only* <a name='delete_a_tax_authority__us_and_ca_edition_only_'></a>

### Arguments:

-   $taxauthorityid

### Example:

```php
$taxes = new Taxes();
$taxes->delete_a_tax_authority__us_and_ca_edition_only_($taxauthorityid);
```

## create*a_tax_exemption\_\_us_edition_only* <a name='create_a_tax_exemption__us_edition_only_'></a>

### Arguments:

-   $data = []

### Example:

```php
$taxes = new Taxes();
$taxes->create_a_tax_exemption__us_edition_only_($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list*tax_exemptions\_\_us_edition_only* <a name='list_tax_exemptions__us_edition_only_'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$taxes = new Taxes();
$taxes->list_tax_exemptions__us_edition_only_();
```

## update*a_tax_exemption\_\_us_edition_only* <a name='update_a_tax_exemption__us_edition_only_'></a>

### Arguments:

-   $taxexemptionid
-   $data = []

### Example:

```php
$taxes = new Taxes();
$taxes->update_a_tax_exemption__us_edition_only_($taxexemptionid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get*a_tax_exemption\_\_us_edition_only* <a name='get_a_tax_exemption__us_edition_only_'></a>

### Arguments:

-   $taxexemptionid

### Example:

```php
$taxes = new Taxes();
$taxes->get_a_tax_exemption__us_edition_only_($taxexemptionid);
```

## delete*a_tax_exemption\_\_us_edition_only* <a name='delete_a_tax_exemption__us_edition_only_'></a>

### Arguments:

-   $taxexemptionid

### Example:

```php
$taxes = new Taxes();
$taxes->delete_a_tax_exemption__us_edition_only_($taxexemptionid);
```

# Journals <a name='journals'></a>

## create_a_journal <a name='create_a_journal'></a>

### Arguments:

-   $data = []

### Example:

```php
$journals = new Journals();
$journals->create_a_journal($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_journal_list <a name='get_journal_list'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$journals = new Journals();
$journals->get_journal_list();
```

## update_a_journal <a name='update_a_journal'></a>

### Arguments:

-   $journalid
-   $data = []

### Example:

```php
$journals = new Journals();
$journals->update_a_journal($journalid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_journal <a name='get_journal'></a>

### Arguments:

-   $journalid

### Example:

```php
$journals = new Journals();
$journals->get_journal($journalid);
```

## delete_a_journal <a name='delete_a_journal'></a>

### Arguments:

-   $journalid

### Example:

```php
$journals = new Journals();
$journals->delete_a_journal($journalid);
```

## mark_a_journal_as_published <a name='mark_a_journal_as_published'></a>

### Arguments:

-   $journalid
-   $data = []

### Example:

```php
$journals = new Journals();
$journals->mark_a_journal_as_published($journalid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## add_attachment_to_a_journal <a name='add_attachment_to_a_journal'></a>

### Arguments:

-   $journalid
-   $data = []

### Example:

```php
$journals = new Journals();
$journals->add_attachment_to_a_journal($journalid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## add_comment <a name='add_comment'></a>

### Arguments:

-   $jounralid
-   $data = []

### Example:

```php
$journals = new Journals();
$journals->add_comment($jounralid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## delete_a_comment <a name='delete_a_comment'></a>

### Arguments:

-   $jounralid
-   $commentid

### Example:

```php
$journals = new Journals();
$journals->delete_a_comment($jounralid, $commentid);
```

# Bills <a name='bills'></a>

## create_a_bill <a name='create_a_bill'></a>

### Arguments:

-   $data = []

### Example:

```php
$bills = new Bills();
$bills->create_a_bill($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_bills <a name='list_bills'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$bills = new Bills();
$bills->list_bills();
```

## update_a_bill <a name='update_a_bill'></a>

### Arguments:

-   $billid
-   $data = []

### Example:

```php
$bills = new Bills();
$bills->update_a_bill($billid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_bill <a name='get_a_bill'></a>

### Arguments:

-   $billid

### Example:

```php
$bills = new Bills();
$bills->get_a_bill($billid);
```

## delete_a_bill <a name='delete_a_bill'></a>

### Arguments:

-   $billid

### Example:

```php
$bills = new Bills();
$bills->delete_a_bill($billid);
```

## void_a_bill <a name='void_a_bill'></a>

### Arguments:

-   $billid
-   $data = []

### Example:

```php
$bills = new Bills();
$bills->void_a_bill($billid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## mark_a_bill_as_open <a name='mark_a_bill_as_open'></a>

### Arguments:

-   $billid
-   $data = []

### Example:

```php
$bills = new Bills();
$bills->mark_a_bill_as_open($billid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## submit_a_bill_for_approval <a name='submit_a_bill_for_approval'></a>

### Arguments:

-   $billid
-   $data = []

### Example:

```php
$bills = new Bills();
$bills->submit_a_bill_for_approval($billid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## approve_a_bill <a name='approve_a_bill'></a>

### Arguments:

-   $billid
-   $data = []

### Example:

```php
$bills = new Bills();
$bills->approve_a_bill($billid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## update_billing_address <a name='update_billing_address'></a>

### Arguments:

-   $billid
-   $data = []

### Example:

```php
$bills = new Bills();
$bills->update_billing_address($billid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_bill_payments <a name='list_bill_payments'></a>

### Arguments:

-   $billid

### Example:

```php
$bills = new Bills();
$bills->list_bill_payments($billid);
```

## apply_credits <a name='apply_credits'></a>

### Arguments:

-   $billid
-   $data = []

### Example:

```php
$bills = new Bills();
$bills->apply_credits($billid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## delete_a_payment <a name='delete_a_payment'></a>

### Arguments:

-   $billid
-   $billpaymentid

### Example:

```php
$bills = new Bills();
$bills->delete_a_payment($billid, $billpaymentid);
```

## add_attachment_to_a_bill <a name='add_attachment_to_a_bill'></a>

### Arguments:

-   $billid
-   $data = []

### Example:

```php
$bills = new Bills();
$bills->add_attachment_to_a_bill($billid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_bill_attachment <a name='get_a_bill_attachment'></a>

### Arguments:

-   $billid

### Example:

```php
$bills = new Bills();
$bills->get_a_bill_attachment($billid);
```

## delete_an_attachment <a name='delete_an_attachment'></a>

### Arguments:

-   $billid

### Example:

```php
$bills = new Bills();
$bills->delete_an_attachment($billid);
```

## add_comment <a name='add_comment'></a>

### Arguments:

-   $billid
-   $data = []

### Example:

```php
$bills = new Bills();
$bills->add_comment($billid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_bill_comments_and_history <a name='list_bill_comments_and_history'></a>

### Arguments:

-   $billid

### Example:

```php
$bills = new Bills();
$bills->list_bill_comments_and_history($billid);
```

## delete_a_comment <a name='delete_a_comment'></a>

### Arguments:

-   $billid
-   $commentid

### Example:

```php
$bills = new Bills();
$bills->delete_a_comment($billid, $commentid);
```

# TimeEntries <a name='timeentries'></a>

## log_time_entries <a name='log_time_entries'></a>

### Arguments:

-   $data = []

### Example:

```php
$timeentries = new TimeEntries();
$timeentries->log_time_entries($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_time_entries <a name='list_time_entries'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$timeentries = new TimeEntries();
$timeentries->list_time_entries();
```

## delete_time_entries <a name='delete_time_entries'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$timeentries = new TimeEntries();
$timeentries->delete_time_entries();
```

## update_time_entry <a name='update_time_entry'></a>

### Arguments:

-   $timeentryid
-   $data = []

### Example:

```php
$timeentries = new TimeEntries();
$timeentries->update_time_entry($timeentryid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_time_entry <a name='get_a_time_entry'></a>

### Arguments:

-   $timeentryid

### Example:

```php
$timeentries = new TimeEntries();
$timeentries->get_a_time_entry($timeentryid);
```

## delete_time_entry <a name='delete_time_entry'></a>

### Arguments:

-   $timeentryid

### Example:

```php
$timeentries = new TimeEntries();
$timeentries->delete_time_entry($timeentryid);
```

## start_timer <a name='start_timer'></a>

### Arguments:

-   $timeentryid
-   $data = []

### Example:

```php
$timeentries = new TimeEntries();
$timeentries->start_timer($timeentryid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## stop_timer <a name='stop_timer'></a>

### Arguments:

-   $data = []

### Example:

```php
$timeentries = new TimeEntries();
$timeentries->stop_timer($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_timer <a name='get_timer'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$timeentries = new TimeEntries();
$timeentries->get_timer();
```

# ChartOfAccounts <a name='chartofaccounts'></a>

## create_an_account <a name='create_an_account'></a>

### Arguments:

-   $data = []

### Example:

```php
$chartofaccounts = new ChartOfAccounts();
$chartofaccounts->create_an_account($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_chart_of_accounts <a name='list_chart_of_accounts'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$chartofaccounts = new ChartOfAccounts();
$chartofaccounts->list_chart_of_accounts();
```

## update_an_account <a name='update_an_account'></a>

### Arguments:

-   $accountid
-   $data = []

### Example:

```php
$chartofaccounts = new ChartOfAccounts();
$chartofaccounts->update_an_account($accountid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_an_account <a name='get_an_account'></a>

### Arguments:

-   $accountid

### Example:

```php
$chartofaccounts = new ChartOfAccounts();
$chartofaccounts->get_an_account($accountid);
```

## delete_an_account <a name='delete_an_account'></a>

### Arguments:

-   $accountid

### Example:

```php
$chartofaccounts = new ChartOfAccounts();
$chartofaccounts->delete_an_account($accountid);
```

## mark_an_account_as_active <a name='mark_an_account_as_active'></a>

### Arguments:

-   $accountid
-   $data = []

### Example:

```php
$chartofaccounts = new ChartOfAccounts();
$chartofaccounts->mark_an_account_as_active($accountid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## mark_an_account_as_inactive <a name='mark_an_account_as_inactive'></a>

### Arguments:

-   $accountid
-   $data = []

### Example:

```php
$chartofaccounts = new ChartOfAccounts();
$chartofaccounts->mark_an_account_as_inactive($accountid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_of_transactions_for_an_account <a name='list_of_transactions_for_an_account'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$chartofaccounts = new ChartOfAccounts();
$chartofaccounts->list_of_transactions_for_an_account();
```

## delete_a_transaction <a name='delete_a_transaction'></a>

### Arguments:

-   $transactionid

### Example:

```php
$chartofaccounts = new ChartOfAccounts();
$chartofaccounts->delete_a_transaction($transactionid);
```

# Tasks <a name='tasks'></a>

## add_a_task <a name='add_a_task'></a>

### Arguments:

-   $projectid
-   $data = []

### Example:

```php
$tasks = new Tasks();
$tasks->add_a_task($projectid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_tasks <a name='list_tasks'></a>

### Arguments:

-   $projectid

### Example:

```php
$tasks = new Tasks();
$tasks->list_tasks($projectid);
```

## update_a_task <a name='update_a_task'></a>

### Arguments:

-   $projectid
-   $taskid
-   $data = []

### Example:

```php
$tasks = new Tasks();
$tasks->update_a_task($projectid, $taskid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_task <a name='get_a_task'></a>

### Arguments:

-   $projectid
-   $taskid

### Example:

```php
$tasks = new Tasks();
$tasks->get_a_task($projectid, $taskid);
```

## delete_task <a name='delete_task'></a>

### Arguments:

-   $projectid
-   $taskid

### Example:

```php
$tasks = new Tasks();
$tasks->delete_task($projectid, $taskid);
```

# CustomerPayments <a name='customerpayments'></a>

## create_a_payment <a name='create_a_payment'></a>

### Arguments:

-   $data = []

### Example:

```php
$customerpayments = new CustomerPayments();
$customerpayments->create_a_payment($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_customer_payments <a name='list_customer_payments'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$customerpayments = new CustomerPayments();
$customerpayments->list_customer_payments();
```

## update_a_payment <a name='update_a_payment'></a>

### Arguments:

-   $paymentid
-   $data = []

### Example:

```php
$customerpayments = new CustomerPayments();
$customerpayments->update_a_payment($paymentid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## retrieve_a_payment <a name='retrieve_a_payment'></a>

### Arguments:

-   $paymentid

### Example:

```php
$customerpayments = new CustomerPayments();
$customerpayments->retrieve_a_payment($paymentid);
```

## delete_a_payment <a name='delete_a_payment'></a>

### Arguments:

-   $paymentid

### Example:

```php
$customerpayments = new CustomerPayments();
$customerpayments->delete_a_payment($paymentid);
```

## refund_an_excess_customer_payment <a name='refund_an_excess_customer_payment'></a>

### Arguments:

-   $customerpaymentid
-   $data = []

### Example:

```php
$customerpayments = new CustomerPayments();
$customerpayments->refund_an_excess_customer_payment($customerpaymentid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_refunds_of_a_customer_payment <a name='list_refunds_of_a_customer_payment'></a>

### Arguments:

-   $customerpaymentid

### Example:

```php
$customerpayments = new CustomerPayments();
$customerpayments->list_refunds_of_a_customer_payment($customerpaymentid);
```

## update_a_refund <a name='update_a_refund'></a>

### Arguments:

-   $customerpaymentid
-   $refundid
-   $data = []

### Example:

```php
$customerpayments = new CustomerPayments();
$customerpayments->update_a_refund($customerpaymentid, $refundid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## details_of_a_refund <a name='details_of_a_refund'></a>

### Arguments:

-   $customerpaymentid
-   $refundid

### Example:

```php
$customerpayments = new CustomerPayments();
$customerpayments->details_of_a_refund($customerpaymentid, $refundid);
```

## delete_a_refund <a name='delete_a_refund'></a>

### Arguments:

-   $customerpaymentid
-   $refundid

### Example:

```php
$customerpayments = new CustomerPayments();
$customerpayments->delete_a_refund($customerpaymentid, $refundid);
```

# RetainerInvoices <a name='retainerinvoices'></a>

## create_a_retainerinvoice <a name='create_a_retainerinvoice'></a>

### Arguments:

-   $data = []

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->create_a_retainerinvoice($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_a_retainer_invoices <a name='list_a_retainer_invoices'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->list_a_retainer_invoices();
```

## update_a_retainerinvoice <a name='update_a_retainerinvoice'></a>

### Arguments:

-   $retainerinvoiceid
-   $data = []

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->update_a_retainerinvoice($retainerinvoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_retainer_invoice <a name='get_a_retainer_invoice'></a>

### Arguments:

-   $retainerinvoiceid

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->get_a_retainer_invoice($retainerinvoiceid);
```

## delete_a_retainer_invoice <a name='delete_a_retainer_invoice'></a>

### Arguments:

-   $retainerinvoiceid

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->delete_a_retainer_invoice($retainerinvoiceid);
```

## mark_a_retainer_invoice_as_sent <a name='mark_a_retainer_invoice_as_sent'></a>

### Arguments:

-   $retainerinvoiceid
-   $data = []

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->mark_a_retainer_invoice_as_sent($retainerinvoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## update_retainer_invoice_template <a name='update_retainer_invoice_template'></a>

### Arguments:

-   $retainerinvoiceid
-   $templateid
-   $data = []

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->update_retainer_invoice_template($retainerinvoiceid, $templateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## void_a_retainer_invoice <a name='void_a_retainer_invoice'></a>

### Arguments:

-   $retainerinvoiceid
-   $data = []

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->void_a_retainer_invoice($retainerinvoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## mark_as_draft <a name='mark_as_draft'></a>

### Arguments:

-   $reatinerinvoiceid
-   $data = []

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->mark_as_draft($reatinerinvoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## submit_a_retainer_invoice_for_approval <a name='submit_a_retainer_invoice_for_approval'></a>

### Arguments:

-   $reatinerinvoiceid
-   $data = []

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->submit_a_retainer_invoice_for_approval($reatinerinvoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## approve_a_retainer_invoice <a name='approve_a_retainer_invoice'></a>

### Arguments:

-   $reatinerinvoiceid
-   $data = []

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->approve_a_retainer_invoice($reatinerinvoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## email_a_retainer_invoice <a name='email_a_retainer_invoice'></a>

### Arguments:

-   $retainerinvoiceid
-   $data = []

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->email_a_retainer_invoice($retainerinvoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_retainer_invoice_email_content <a name='get_retainer_invoice_email_content'></a>

### Arguments:

-   $retainerinvoiceid

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->get_retainer_invoice_email_content($retainerinvoiceid);
```

## update_billing_address <a name='update_billing_address'></a>

### Arguments:

-   $retainerinvoiceid
-   $data = []

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->update_billing_address($retainerinvoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_retainer_invoice_templates <a name='list_retainer_invoice_templates'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->list_retainer_invoice_templates();
```

## add_attachment_to_a_retainer_invoice <a name='add_attachment_to_a_retainer_invoice'></a>

### Arguments:

-   $retainerinvoiceid
-   $data = []

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->add_attachment_to_a_retainer_invoice($retainerinvoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_retainer_invoice_attachment <a name='get_a_retainer_invoice_attachment'></a>

### Arguments:

-   $retainerinvoiceid

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->get_a_retainer_invoice_attachment($retainerinvoiceid);
```

## delete_an_attachment <a name='delete_an_attachment'></a>

### Arguments:

-   $retainerinvoiceid
-   $documentid

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->delete_an_attachment($retainerinvoiceid, $documentid);
```

## add_comment <a name='add_comment'></a>

### Arguments:

-   $retainerinvoiceid
-   $data = []

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->add_comment($retainerinvoiceid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_retainer_invoice_comments_and_history <a name='list_retainer_invoice_comments_and_history'></a>

### Arguments:

-   $retainerinvoiceid

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->list_retainer_invoice_comments_and_history($retainerinvoiceid);
```

## update_comment <a name='update_comment'></a>

### Arguments:

-   $retainerinvoiceid
-   $commentid
-   $data = []

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->update_comment($retainerinvoiceid, $commentid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## delete_a_comment <a name='delete_a_comment'></a>

### Arguments:

-   $retainerinvoiceid
-   $commentid

### Example:

```php
$retainerinvoices = new RetainerInvoices();
$retainerinvoices->delete_a_comment($retainerinvoiceid, $commentid);
```

# Users <a name='users'></a>

## create_a_user <a name='create_a_user'></a>

### Arguments:

-   $data = []

### Example:

```php
$users = new Users();
$users->create_a_user($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_users <a name='list_users'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$users = new Users();
$users->list_users();
```

## update_a_user <a name='update_a_user'></a>

### Arguments:

-   $userid
-   $data = []

### Example:

```php
$users = new Users();
$users->update_a_user($userid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_user <a name='get_a_user'></a>

### Arguments:

-   $userid

### Example:

```php
$users = new Users();
$users->get_a_user($userid);
```

## delete_a_user <a name='delete_a_user'></a>

### Arguments:

-   $userid

### Example:

```php
$users = new Users();
$users->delete_a_user($userid);
```

## get_current_user <a name='get_current_user'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$users = new Users();
$users->get_current_user();
```

## invite_a_user <a name='invite_a_user'></a>

### Arguments:

-   $userid
-   $data = []

### Example:

```php
$users = new Users();
$users->invite_a_user($userid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## mark_user_as_active <a name='mark_user_as_active'></a>

### Arguments:

-   $userid
-   $data = []

### Example:

```php
$users = new Users();
$users->mark_user_as_active($userid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## mark_user_as_inactive <a name='mark_user_as_inactive'></a>

### Arguments:

-   $userid
-   $data = []

### Example:

```php
$users = new Users();
$users->mark_user_as_inactive($userid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

# CreditNotes <a name='creditnotes'></a>

## create_a_credit_note <a name='create_a_credit_note'></a>

### Arguments:

-   $data = []

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->create_a_credit_note($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_all_credit_notes <a name='list_all_credit_notes'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->list_all_credit_notes();
```

## update_a_credit_note <a name='update_a_credit_note'></a>

### Arguments:

-   $creditnoteid
-   $data = []

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->update_a_credit_note($creditnoteid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_credit_note <a name='get_a_credit_note'></a>

### Arguments:

-   $creditnoteid

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->get_a_credit_note($creditnoteid);
```

## delete_a_credit_note <a name='delete_a_credit_note'></a>

### Arguments:

-   $creditnoteid

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->delete_a_credit_note($creditnoteid);
```

## email_a_credit_note <a name='email_a_credit_note'></a>

### Arguments:

-   $creditnoteid
-   $data = []

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->email_a_credit_note($creditnoteid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_email_content <a name='get_email_content'></a>

### Arguments:

-   $creditnoteid

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->get_email_content($creditnoteid);
```

## void_a_credit_note <a name='void_a_credit_note'></a>

### Arguments:

-   $creditnoteid
-   $data = []

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->void_a_credit_note($creditnoteid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## convert_credit_note_to_draft <a name='convert_credit_note_to_draft'></a>

### Arguments:

-   $creditnoteid
-   $data = []

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->convert_credit_note_to_draft($creditnoteid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## convert_to_open <a name='convert_to_open'></a>

### Arguments:

-   $creditnoteid
-   $data = []

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->convert_to_open($creditnoteid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## submit_a_credit_note_for_approval <a name='submit_a_credit_note_for_approval'></a>

### Arguments:

-   $creditnoteid
-   $data = []

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->submit_a_credit_note_for_approval($creditnoteid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## approve_a_credit_note <a name='approve_a_credit_note'></a>

### Arguments:

-   $creditnoteid
-   $data = []

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->approve_a_credit_note($creditnoteid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## email_history <a name='email_history'></a>

### Arguments:

-   $creditnoteid

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->email_history($creditnoteid);
```

## update_billing_address <a name='update_billing_address'></a>

### Arguments:

-   $creditnoteid
-   $data = []

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->update_billing_address($creditnoteid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## update_shipping_address <a name='update_shipping_address'></a>

### Arguments:

-   $creditnoteid
-   $data = []

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->update_shipping_address($creditnoteid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_credit_note_template <a name='list_credit_note_template'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->list_credit_note_template();
```

## update_a_credit_note_template <a name='update_a_credit_note_template'></a>

### Arguments:

-   $creditnoteid
-   $templateid
-   $data = []

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->update_a_credit_note_template($creditnoteid, $templateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## credit_to_an_invoice <a name='credit_to_an_invoice'></a>

### Arguments:

-   $creditnoteid
-   $data = []

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->credit_to_an_invoice($creditnoteid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_invoices_credited <a name='list_invoices_credited'></a>

### Arguments:

-   $creditnoteid

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->list_invoices_credited($creditnoteid);
```

## delete_invoices_credited <a name='delete_invoices_credited'></a>

### Arguments:

-   $creditnoteid
-   $creditnoteinvoiceid

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->delete_invoices_credited($creditnoteid, $creditnoteinvoiceid);
```

## add_a_comment <a name='add_a_comment'></a>

### Arguments:

-   $creditnoteid
-   $data = []

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->add_a_comment($creditnoteid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_credit_note_comments_and_history <a name='list_credit_note_comments_and_history'></a>

### Arguments:

-   $creditnoteid

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->list_credit_note_comments_and_history($creditnoteid);
```

## delete_a_comment <a name='delete_a_comment'></a>

### Arguments:

-   $creditnoteid
-   $commentid

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->delete_a_comment($creditnoteid, $commentid);
```

## list_credit_note_refunds <a name='list_credit_note_refunds'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->list_credit_note_refunds();
```

## refund_credit_note <a name='refund_credit_note'></a>

### Arguments:

-   $creditnoteid
-   $data = []

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->refund_credit_note($creditnoteid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_refunds_of_a_credit_note <a name='list_refunds_of_a_credit_note'></a>

### Arguments:

-   $creditnoteid

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->list_refunds_of_a_credit_note($creditnoteid);
```

## update_credit_note_refund <a name='update_credit_note_refund'></a>

### Arguments:

-   $creditnoteid
-   $creditnoterefundid
-   $data = []

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->update_credit_note_refund($creditnoteid, $creditnoterefundid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_credit_note_refund <a name='get_credit_note_refund'></a>

### Arguments:

-   $creditnoteid
-   $creditnoterefundid

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->get_credit_note_refund($creditnoteid, $creditnoterefundid);
```

## delete_credit_note_refund <a name='delete_credit_note_refund'></a>

### Arguments:

-   $creditnoteid
-   $creditnoterefundid

### Example:

```php
$creditnotes = new CreditNotes();
$creditnotes->delete_credit_note_refund($creditnoteid, $creditnoterefundid);
```

# Items <a name='items'></a>

## create_an_item <a name='create_an_item'></a>

### Arguments:

-   $data = []

### Example:

```php
$items = new Items();
$items->create_an_item($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_items <a name='list_items'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$items = new Items();
$items->list_items();
```

## update_an_item <a name='update_an_item'></a>

### Arguments:

-   $itemid
-   $data = []

### Example:

```php
$items = new Items();
$items->update_an_item($itemid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_an_item <a name='get_an_item'></a>

### Arguments:

-   $itemid

### Example:

```php
$items = new Items();
$items->get_an_item($itemid);
```

## delete_an_item <a name='delete_an_item'></a>

### Arguments:

-   $itemid

### Example:

```php
$items = new Items();
$items->delete_an_item($itemid);
```

## mark_as_active <a name='mark_as_active'></a>

### Arguments:

-   $itemid
-   $data = []

### Example:

```php
$items = new Items();
$items->mark_as_active($itemid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## mark_as_inactive <a name='mark_as_inactive'></a>

### Arguments:

-   $itemid
-   $data = []

### Example:

```php
$items = new Items();
$items->mark_as_inactive($itemid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

# PurchaseOrders <a name='purchaseorders'></a>

## create_a_purchase_order <a name='create_a_purchase_order'></a>

### Arguments:

-   $data = []

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->create_a_purchase_order($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_purchase_orders <a name='list_purchase_orders'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->list_purchase_orders();
```

## update_a_purchase_order <a name='update_a_purchase_order'></a>

### Arguments:

-   $purchaseorderid
-   $data = []

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->update_a_purchase_order($purchaseorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_purchase_order <a name='get_a_purchase_order'></a>

### Arguments:

-   $purchaseorderid

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->get_a_purchase_order($purchaseorderid);
```

## delete_purchase_order <a name='delete_purchase_order'></a>

### Arguments:

-   $purchaseorderid

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->delete_purchase_order($purchaseorderid);
```

## mark_a_purchase_order_as_open <a name='mark_a_purchase_order_as_open'></a>

### Arguments:

-   $purchaseorderid
-   $data = []

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->mark_a_purchase_order_as_open($purchaseorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## mark_as_billed <a name='mark_as_billed'></a>

### Arguments:

-   $purchaseorderid
-   $data = []

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->mark_as_billed($purchaseorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## cancel_a_purchase_order <a name='cancel_a_purchase_order'></a>

### Arguments:

-   $purchaseorderid
-   $data = []

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->cancel_a_purchase_order($purchaseorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## submit_a_purchase_order_for_approval <a name='submit_a_purchase_order_for_approval'></a>

### Arguments:

-   $purchaseorderid
-   $data = []

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->submit_a_purchase_order_for_approval($purchaseorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## approve_a_purchase_order <a name='approve_a_purchase_order'></a>

### Arguments:

-   $purchaseorderid
-   $data = []

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->approve_a_purchase_order($purchaseorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## email_a_purchase_order <a name='email_a_purchase_order'></a>

### Arguments:

-   $purchaseorderid
-   $data = []

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->email_a_purchase_order($purchaseorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_purchase_order_email_content <a name='get_purchase_order_email_content'></a>

### Arguments:

-   $purchaseorderid

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->get_purchase_order_email_content($purchaseorderid);
```

## update_billing_address <a name='update_billing_address'></a>

### Arguments:

-   $purchaseorderid
-   $data = []

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->update_billing_address($purchaseorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_purchase_order_templates <a name='list_purchase_order_templates'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->list_purchase_order_templates();
```

## update_purchase_order_template <a name='update_purchase_order_template'></a>

### Arguments:

-   $purchaseorderid
-   $templateid
-   $data = []

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->update_purchase_order_template($purchaseorderid, $templateid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## add_attachment_to_a_purchase_order <a name='add_attachment_to_a_purchase_order'></a>

### Arguments:

-   $purchaseorderid
-   $data = []

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->add_attachment_to_a_purchase_order($purchaseorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## update_attachment_preference <a name='update_attachment_preference'></a>

### Arguments:

-   $purchaseorderid
-   $data = []

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->update_attachment_preference($purchaseorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_a_purchase_order_attachment <a name='get_a_purchase_order_attachment'></a>

### Arguments:

-   $purchaseorderid

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->get_a_purchase_order_attachment($purchaseorderid);
```

## delete_an_attachment <a name='delete_an_attachment'></a>

### Arguments:

-   $purchaseorderid

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->delete_an_attachment($purchaseorderid);
```

## add_comment <a name='add_comment'></a>

### Arguments:

-   $purchaseorderid
-   $data = []

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->add_comment($purchaseorderid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## list_purchase_order_comments_and_history <a name='list_purchase_order_comments_and_history'></a>

### Arguments:

-   $purchaseorderid

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->list_purchase_order_comments_and_history($purchaseorderid);
```

## update_comment <a name='update_comment'></a>

### Arguments:

-   $purchaseorderid
-   $commentid
-   $data = []

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->update_comment($purchaseorderid, $commentid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## delete_a_comment <a name='delete_a_comment'></a>

### Arguments:

-   $purchaseorderid
-   $commentid

### Example:

```php
$purchaseorders = new PurchaseOrders();
$purchaseorders->delete_a_comment($purchaseorderid, $commentid);
```

# BankTransactions <a name='banktransactions'></a>

## create_a_transaction_for_an_account <a name='create_a_transaction_for_an_account'></a>

### Arguments:

-   $data = []

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->create_a_transaction_for_an_account($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_transactions_list <a name='get_transactions_list'></a>

### Arguments:

-   No arguments required.

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->get_transactions_list();
```

## update_a_transaction <a name='update_a_transaction'></a>

### Arguments:

-   $banktransactionid
-   $data = []

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->update_a_transaction($banktransactionid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_transaction <a name='get_transaction'></a>

### Arguments:

-   $banktransactionid

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->get_transaction($banktransactionid);
```

## delete_a_transaction <a name='delete_a_transaction'></a>

### Arguments:

-   $banktransactionid

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->delete_a_transaction($banktransactionid);
```

## match_a_transaction <a name='match_a_transaction'></a>

### Arguments:

-   $transactionid
-   $data = []

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->match_a_transaction($transactionid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## get_matching_transactions <a name='get_matching_transactions'></a>

### Arguments:

-   $transactionid

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->get_matching_transactions($transactionid);
```

## unmatch_a_matched_transaction <a name='unmatch_a_matched_transaction'></a>

### Arguments:

-   $transactionid
-   $data = []

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->unmatch_a_matched_transaction($transactionid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## exclude_a_transaction <a name='exclude_a_transaction'></a>

### Arguments:

-   $transactionid
-   $data = []

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->exclude_a_transaction($transactionid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## restore_a_transaction <a name='restore_a_transaction'></a>

### Arguments:

-   $transactionid
-   $data = []

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->restore_a_transaction($transactionid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## categorize_an_uncategorized_transaction <a name='categorize_an_uncategorized_transaction'></a>

### Arguments:

-   $transactionid
-   $data = []

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->categorize_an_uncategorized_transaction($transactionid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## categorize_as_expense <a name='categorize_as_expense'></a>

### Arguments:

-   $transactionid
-   $data = []

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->categorize_as_expense($transactionid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## uncategorize_a_categorized_transaction <a name='uncategorize_a_categorized_transaction'></a>

### Arguments:

-   $transactionid
-   $data = []

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->uncategorize_a_categorized_transaction($transactionid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## categorize_a_vendor_payment <a name='categorize_a_vendor_payment'></a>

### Arguments:

-   $transactionid
-   $data = []

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->categorize_a_vendor_payment($transactionid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## categorize_as_customer_payment <a name='categorize_as_customer_payment'></a>

### Arguments:

-   $transactionid
-   $data = []

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->categorize_as_customer_payment($transactionid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## categorize_as_credit_note_refunds <a name='categorize_as_credit_note_refunds'></a>

### Arguments:

-   $transactionid
-   $data = []

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->categorize_as_credit_note_refunds($transactionid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## categorize_as_vendor_credit_refunds <a name='categorize_as_vendor_credit_refunds'></a>

### Arguments:

-   $transactionid
-   $data = []

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->categorize_as_vendor_credit_refunds($transactionid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## categorize_as_customer_payment_refund <a name='categorize_as_customer_payment_refund'></a>

### Arguments:

-   $statementlineid
-   $data = []

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->categorize_as_customer_payment_refund($statementlineid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## categorize_as_vendor_payment_refund <a name='categorize_as_vendor_payment_refund'></a>

### Arguments:

-   $statementlineid
-   $data = []

### Example:

```php
$banktransactions = new BankTransactions();
$banktransactions->categorize_as_vendor_payment_refund($statementlineid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

# ContactPersons <a name='contactpersons'></a>

## create_a_contact_person <a name='create_a_contact_person'></a>

### Arguments:

-   $data = []

### Example:

```php
$contactpersons = new ContactPersons();
$contactpersons->create_a_contact_person($data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## update_a_contact_person <a name='update_a_contact_person'></a>

### Arguments:

-   $contactpersonid
-   $data = []

### Example:

```php
$contactpersons = new ContactPersons();
$contactpersons->update_a_contact_person($contactpersonid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```

## delete_a_contact_person <a name='delete_a_contact_person'></a>

### Arguments:

-   $contactpersonid

### Example:

```php
$contactpersons = new ContactPersons();
$contactpersons->delete_a_contact_person($contactpersonid);
```

## list_contact_persons <a name='list_contact_persons'></a>

### Arguments:

-   $contactid

### Example:

```php
$contactpersons = new ContactPersons();
$contactpersons->list_contact_persons($contactid);
```

## get_a_contact_person <a name='get_a_contact_person'></a>

### Arguments:

-   $contactid
-   $contactpersonid

### Example:

```php
$contactpersons = new ContactPersons();
$contactpersons->get_a_contact_person($contactid, $contactpersonid);
```

## mark_as_primary_contact_person <a name='mark_as_primary_contact_person'></a>

### Arguments:

-   $contactpersonid
-   $data = []

### Example:

```php
$contactpersons = new ContactPersons();
$contactpersons->mark_as_primary_contact_person($contactpersonid, $data);
// Array Keys for $data can be found in Official documentation here: https://www.zoho.com/books/api/v3/
```
