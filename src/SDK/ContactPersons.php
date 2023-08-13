<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class ContactPersons extends BaseClass
{
    /**
     * Create a Contact Persons
     * URL: https://books.zoho.com/api/v3/contacts/contactpersons?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function create_a_contact_persons($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/contactpersons?organization_id={{ORGANIZATION_ID}}"
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
     * List of Contact Persons
     * URL: https://books.zoho.com/api/v3/contacts/contactpersons?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     *  - Accept-Language: application/json
     */
    public function list_of_contact_persons()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/contactpersons?organization_id={{ORGANIZATION_ID}}"
        );
        $options = [];
        $options["headers"] = [
            $this->replaceVariables("Authorization") => $this->replaceVariables(
                "Zoho-authtoken {{ACCESS_TOKEN}}"
            ),
            $this->replaceVariables(
                "Accept-Language"
            ) => $this->replaceVariables("application/json"),
        ];
        $options["query"] = [
            $this->replaceVariables(
                "organization_id"
            ) => $this->replaceVariables("{{ORGANIZATION_ID}}"),
        ];
        return $this->executeRequest("GET", $url, $options);
    }
}
