<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Invoices extends BaseClass
{
    /**
     * Create an invoice
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_an_invoice($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * List invoices
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_invoices()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * Update an invoice
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function update_an_invoice($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("PUT", $url, $options);
    }

    /**
     * Get an invoice
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $invoiceid
     * Headers:
     */
    public function get_an_invoice($invoiceid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * Delete an invoice
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $invoiceid
     * Headers:
     */
    public function delete_an_invoice($invoiceid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("DELETE", $url, $options);
    }

    /**
     * Mark an invoice as sent
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/status/sent?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function mark_an_invoice_as_sent($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/status/sent?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * Void an invoice
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/status/void?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function void_an_invoice($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/status/void?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * Mark as draft
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/status/draft?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function mark_as_draft($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/status/draft?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * Email invoices
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/email?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function email_invoices($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/email?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * Submit an invoice for approval
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/submit?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function submit_an_invoice_for_approval($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/submit?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * Approve an invoice.
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/approve?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function approve_an_invoice($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/approve?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * Email an invoice
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/email?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function email_an_invoice($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/email?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * Get invoice email content
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/email?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $invoiceid
     * Headers:
     */
    public function get_invoice_email_content($invoiceid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/email?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * Remind Customer
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/paymentreminder?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function remind_customer($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/paymentreminder?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * Get payment reminder mail content
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/paymentreminder?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $invoiceid
     * Headers:
     */
    public function get_payment_reminder_mail_content($invoiceid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/paymentreminder?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * Bulk invoice reminder
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/paymentreminder?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function bulk_invoice_reminder($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/paymentreminder?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * Bulk export Invoices
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/pdf?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function bulk_export_invoices()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/pdf?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * Bulk print invoices
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/print?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function bulk_print_invoices()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/print?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * Disable payment reminder
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/paymentreminder/disable?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function disable_payment_reminder($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/paymentreminder/disable?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * Enable payment reminder
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/paymentreminder/enable?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function enable_payment_reminder($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/paymentreminder/enable?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * Write off invoice
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/writeoff?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function write_off_invoice($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/writeoff?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * Cancel write off
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/writeoff/cancel?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function cancel_write_off($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/writeoff/cancel?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * Update billing address
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/address/billing?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function update_billing_address($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/address/billing?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("PUT", $url, $options);
    }

    /**
     * Update shipping address
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/address/shipping?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function update_shipping_address($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/address/shipping?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("PUT", $url, $options);
    }

    /**
     * List invoice templates
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/templates?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_invoice_templates()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/templates?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * Update invoice template
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/templates/${template_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $invoiceid
     * @param $templateid
     * Headers:
     * @param array $data = []
     */
    public function update_invoice_template($invoiceid, $templateid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/templates/" .
                $templateid .
                "?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("PUT", $url, $options);
    }

    /**
     * List invoice payments
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/payments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $invoiceid
     * Headers:
     */
    public function list_invoice_payments($invoiceid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/payments?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * List credits applied
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/creditsapplied?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $invoiceid
     * Headers:
     */
    public function list_credits_applied($invoiceid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/creditsapplied?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * Apply credits
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/credits?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function apply_credits($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/credits?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * Delete a payment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/payments/${invoice_payment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $invoiceid
     * @param $invoicepaymentid
     * Headers:
     */
    public function delete_a_payment($invoiceid, $invoicepaymentid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/payments/" .
                $invoicepaymentid .
                "?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("DELETE", $url, $options);
    }

    /**
     * Delete  applied credit
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/creditsapplied/${creditnotes_invoice_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $invoiceid
     * @param $creditnotesinvoiceid
     * Headers:
     */
    public function delete_applied_credit($invoiceid, $creditnotesinvoiceid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/creditsapplied/" .
                $creditnotesinvoiceid .
                "?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("DELETE", $url, $options);
    }

    /**
     * Add attachment to an invoice
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function add_attachment_to_an_invoice($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/attachment?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * Update attachment preference
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function update_attachment_preference($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/attachment?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("PUT", $url, $options);
    }

    /**
     * Get an invoice attachment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $invoiceid
     * Headers:
     */
    public function get_an_invoice_attachment($invoiceid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/attachment?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * Delete an attachment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $invoiceid
     * Headers:
     */
    public function delete_an_attachment($invoiceid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/attachment?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("DELETE", $url, $options);
    }

    /**
     * Delete the expense receipt
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/expenses/${expense_id}/receipt?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $expenseid
     * Headers:
     */
    public function delete_the_expense_receipt($expenseid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/expenses/" .
                $expenseid .
                "/receipt?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("DELETE", $url, $options);
    }

    /**
     * Add comment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $invoiceid
     * Headers:
     * @param array $data = []
     */
    public function add_comment($invoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/comments?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * List invoice comments & history
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $invoiceid
     * Headers:
     */
    public function list_invoice_comments_and_history($invoiceid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/comments?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * Update comment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/comments/${comment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $invoiceid
     * @param $commentid
     * Headers:
     * @param array $data = []
     */
    public function update_comment($invoiceid, $commentid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/comments/" .
                $commentid .
                "?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["form_params"] = [
            "JSONString" => json_encode($data),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("PUT", $url, $options);
    }

    /**
     * Delete a comment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/${invoice_id}/comments/${comment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $invoiceid
     * @param $commentid
     * Headers:
     */
    public function delete_a_comment($invoiceid, $commentid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/invoices/" .
                $invoiceid .
                "/comments/" .
                $commentid .
                "?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("DELETE", $url, $options);
    }
}
