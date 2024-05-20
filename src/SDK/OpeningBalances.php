<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class OpeningBalances extends BaseClass
{
    /**
     * Create opening balance
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/settings/openingbalances?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_opening_balance($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/settings/openingbalances?organization_id={{ORGANIZATION_ID}}"
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
     * Update opening balance
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/settings/openingbalances?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * Headers:
     * @param array $data = []
     */
    public function update_opening_balance($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/settings/openingbalances?organization_id={{ORGANIZATION_ID}}"
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
     * Get opening balance
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/settings/openingbalances?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function get_opening_balance()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/settings/openingbalances?organization_id={{ORGANIZATION_ID}}"
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
     * Delete opening balance
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/settings/openingbalances?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * Headers:
     */
    public function delete_opening_balance()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/settings/openingbalances?organization_id={{ORGANIZATION_ID}}"
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
