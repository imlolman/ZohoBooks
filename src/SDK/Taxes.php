<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Taxes extends BaseClass
{
    /**
     * Create a tax
     * URL: https://books.zoho.com/api/v3/settings/taxes?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_tax($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxes?organization_id={{ORGANIZATION_ID}}"
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
     * List taxes
     * URL: https://books.zoho.com/api/v3/settings/taxes?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_taxes()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxes?organization_id={{ORGANIZATION_ID}}"
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
     * Update a tax
     * URL: https://books.zoho.com/api/v3/settings/taxes/${tax_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $taxid
     * Headers:
     * @param array $data = []
     */
    public function update_a_tax($taxid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxes/" .
                $taxid .
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
     * Get a tax
     * URL: https://books.zoho.com/api/v3/settings/taxes/${tax_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $taxid
     * Headers:
     */
    public function get_a_tax($taxid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxes/" .
                $taxid .
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
     * Delete a tax
     * URL: https://books.zoho.com/api/v3/settings/taxes/${tax_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $taxid
     * Headers:
     */
    public function delete_a_tax($taxid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxes/" .
                $taxid .
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
     * Update a tax group
     * URL: https://books.zoho.com/api/v3/settings/taxgroups/${tax_group_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $taxgroupid
     * Headers:
     * @param array $data = []
     */
    public function update_a_tax_group($taxgroupid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxgroups/" .
                $taxgroupid .
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
     * Get a tax group
     * URL: https://books.zoho.com/api/v3/settings/taxgroups/${tax_group_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $taxgroupid
     * Headers:
     */
    public function get_a_tax_group($taxgroupid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxgroups/" .
                $taxgroupid .
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
     * Delete a tax group
     * URL: https://books.zoho.com/api/v3/settings/taxgroups/${tax_group_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $taxgroupid
     * Headers:
     */
    public function delete_a_tax_group($taxgroupid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxgroups/" .
                $taxgroupid .
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
     * Create a tax group
     * URL: https://books.zoho.com/api/v3/settings/taxgroups?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_tax_group($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxgroups?organization_id={{ORGANIZATION_ID}}"
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
     * Create a tax authority [US and CA Edition only]
     * URL: https://books.zoho.com/api/v3/settings/taxauthorities?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_tax_authority__us_and_ca_edition_only_($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxauthorities?organization_id={{ORGANIZATION_ID}}"
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
     * List tax authorities [US Edition only]
     * URL: https://books.zoho.com/api/v3/settings/taxauthorities?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_tax_authorities__us_edition_only_()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxauthorities?organization_id={{ORGANIZATION_ID}}"
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
     * Update a tax authority [US and CA Edition only]
     * URL: https://books.zoho.com/api/v3/settings/taxauthorities/${tax_authority_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $taxauthorityid
     * Headers:
     * @param array $data = []
     */
    public function update_a_tax_authority__us_and_ca_edition_only_(
        $taxauthorityid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxauthorities/" .
                $taxauthorityid .
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
     * Get a tax authority [US and CA Edition only]
     * URL: https://books.zoho.com/api/v3/settings/taxauthorities/${tax_authority_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $taxauthorityid
     * Headers:
     */
    public function get_a_tax_authority__us_and_ca_edition_only_(
        $taxauthorityid
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxauthorities/" .
                $taxauthorityid .
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
     * Delete a tax authority [US and CA Edition only]
     * URL: https://books.zoho.com/api/v3/settings/taxauthorities/${tax_authority_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $taxauthorityid
     * Headers:
     */
    public function delete_a_tax_authority__us_and_ca_edition_only_(
        $taxauthorityid
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxauthorities/" .
                $taxauthorityid .
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
     * Create a tax exemption [US Edition only]
     * URL: https://books.zoho.com/api/v3/settings/taxexemptions?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_tax_exemption__us_edition_only_($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxexemptions?organization_id={{ORGANIZATION_ID}}"
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
     * List tax exemptions [US Edition only]
     * URL: https://books.zoho.com/api/v3/settings/taxexemptions?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_tax_exemptions__us_edition_only_()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxexemptions?organization_id={{ORGANIZATION_ID}}"
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
     * Update a tax exemption [US Edition only]
     * URL: https://books.zoho.com/api/v3/settings/taxexemptions/${tax_exemption_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $taxexemptionid
     * Headers:
     * @param array $data = []
     */
    public function update_a_tax_exemption__us_edition_only_(
        $taxexemptionid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxexemptions/" .
                $taxexemptionid .
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
     * Get a tax exemption [US Edition only]
     * URL: https://books.zoho.com/api/v3/settings/taxexemptions/${tax_exemption_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $taxexemptionid
     * Headers:
     */
    public function get_a_tax_exemption__us_edition_only_($taxexemptionid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxexemptions/" .
                $taxexemptionid .
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
     * Delete a tax exemption [US Edition only]
     * URL: https://books.zoho.com/api/v3/settings/taxexemptions/${tax_exemption_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $taxexemptionid
     * Headers:
     */
    public function delete_a_tax_exemption__us_edition_only_($taxexemptionid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/settings/taxexemptions/" .
                $taxexemptionid .
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
