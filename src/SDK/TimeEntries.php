<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class TimeEntries extends BaseClass
{
    /**
     * Create a Time Entry
     * URL: https://books.zoho.com/api/v3/projects/timeentries?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function create_a_time_entry($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/timeentries?organization_id={{ORGANIZATION_ID}}"
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
     * List of Time Entries
     * URL: https://books.zoho.com/api/v3/projects/timeentries?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function list_of_time_entries()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/projects/timeentries?organization_id={{ORGANIZATION_ID}}"
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
}
