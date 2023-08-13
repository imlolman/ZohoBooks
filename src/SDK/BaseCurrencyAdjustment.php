<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class BaseCurrencyAdjustment extends BaseClass
{
    /**
     * Create a Base Currency Adjustment
     * URL: https://books.zoho.com/api/v3/basecurrencyadjustment?organization_id={{ORGANIZATION_ID}}&account_ids=${Accounts.Account_ID}
     * Method: POST
     * @param $AccountsAccountID
     * @param $account_ids
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function create_a_base_currency_adjustment(
        $AccountsAccountID,
        $account_ids,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/basecurrencyadjustment?organization_id={{ORGANIZATION_ID}}&account_ids=" .
                $AccountsAccountID .
                ""
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
            $this->replaceVariables("account_ids") => $this->replaceVariables(
                $account_ids
            ),
        ];
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * List of Base Currency Adjustments
     * URL: https://books.zoho.com/api/v3/basecurrencyadjustment?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function list_of_base_currency_adjustments()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/basecurrencyadjustment?organization_id={{ORGANIZATION_ID}}"
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
}
