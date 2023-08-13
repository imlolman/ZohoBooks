<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Contacts extends BaseClass
{
    /**
     * Create a Contact
     * URL: https://books.zoho.com/api/v3/contacts?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_contact($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts?organization_id={{ORGANIZATION_ID}}"
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
     * List Contacts
     * URL: https://books.zoho.com/api/v3/contacts?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_contacts()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts?organization_id={{ORGANIZATION_ID}}"
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
     * Update a Contact
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $contactid
     * Headers:
     * @param array $data = []
     */
    public function update_a_contact($contactid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
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
     * Get Contact
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $contactid
     * Headers:
     */
    public function get_contact($contactid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
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
     * Delete a Contact
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $contactid
     * Headers:
     */
    public function delete_a_contact($contactid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
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
     * Mark as Active
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}/active?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $contactid
     * Headers:
     * @param array $data = []
     */
    public function mark_as_active($contactid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
                "/active?organization_id={{ORGANIZATION_ID}}"
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
     * Mark as Inactive
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}/inactive?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $contactid
     * Headers:
     * @param array $data = []
     */
    public function mark_as_inactive($contactid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
                "/inactive?organization_id={{ORGANIZATION_ID}}"
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
     * Enable Portal Access
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}/portal/enable?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $contactid
     * Headers:
     * @param array $data = []
     */
    public function enable_portal_access($contactid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
                "/portal/enable?organization_id={{ORGANIZATION_ID}}"
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
     * Enable Payment Reminders
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}/paymentreminder/enable?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $contactid
     * Headers:
     * @param array $data = []
     */
    public function enable_payment_reminders($contactid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
                "/paymentreminder/enable?organization_id={{ORGANIZATION_ID}}"
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
     * Disable Payment Reminders
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}/paymentreminder/disable?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $contactid
     * Headers:
     * @param array $data = []
     */
    public function disable_payment_reminders($contactid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
                "/paymentreminder/disable?organization_id={{ORGANIZATION_ID}}"
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
     * Email Statement
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}/statements/email?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $contactid
     * Headers:
     * @param array $data = []
     */
    public function email_statement($contactid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
                "/statements/email?organization_id={{ORGANIZATION_ID}}"
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
     * Get Statement Mail Content
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}/statements/email?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $contactid
     * Headers:
     */
    public function get_statement_mail_content($contactid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
                "/statements/email?organization_id={{ORGANIZATION_ID}}"
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
     * Email Contact
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}/email?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $contactid
     * Headers:
     * @param array $data = []
     */
    public function email_contact($contactid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
                "/email?organization_id={{ORGANIZATION_ID}}"
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
     * List Comments
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $contactid
     * Headers:
     */
    public function list_comments($contactid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
                "/comments?organization_id={{ORGANIZATION_ID}}"
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
     * Add Additional Address
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}/address?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $contactid
     * Headers:
     * @param array $data = []
     */
    public function add_additional_address($contactid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
                "/address?organization_id={{ORGANIZATION_ID}}"
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
     * Get Contact Addresses
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}/address?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $contactid
     * Headers:
     */
    public function get_contact_addresses($contactid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
                "/address?organization_id={{ORGANIZATION_ID}}"
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
     * Edit Additional Address
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}/address/${address_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $contactid
     * @param $addressid
     * Headers:
     * @param array $data = []
     */
    public function edit_additional_address($contactid, $addressid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
                "/address/" .
                $addressid .
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
     * Delete Additional Address
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}/address/${address_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $contactid
     * @param $addressid
     * Headers:
     */
    public function delete_additional_address($contactid, $addressid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
                "/address/" .
                $addressid .
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
     * List Refunds
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}/refunds?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $contactid
     * Headers:
     */
    public function list_refunds($contactid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
                "/refunds?organization_id={{ORGANIZATION_ID}}"
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
     * Track 1099
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}/track1099?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $contactid
     * Headers:
     * @param array $data = []
     */
    public function track_1099($contactid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
                "/track1099?organization_id={{ORGANIZATION_ID}}"
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
     * Untrack 1099
     * URL: https://books.zoho.com/api/v3/contacts/${contact_id}/untrack1099?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $contactid
     * Headers:
     * @param array $data = []
     */
    public function untrack_1099($contactid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/contacts/" .
                $contactid .
                "/untrack1099?organization_id={{ORGANIZATION_ID}}"
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
