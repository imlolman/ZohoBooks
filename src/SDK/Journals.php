<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Journals extends BaseClass
{
    /**
     * Create a journal
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_journal($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals?organization_id={{ORGANIZATION_ID}}"
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
     * Get journal list
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function get_journal_list()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals?organization_id={{ORGANIZATION_ID}}"
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
     * Update a journal
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals/${journal_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $journalid
     * Headers:
     * @param array $data = []
     */
    public function update_a_journal($journalid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals/" .
                $journalid .
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
     * Get journal
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals/${journal_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $journalid
     * Headers:
     */
    public function get_journal($journalid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals/" .
                $journalid .
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
     * Delete a journal
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals/${journal_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $journalid
     * Headers:
     */
    public function delete_a_journal($journalid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals/" .
                $journalid .
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
     * Mark a journal as published
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals/${journal_id}/status/publish?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $journalid
     * Headers:
     * @param array $data = []
     */
    public function mark_a_journal_as_published($journalid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals/" .
                $journalid .
                "/status/publish?organization_id={{ORGANIZATION_ID}}"
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
     * Add attachment to a journal
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals/${journal_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $journalid
     * Headers:
     * @param array $data = []
     */
    public function add_attachment_to_a_journal($journalid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals/" .
                $journalid .
                "/attachment?organization_id={{ORGANIZATION_ID}}"
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
     * Add comment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals/${jounral_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $jounralid
     * Headers:
     * @param array $data = []
     */
    public function add_comment($jounralid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals/" .
                $jounralid .
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
     * Delete a comment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals/${jounral_id}/comments/${comment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $jounralid
     * @param $commentid
     * Headers:
     */
    public function delete_a_comment($jounralid, $commentid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/journals/" .
                $jounralid .
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
}
