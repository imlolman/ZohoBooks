<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Tasks extends BaseClass
{
    /**
     * Add a task
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/projects/${project_id}/tasks?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $projectid
     * Headers:
     * @param array $data = []
     */
    public function add_a_task($projectid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/projects/" .
                $projectid .
                "/tasks?organization_id={{ORGANIZATION_ID}}"
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
     * List tasks
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/projects/${project_id}/tasks?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $projectid
     * Headers:
     */
    public function list_tasks($projectid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/projects/" .
                $projectid .
                "/tasks?organization_id={{ORGANIZATION_ID}}"
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
     * Update a task
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/projects/${project_id}/tasks/${task_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $projectid
     * @param $taskid
     * Headers:
     * @param array $data = []
     */
    public function update_a_task($projectid, $taskid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/projects/" .
                $projectid .
                "/tasks/" .
                $taskid .
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
     * Get a task
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/projects/${project_id}/tasks/${task_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $projectid
     * @param $taskid
     * Headers:
     */
    public function get_a_task($projectid, $taskid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/projects/" .
                $projectid .
                "/tasks/" .
                $taskid .
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
     * Delete Task
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/projects/${project_id}/tasks/${task_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $projectid
     * @param $taskid
     * Headers:
     */
    public function delete_task($projectid, $taskid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/projects/" .
                $projectid .
                "/tasks/" .
                $taskid .
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
