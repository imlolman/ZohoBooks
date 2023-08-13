<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Users extends BaseClass
{
    /**
     * Create a user
     * URL: https://books.zoho.com/api/v3/users?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_user($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/users?organization_id={{ORGANIZATION_ID}}"
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
     * List Users
     * URL: https://books.zoho.com/api/v3/users?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_users()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/users?organization_id={{ORGANIZATION_ID}}"
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
     * Update a user
     * URL: https://books.zoho.com/api/v3/users/${user_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $userid
     * Headers:
     * @param array $data = []
     */
    public function update_a_user($userid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/users/" .
                $userid .
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
     * Get a user
     * URL: https://books.zoho.com/api/v3/users/${user_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $userid
     * Headers:
     */
    public function get_a_user($userid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/users/" .
                $userid .
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
     * Delete a user
     * URL: https://books.zoho.com/api/v3/users/${user_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $userid
     * Headers:
     */
    public function delete_a_user($userid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/users/" .
                $userid .
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
     * Get current user
     * URL: https://books.zoho.com/api/v3/users/me?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function get_current_user()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/users/me?organization_id={{ORGANIZATION_ID}}"
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
     * Invite a user
     * URL: https://books.zoho.com/api/v3/users/${user_id}/invite?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $userid
     * Headers:
     * @param array $data = []
     */
    public function invite_a_user($userid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/users/" .
                $userid .
                "/invite?organization_id={{ORGANIZATION_ID}}"
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
     * Mark user as active
     * URL: https://books.zoho.com/api/v3/users/${user_id}/active?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $userid
     * Headers:
     * @param array $data = []
     */
    public function mark_user_as_active($userid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/users/" .
                $userid .
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
     * Mark user as inactive
     * URL: https://books.zoho.com/api/v3/users/${user_id}/inactive?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $userid
     * Headers:
     * @param array $data = []
     */
    public function mark_user_as_inactive($userid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/users/" .
                $userid .
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
}
