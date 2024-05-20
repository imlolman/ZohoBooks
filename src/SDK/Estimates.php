<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Estimates extends BaseClass
{
    /**
     * Create an Estimate
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_an_estimate($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates?organization_id={{ORGANIZATION_ID}}"
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
     * List estimates
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_estimates()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates?organization_id={{ORGANIZATION_ID}}"
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
     * Update an Estimate
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $estimateid
     * Headers:
     * @param array $data = []
     */
    public function update_an_estimate($estimateid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
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
     * Get an estimate
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $estimateid
     * Headers:
     */
    public function get_an_estimate($estimateid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
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
     * Delete an Estimate
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $estimateid
     * Headers:
     */
    public function delete_an_estimate($estimateid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
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
     * Mark an estimate as sent
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}/status/sent?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $estimateid
     * Headers:
     * @param array $data = []
     */
    public function mark_an_estimate_as_sent($estimateid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
                "/status/sent?organization_id={{ORGANIZATION_ID}}"
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
     * Mark an estimate as accepted
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}/status/accepted?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $estimateid
     * Headers:
     * @param array $data = []
     */
    public function mark_an_estimate_as_accepted($estimateid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
                "/status/accepted?organization_id={{ORGANIZATION_ID}}"
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
     * Mark an estimate as declined
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}/status/declined?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $estimateid
     * Headers:
     * @param array $data = []
     */
    public function mark_an_estimate_as_declined($estimateid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
                "/status/declined?organization_id={{ORGANIZATION_ID}}"
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
     * Submit an estimate for approval
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}/submit?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $estimateid
     * Headers:
     * @param array $data = []
     */
    public function submit_an_estimate_for_approval($estimateid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
                "/submit?organization_id={{ORGANIZATION_ID}}"
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
     * Approve an estimate.
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}/approve?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $estimateid
     * Headers:
     * @param array $data = []
     */
    public function approve_an_estimate($estimateid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
                "/approve?organization_id={{ORGANIZATION_ID}}"
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
     * Email an estimate
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}/email?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $estimateid
     * Headers:
     * @param array $data = []
     */
    public function email_an_estimate($estimateid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
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
     * Get estimate email content
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}/email?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $estimateid
     * Headers:
     */
    public function get_estimate_email_content($estimateid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
                "/email?organization_id={{ORGANIZATION_ID}}"
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
     * Email multiple estimates
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/email?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function email_multiple_estimates($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/email?organization_id={{ORGANIZATION_ID}}"
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
     * Bulk export estimates
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/pdf?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function bulk_export_estimates()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/pdf?organization_id={{ORGANIZATION_ID}}"
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
     * Bulk print estimates
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/print?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function bulk_print_estimates()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/print?organization_id={{ORGANIZATION_ID}}"
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
     * Update billing address
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}/address/billing?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $estimateid
     * Headers:
     * @param array $data = []
     */
    public function update_billing_address($estimateid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
                "/address/billing?organization_id={{ORGANIZATION_ID}}"
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
     * Update shipping address
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}/address/shipping?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $estimateid
     * Headers:
     * @param array $data = []
     */
    public function update_shipping_address($estimateid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
                "/address/shipping?organization_id={{ORGANIZATION_ID}}"
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
     * List estimate template
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/templates?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_estimate_template()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/templates?organization_id={{ORGANIZATION_ID}}"
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
     * Update estimate template
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}/templates/${template_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $estimateid
     * @param $templateid
     * Headers:
     * @param array $data = []
     */
    public function update_estimate_template(
        $estimateid,
        $templateid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
                "/templates/" .
                $templateid .
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
     * Add Comments
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $estimateid
     * Headers:
     * @param array $data = []
     */
    public function add_comments($estimateid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
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
     * List estimate comments & history
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $estimateid
     * Headers:
     */
    public function list_estimate_comments_and_history($estimateid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
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
     * Update comment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}/comments/${comment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $estimateid
     * @param $commentid
     * Headers:
     * @param array $data = []
     */
    public function update_comment($estimateid, $commentid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
                "/comments/" .
                $commentid .
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
     * Delete a comment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/${estimate_id}/comments/${comment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $estimateid
     * @param $commentid
     * Headers:
     */
    public function delete_a_comment($estimateid, $commentid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/estimates/" .
                $estimateid .
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
