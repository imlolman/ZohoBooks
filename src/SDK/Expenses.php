<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Expenses extends BaseClass
{
    /**
     * Create an Expense
     * URL: https://books.zoho.com/api/v3/expenses?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_an_expense($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/expenses?organization_id={{ORGANIZATION_ID}}"
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
     * List Expenses
     * URL: https://books.zoho.com/api/v3/expenses?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_expenses()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/expenses?organization_id={{ORGANIZATION_ID}}"
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
     * Update an Expense
     * URL: https://books.zoho.com/api/v3/expenses/${expense_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $expenseid
     * Headers:
     * @param array $data = []
     */
    public function update_an_expense($expenseid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/expenses/" .
                $expenseid .
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
     * Get an Expense
     * URL: https://books.zoho.com/api/v3/expenses/${expense_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $expenseid
     * Headers:
     */
    public function get_an_expense($expenseid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/expenses/" .
                $expenseid .
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
     * Delete an Expense
     * URL: https://books.zoho.com/api/v3/expenses/${expense_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $expenseid
     * Headers:
     */
    public function delete_an_expense($expenseid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/expenses/" .
                $expenseid .
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
     * List expense History & Comments
     * URL: https://books.zoho.com/api/v3/expenses/${expense_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $expenseid
     * Headers:
     */
    public function list_expense_history_and_comments($expenseid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/expenses/" .
                $expenseid .
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
     * Create an employee
     * URL: https://books.zoho.com/api/v3/employees?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_an_employee($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/employees?organization_id={{ORGANIZATION_ID}}"
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
     * List employees
     * URL: https://books.zoho.com/api/v3/employees?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_employees()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/employees?organization_id={{ORGANIZATION_ID}}"
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
     * Get an employee
     * URL: https://books.zoho.com/api/v3/employees/${employee_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $employeeid
     * Headers:
     */
    public function get_an_employee($employeeid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/employees/" .
                $employeeid .
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
     * Delete an employee
     * URL: https://books.zoho.com/api/v3/employee/${employee_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $employeeid
     * Headers:
     */
    public function delete_an_employee($employeeid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/employee/" .
                $employeeid .
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
     * Add receipt to an expense.
     * URL: https://books.zoho.com/api/v3/expenses/${expense_id}/receipt?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $expenseid
     * Headers:
     * @param array $data = []
     */
    public function add_receipt_to_an_expense($expenseid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/expenses/" .
                $expenseid .
                "/receipt?organization_id={{ORGANIZATION_ID}}"
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
     * Get an expense receipt
     * URL: https://books.zoho.com/api/v3/expenses/${expense_id}/receipt?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $expenseid
     * Headers:
     */
    public function get_an_expense_receipt($expenseid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/expenses/" .
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
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * Delete a receipt
     * URL: https://books.zoho.com/api/v3/expenses/${expense_id}/receipt?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $expenseid
     * Headers:
     */
    public function delete_a_receipt($expenseid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/expenses/" .
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
}
