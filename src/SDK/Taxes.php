<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Taxes extends BaseClass
{
    /**
     * List of taxes
     * URL: https://books.zoho.com/api/v3/settings/taxes?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function list_of_taxes()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxes?organization_id={{ORGANIZATION_ID}}"
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
     * Create a tax
     * URL: https://books.zoho.com/api/v3/settings/taxes?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function create_a_tax($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxes?organization_id={{ORGANIZATION_ID}}"
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
}
