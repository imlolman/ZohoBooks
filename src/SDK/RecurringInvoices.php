<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class RecurringInvoices extends BaseClass
{
    /**
     * Create a Recurring Invoice
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_recurring_invoice($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices?organization_id={{ORGANIZATION_ID}}"
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
     * List all  Recurring Invoice
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_all_recurring_invoice()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices?organization_id={{ORGANIZATION_ID}}"
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
     * Update Recurring Invoice
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices/${recurring_invoice_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $recurringinvoiceid
     * Headers:
     * @param array $data = []
     */
    public function update_recurring_invoice($recurringinvoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices/" .
                $recurringinvoiceid .
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
     * Get a Recurring Invoice
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices/${recurring_invoice_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $recurringinvoiceid
     * Headers:
     */
    public function get_a_recurring_invoice($recurringinvoiceid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices/" .
                $recurringinvoiceid .
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
     * Delete a Recurring Invoice
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices/${recurring_invoice_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $recurringinvoiceid
     * Headers:
     */
    public function delete_a_recurring_invoice($recurringinvoiceid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices/" .
                $recurringinvoiceid .
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
     * Stop a Recurring Invoice
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices/${recurring_invoice_id}/status/stop?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $recurringinvoiceid
     * Headers:
     * @param array $data = []
     */
    public function stop_a_recurring_invoice($recurringinvoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices/" .
                $recurringinvoiceid .
                "/status/stop?organization_id={{ORGANIZATION_ID}}"
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
     * Resume a Recurring Invoice
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices/${recurring_invoice_id}/status/resume?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $recurringinvoiceid
     * Headers:
     * @param array $data = []
     */
    public function resume_a_recurring_invoice($recurringinvoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices/" .
                $recurringinvoiceid .
                "/status/resume?organization_id={{ORGANIZATION_ID}}"
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
     * Update Recurring Invoice template
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices/${recurring_invoice_id}/templates/${template_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $recurringinvoiceid
     * @param $templateid
     * Headers:
     * @param array $data = []
     */
    public function update_recurring_invoice_template(
        $recurringinvoiceid,
        $templateid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices/" .
                $recurringinvoiceid .
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
     * List Recurring Invoice History
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices/${recurring_invoice_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $recurringinvoiceid
     * Headers:
     */
    public function list_recurring_invoice_history($recurringinvoiceid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringinvoices/" .
                $recurringinvoiceid .
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
}
