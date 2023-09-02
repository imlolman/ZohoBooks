<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class RecurringBills extends BaseClass
{
    /**
     * Create a recurring bill
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringbills?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_recurring_bill($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringbills?organization_id={{ORGANIZATION_ID}}"
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
     * List recurring bills
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringbills?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_recurring_bills()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringbills?organization_id={{ORGANIZATION_ID}}"
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
     * Update a recurring bill
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringbills/${recurring_bill_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $recurringbillid
     * Headers:
     * @param array $data = []
     */
    public function update_a_recurring_bill($recurringbillid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringbills/" .
                $recurringbillid .
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
     * Get a recurring bill
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurring_bills/${recurring_bill_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $recurringbillid
     * Headers:
     */
    public function get_a_recurring_bill($recurringbillid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurring_bills/" .
                $recurringbillid .
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
     * Delete a recurring bill
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurring_bills/${recurring_bill_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $recurringbillid
     * Headers:
     */
    public function delete_a_recurring_bill($recurringbillid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurring_bills/" .
                $recurringbillid .
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
     * Stop a recurring bill
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringbills/${recurring_bill_id}/status/stop?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $recurringbillid
     * Headers:
     * @param array $data = []
     */
    public function stop_a_recurring_bill($recurringbillid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringbills/" .
                $recurringbillid .
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
     * Resume a recurring Bill
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringbills/${recurring_bill_id}/status/resume?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $recurringbillid
     * Headers:
     * @param array $data = []
     */
    public function resume_a_recurring_bill($recurringbillid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringbills/" .
                $recurringbillid .
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
     * List recurring bill history
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringbills/${recurring_bill_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $recurringbillid
     * Headers:
     */
    public function list_recurring_bill_history($recurringbillid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringbills/" .
                $recurringbillid .
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
