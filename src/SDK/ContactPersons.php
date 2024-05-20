<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class ContactPersons extends BaseClass
{
    /**
     * Create a contact person
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/contacts/contactpersons?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_contact_person($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/contacts/contactpersons?organization_id={{ORGANIZATION_ID}}"
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
     * Update a contact person
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/contacts/contactpersons/${contact_person_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $contactpersonid
     * Headers:
     * @param array $data = []
     */
    public function update_a_contact_person($contactpersonid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/contacts/contactpersons/" .
                $contactpersonid .
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
     * Delete a contact person
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/contacts/contactpersons/${contact_person_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $contactpersonid
     * Headers:
     */
    public function delete_a_contact_person($contactpersonid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/contacts/contactpersons/" .
                $contactpersonid .
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
     * List contact persons
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/contacts/${contact_id}/contactpersons?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $contactid
     * Headers:
     */
    public function list_contact_persons($contactid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/contacts/" .
                $contactid .
                "/contactpersons?organization_id={{ORGANIZATION_ID}}"
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
     * Get a contact person
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/contacts/${contact_id}/contactpersons/${contact_person_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $contactid
     * @param $contactpersonid
     * Headers:
     */
    public function get_a_contact_person($contactid, $contactpersonid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/contacts/" .
                $contactid .
                "/contactpersons/" .
                $contactpersonid .
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
     * Mark as primary contact person
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/contacts/contactpersons/${contact_person_id}/primary?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $contactpersonid
     * Headers:
     * @param array $data = []
     */
    public function mark_as_primary_contact_person($contactpersonid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/contacts/contactpersons/" .
                $contactpersonid .
                "/primary?organization_id={{ORGANIZATION_ID}}"
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
}
