<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class ChartOfAccounts extends BaseClass
{
    /**
     * Create an account
     * URL: https://books.zoho.com/api/v3/chartofaccounts?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_an_account($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/chartofaccounts?organization_id={{ORGANIZATION_ID}}"
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
     * List chart of accounts
     * URL: https://books.zoho.com/api/v3/chartofaccounts?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_chart_of_accounts()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/chartofaccounts?organization_id={{ORGANIZATION_ID}}"
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
     * Update an account
     * URL: https://books.zoho.com/api/v3/chartofaccounts/${account_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $accountid
     * Headers:
     * @param array $data = []
     */
    public function update_an_account($accountid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/chartofaccounts/" .
                $accountid .
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
     * Get an account
     * URL: https://books.zoho.com/api/v3/chartofaccounts/${account_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $accountid
     * Headers:
     */
    public function get_an_account($accountid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/chartofaccounts/" .
                $accountid .
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
     * Delete an account
     * URL: https://books.zoho.com/api/v3/chartofaccounts/${account_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $accountid
     * Headers:
     */
    public function delete_an_account($accountid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/chartofaccounts/" .
                $accountid .
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
     * Mark an account as active
     * URL: https://books.zoho.com/api/v3/chartofaccounts/${account_id}/active?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $accountid
     * Headers:
     * @param array $data = []
     */
    public function mark_an_account_as_active($accountid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/chartofaccounts/" .
                $accountid .
                "/active?organization_id={{ORGANIZATION_ID}}"
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
     * Mark an account as inactive
     * URL: https://books.zoho.com/api/v3/chartofaccounts/${account_id}/inactive?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $accountid
     * Headers:
     * @param array $data = []
     */
    public function mark_an_account_as_inactive($accountid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/chartofaccounts/" .
                $accountid .
                "/inactive?organization_id={{ORGANIZATION_ID}}"
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
     * List of transactions for an account
     * URL: https://books.zoho.com/api/v3/chartofaccounts/transactions?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_of_transactions_for_an_account()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/chartofaccounts/transactions?organization_id={{ORGANIZATION_ID}}"
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
     * Delete a transaction
     * URL: https://books.zoho.com/api/v3/chartofaccounts/transactions/${transaction_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $transactionid
     * Headers:
     */
    public function delete_a_transaction($transactionid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/chartofaccounts/transactions/" .
                $transactionid .
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
