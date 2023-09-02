<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class BankRules extends BaseClass
{
    /**
     * Create a rule
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/bankaccounts/rules?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_rule($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/bankaccounts/rules?organization_id={{ORGANIZATION_ID}}"
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
     * Get Rules List
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/bankaccounts/rules?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function get_rules_list()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/bankaccounts/rules?organization_id={{ORGANIZATION_ID}}"
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
     * Update a rule
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/bankaccounts/rules/${rule_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $ruleid
     * Headers:
     * @param array $data = []
     */
    public function update_a_rule($ruleid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/bankaccounts/rules/" .
                $ruleid .
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
     * Get a rule
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/bankaccounts/rules/${rule_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $ruleid
     * Headers:
     */
    public function get_a_rule($ruleid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/bankaccounts/rules/" .
                $ruleid .
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
     * Delete a rule
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/bankaccounts/rules/${rule_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $ruleid
     * Headers:
     */
    public function delete_a_rule($ruleid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/bankaccounts/rules/" .
                $ruleid .
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
