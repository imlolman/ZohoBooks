<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class RecurringExpenses extends BaseClass
{
    /**
     * Create a recurring expense
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_recurring_expense($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses?organization_id={{ORGANIZATION_ID}}"
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
     * List recurring expenses
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_recurring_expenses()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses?organization_id={{ORGANIZATION_ID}}"
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
     * Update a recurring expense
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses/${recurring_expense_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $recurringexpenseid
     * Headers:
     * @param array $data = []
     */
    public function update_a_recurring_expense($recurringexpenseid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses/" .
                $recurringexpenseid .
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
     * Get a recurring expense
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses/${recurring_expense_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $recurringexpenseid
     * Headers:
     */
    public function get_a_recurring_expense($recurringexpenseid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses/" .
                $recurringexpenseid .
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
     * Delete a recurring expense
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses/${recurring_expense_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $recurringexpenseid
     * Headers:
     */
    public function delete_a_recurring_expense($recurringexpenseid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses/" .
                $recurringexpenseid .
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
     * Stop a recurring expense
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses/${recurring_expense_id}/status/stop?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $recurringexpenseid
     * Headers:
     * @param array $data = []
     */
    public function stop_a_recurring_expense($recurringexpenseid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses/" .
                $recurringexpenseid .
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
     * Resume a recurring Expense
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses/${recurring_expense_id}/status/resume?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $recurringexpenseid
     * Headers:
     * @param array $data = []
     */
    public function resume_a_recurring_expense($recurringexpenseid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses/" .
                $recurringexpenseid .
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
     * List child expenses created
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses/${recurring_expense_id}/expenses?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $recurringexpenseid
     * Headers:
     */
    public function list_child_expenses_created($recurringexpenseid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses/" .
                $recurringexpenseid .
                "/expenses?organization_id={{ORGANIZATION_ID}}"
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
     * List recurring expense history
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses/${recurring_expense_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $recurringexpenseid
     * Headers:
     */
    public function list_recurring_expense_history($recurringexpenseid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/recurringexpenses/" .
                $recurringexpenseid .
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
