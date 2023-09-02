<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Organizations extends BaseClass
{
    /**
     * Create an organization
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/organizations?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_an_organization($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/organizations?organization_id={{ORGANIZATION_ID}}"
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
     * Get organization details
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/organizations?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function get_organization_details()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/organizations?organization_id={{ORGANIZATION_ID}}"
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
     * Delete an organization
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/organizations?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * Headers:
     */
    public function delete_an_organization()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/organizations?organization_id={{ORGANIZATION_ID}}"
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
     * Get organization
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/organizations/${organization_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $organizationid
     * Headers:
     */
    public function get_organization($organizationid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/organizations/" .
                $organizationid .
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
     * Update organization
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/organizations/${organization_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $organizationid
     * Headers:
     * @param array $data = []
     */
    public function update_organization($organizationid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/organizations/" .
                $organizationid .
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
}
