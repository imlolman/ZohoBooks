<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class TimeEntries extends BaseClass
{
    /**
     * Log time entries
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function log_time_entries($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries?organization_id={{ORGANIZATION_ID}}"
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
     * List time entries.
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_time_entries()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries?organization_id={{ORGANIZATION_ID}}"
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
     * Delete time entries
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * Headers:
     */
    public function delete_time_entries()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries?organization_id={{ORGANIZATION_ID}}"
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
     * Update time entry
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries/${time_entry_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $timeentryid
     * Headers:
     * @param array $data = []
     */
    public function update_time_entry($timeentryid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries/" .
                $timeentryid .
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
     * Get a time entry
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries/${time_entry_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $timeentryid
     * Headers:
     */
    public function get_a_time_entry($timeentryid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries/" .
                $timeentryid .
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
     * Delete time entry
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries/${time_entry_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $timeentryid
     * Headers:
     */
    public function delete_time_entry($timeentryid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries/" .
                $timeentryid .
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
     * Start timer
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries/${time_entry_id}/timer/start?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $timeentryid
     * Headers:
     * @param array $data = []
     */
    public function start_timer($timeentryid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries/" .
                $timeentryid .
                "/timer/start?organization_id={{ORGANIZATION_ID}}"
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
     * Stop timer
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries/timer/stop?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function stop_timer($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries/timer/stop?organization_id={{ORGANIZATION_ID}}"
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
     * Get timer
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries/runningtimer/me?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function get_timer()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/projects/timeentries/runningtimer/me?organization_id={{ORGANIZATION_ID}}"
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
