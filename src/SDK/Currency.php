<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Currency extends BaseClass
{
    /**
     * Create a Currency
     * URL: https://books.zoho.com/api/v3/settings/currencies?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_currency($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/currencies?organization_id={{ORGANIZATION_ID}}"
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
     * List Currencies
     * URL: https://books.zoho.com/api/v3/settings/currencies?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_currencies()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/currencies?organization_id={{ORGANIZATION_ID}}"
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
     * Update a Currency
     * URL: https://books.zoho.com/api/v3/settings/currencies/${currency_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $currencyid
     * Headers:
     * @param array $data = []
     */
    public function update_a_currency($currencyid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/currencies/" .
                $currencyid .
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
     * Get a Currency
     * URL: https://books.zoho.com/api/v3/settings/currencies/${currency_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $currencyid
     * Headers:
     */
    public function get_a_currency($currencyid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/currencies/" .
                $currencyid .
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
     * Delete a currency
     * URL: https://books.zoho.com/api/v3/settings/currencies/${currency_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $currencyid
     * Headers:
     */
    public function delete_a_currency($currencyid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/currencies/" .
                $currencyid .
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
     * Create an exchange rate
     * URL: https://books.zoho.com/api/v3/settings/currencies/${currency_id}/exchangerates?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $currencyid
     * Headers:
     * @param array $data = []
     */
    public function create_an_exchange_rate($currencyid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/currencies/" .
                $currencyid .
                "/exchangerates?organization_id={{ORGANIZATION_ID}}"
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
     * List exchange rates
     * URL: https://books.zoho.com/api/v3/settings/currencies/${currency_id}/exchangerates?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $currencyid
     * Headers:
     */
    public function list_exchange_rates($currencyid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/currencies/" .
                $currencyid .
                "/exchangerates?organization_id={{ORGANIZATION_ID}}"
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
     * Update an exchange rate
     * URL: https://books.zoho.com/api/v3/settings/currencies/${currency_id}/exchangerates/${exchange_rate_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $currencyid
     * @param $exchangerateid
     * Headers:
     * @param array $data = []
     */
    public function update_an_exchange_rate(
        $currencyid,
        $exchangerateid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/currencies/" .
                $currencyid .
                "/exchangerates/" .
                $exchangerateid .
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
     * Get an exchange rate.
     * URL: https://books.zoho.com/api/v3/settings/currencies/${currency_id}/exchangerates/${exchange_rate_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $currencyid
     * @param $exchangerateid
     * Headers:
     */
    public function get_an_exchange_rate($currencyid, $exchangerateid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/currencies/" .
                $currencyid .
                "/exchangerates/" .
                $exchangerateid .
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
     * Delete an exchage rate
     * URL: https://books.zoho.com/api/v3/settings/currencies/${currency_id}/exchangerates/${exchange_rate_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $currencyid
     * @param $exchangerateid
     * Headers:
     */
    public function delete_an_exchage_rate($currencyid, $exchangerateid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/currencies/" .
                $currencyid .
                "/exchangerates/" .
                $exchangerateid .
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
