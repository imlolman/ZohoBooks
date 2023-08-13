<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Projects extends BaseClass
{
    /**
     * Create a project
     * URL: https://books.zoho.com/api/v3/projects?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_project($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects?organization_id={{ORGANIZATION_ID}}"
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
     * List projects
     * URL: https://books.zoho.com/api/v3/projects?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_projects()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects?organization_id={{ORGANIZATION_ID}}"
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
     * Update project
     * URL: https://books.zoho.com/api/v3/projects/${project_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $projectid
     * Headers:
     * @param array $data = []
     */
    public function update_project($projectid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/" .
                $projectid .
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
     * Get a project
     * URL: https://books.zoho.com/api/v3/projects/${project_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $projectid
     * Headers:
     */
    public function get_a_project($projectid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/" .
                $projectid .
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
     * Delete project
     * URL: https://books.zoho.com/api/v3/projects/${project_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $projectid
     * Headers:
     */
    public function delete_project($projectid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/" .
                $projectid .
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
     * Activate project
     * URL: https://books.zoho.com/api/v3/projects/${project_id}/active?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $projectid
     * Headers:
     * @param array $data = []
     */
    public function activate_project($projectid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/" .
                $projectid .
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
     * Inactivate a project
     * URL: https://books.zoho.com/api/v3/projects/${project_id}/inactive?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $projectid
     * Headers:
     * @param array $data = []
     */
    public function inactivate_a_project($projectid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/" .
                $projectid .
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
     * Clone project
     * URL: https://books.zoho.com/api/v3/projects/${project_id}/clone?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $projectid
     * Headers:
     * @param array $data = []
     */
    public function clone_project($projectid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/" .
                $projectid .
                "/clone?organization_id={{ORGANIZATION_ID}}"
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
     * Assign users
     * URL: https://books.zoho.com/api/v3/projects/${project_id}/users?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $projectid
     * Headers:
     * @param array $data = []
     */
    public function assign_users($projectid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/" .
                $projectid .
                "/users?organization_id={{ORGANIZATION_ID}}"
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
     * URL: https://books.zoho.com/api/v3/projects/${project_id}/users?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $projectid
     * Headers:
     */
    public function list_users($projectid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/" .
                $projectid .
                "/users?organization_id={{ORGANIZATION_ID}}"
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
     * Invite user
     * URL: https://books.zoho.com/api/v3/projects/${project_id}/users/invite?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $projectid
     * Headers:
     * @param array $data = []
     */
    public function invite_user($projectid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/" .
                $projectid .
                "/users/invite?organization_id={{ORGANIZATION_ID}}"
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
     * Update user
     * URL: https://books.zoho.com/api/v3/projects/${project_id}/users/${user_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $projectid
     * @param $userid
     * Headers:
     * @param array $data = []
     */
    public function update_user($projectid, $userid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/" .
                $projectid .
                "/users/" .
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
     * Get a User
     * URL: https://books.zoho.com/api/v3/projects/${project_id}/users/${user_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $projectid
     * @param $userid
     * Headers:
     */
    public function get_a_user($projectid, $userid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/" .
                $projectid .
                "/users/" .
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
     * Delete user
     * URL: https://books.zoho.com/api/v3/projects/${project_id}/users/${user_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $projectid
     * @param $userid
     * Headers:
     */
    public function delete_user($projectid, $userid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/" .
                $projectid .
                "/users/" .
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
     * Post comment
     * URL: https://books.zoho.com/api/v3/projects/${project_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $projectid
     * Headers:
     * @param array $data = []
     */
    public function post_comment($projectid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/" .
                $projectid .
                "/comments?organization_id={{ORGANIZATION_ID}}"
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
     * List comments
     * URL: https://books.zoho.com/api/v3/projects/${project_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $projectid
     * Headers:
     */
    public function list_comments($projectid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/" .
                $projectid .
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
     * Delete comment
     * URL: https://books.zoho.com/api/v3/projects/${project_id}/comments/${comment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $projectid
     * @param $commentid
     * Headers:
     */
    public function delete_comment($projectid, $commentid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/" .
                $projectid .
                "/comments/" .
                $commentid .
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
     * List invoices
     * URL: https://books.zoho.com/api/v3/projects/${project_id}/invoices?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $projectid
     * Headers:
     */
    public function list_invoices($projectid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/" .
                $projectid .
                "/invoices?organization_id={{ORGANIZATION_ID}}"
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
