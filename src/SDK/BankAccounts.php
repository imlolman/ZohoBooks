<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class BankAccounts extends BaseClass
{
    /**
     * Create a bank account
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_bank_account($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts?organization_id={{ORGANIZATION_ID}}"
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
     * List view of accounts
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_view_of_accounts()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts?organization_id={{ORGANIZATION_ID}}"
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
     * Update bank account
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts/${account_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $accountid
     * Headers:
     * @param array $data = []
     */
    public function update_bank_account($accountid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts/" .
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
     * Get account details
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts/${account_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $accountid
     * Headers:
     */
    public function get_account_details($accountid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts/" .
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
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts/${account_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $accountid
     * Headers:
     */
    public function delete_an_account($accountid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts/" .
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
     * Deactivate account.
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts/${account_id}/inactive?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $accountid
     * Headers:
     * @param array $data = []
     */
    public function deactivate_account($accountid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts/" .
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
     * Activate account
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts/${account_id}/active?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $accountid
     * Headers:
     * @param array $data = []
     */
    public function activate_account($accountid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts/" .
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
     * Import a Bank/Credit Card Statement
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankstatements?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function import_a_bank_credit_card_statement($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankstatements?organization_id={{ORGANIZATION_ID}}"
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
     * Get last imported statement
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts/${account_id}/statement/lastimported?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $accountid
     * Headers:
     */
    public function get_last_imported_statement($accountid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts/" .
                $accountid .
                "/statement/lastimported?organization_id={{ORGANIZATION_ID}}"
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
     * Delete last imported statement
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts/${account_id}/statement/${statement_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $accountid
     * @param $statementid
     * Headers:
     */
    public function delete_last_imported_statement($accountid, $statementid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/bankaccounts/" .
                $accountid .
                "/statement/" .
                $statementid .
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
