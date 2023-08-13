<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class BankAccount extends BaseClass
{
    /**
     * Create a bank account
     * URL: https://books.zoho.com/api/v3/bankaccounts?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function create_a_bank_account($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bankaccounts?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [
            $this->replaceVariables("Authorization") => $this->replaceVariables(
                "Zoho-authtoken {{ACCESS_TOKEN}}"
            ),
        ];
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
     * Update bank account
     * URL: https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $BankAccountID
     * Headers:
     *  - Content-Type: application/x-www-form-urlencoded
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function update_bank_account($BankAccountID, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bankaccounts/" .
                $BankAccountID .
                "?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [
            $this->replaceVariables("Content-Type") => $this->replaceVariables(
                "application/x-www-form-urlencoded"
            ),
            $this->replaceVariables("Authorization") => $this->replaceVariables(
                "Zoho-authtoken {{ACCESS_TOKEN}}"
            ),
        ];
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
     * URL: https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $BankAccountID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function get_account_details($BankAccountID)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bankaccounts/" .
                $BankAccountID .
                "?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [
            $this->replaceVariables("Authorization") => $this->replaceVariables(
                "Zoho-authtoken {{ACCESS_TOKEN}}"
            ),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * List view of accounts
     * URL: https://books.zoho.com/api/v3/bankaccounts?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function list_view_of_accounts()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bankaccounts?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [
            $this->replaceVariables("Authorization") => $this->replaceVariables(
                "Zoho-authtoken {{ACCESS_TOKEN}}"
            ),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * Delete an account
     * URL: https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $BankAccountID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function delete_an_account($BankAccountID)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bankaccounts/" .
                $BankAccountID .
                "?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [
            $this->replaceVariables("Authorization") => $this->replaceVariables(
                "Zoho-authtoken {{ACCESS_TOKEN}}"
            ),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("DELETE", $url, $options);
    }

    /**
     * Deactivate account
     * URL: https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}/inactive?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $BankAccountID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function deactivate_account($BankAccountID, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bankaccounts/" .
                $BankAccountID .
                "/inactive?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [
            $this->replaceVariables("Authorization") => $this->replaceVariables(
                "Zoho-authtoken {{ACCESS_TOKEN}}"
            ),
        ];
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
     * URL: https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}/active?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $BankAccountID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function activate_account($BankAccountID, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bankaccounts/" .
                $BankAccountID .
                "/active?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [
            $this->replaceVariables("Authorization") => $this->replaceVariables(
                "Zoho-authtoken {{ACCESS_TOKEN}}"
            ),
        ];
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
     * URL: https://books.zoho.com/api/v3/bankaccounts/${Bank.Account_ID}/statement/lastimported?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $BankAccountID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function get_last_imported_statement($BankAccountID)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bankaccounts/" .
                $BankAccountID .
                "/statement/lastimported?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [
            $this->replaceVariables("Authorization") => $this->replaceVariables(
                "Zoho-authtoken {{ACCESS_TOKEN}}"
            ),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * Delete last imported statement
     * URL: https://books.zoho.com/api/v3/bankaccounts/${Accounts.Account_ID}/statement/${Statements.Statement_ID}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $AccountsAccountID
     * @param $StatementsStatementID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function delete_last_imported_statement(
        $AccountsAccountID,
        $StatementsStatementID
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bankaccounts/" .
                $AccountsAccountID .
                "/statement/" .
                $StatementsStatementID .
                "?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [
            $this->replaceVariables("Authorization") => $this->replaceVariables(
                "Zoho-authtoken {{ACCESS_TOKEN}}"
            ),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("DELETE", $url, $options);
    }
}
