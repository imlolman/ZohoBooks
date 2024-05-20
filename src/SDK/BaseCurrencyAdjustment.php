<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class BaseCurrencyAdjustment extends BaseClass
{
    /**
     * Create a base currency adjustment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/basecurrencyadjustment?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_base_currency_adjustment($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/basecurrencyadjustment?organization_id={{ORGANIZATION_ID}}"
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
     * List base currency adjustment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/basecurrencyadjustment?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_base_currency_adjustment()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/basecurrencyadjustment?organization_id={{ORGANIZATION_ID}}"
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
     * Get a base currency adjustment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/basecurrencyadjustment/${base_currency_adjustment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $basecurrencyadjustmentid
     * Headers:
     */
    public function get_a_base_currency_adjustment($basecurrencyadjustmentid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/basecurrencyadjustment/" .
                $basecurrencyadjustmentid .
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
     * Delete a base currency adjustment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/basecurrencyadjustment/${base_currency_adjustment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $basecurrencyadjustmentid
     * Headers:
     */
    public function delete_a_base_currency_adjustment($basecurrencyadjustmentid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/basecurrencyadjustment/" .
                $basecurrencyadjustmentid .
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
     * List account details for base currency adjustment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/basecurrencyadjustment/accounts?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_account_details_for_base_currency_adjustment()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/basecurrencyadjustment/accounts?organization_id={{ORGANIZATION_ID}}"
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
