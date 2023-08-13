<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class RetainerInvoices extends BaseClass
{
    /**
     * Create a retainerinvoice
     * URL: https://books.zoho.com/api/v3/retainerinvoices?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_retainerinvoice($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices?organization_id={{ORGANIZATION_ID}}"
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
     * List a retainer invoices
     * URL: https://books.zoho.com/api/v3/retainerinvoices?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_a_retainer_invoices()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices?organization_id={{ORGANIZATION_ID}}"
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
     * update a retainerinvoice
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${retainerinvoice_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $retainerinvoiceid
     * Headers:
     * @param array $data = []
     */
    public function update_a_retainerinvoice($retainerinvoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $retainerinvoiceid .
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
     * Get a retainer invoice
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${retainerinvoice_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $retainerinvoiceid
     * Headers:
     */
    public function get_a_retainer_invoice($retainerinvoiceid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $retainerinvoiceid .
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
     * Delete a retainer invoice
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${retainerinvoice_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $retainerinvoiceid
     * Headers:
     */
    public function delete_a_retainer_invoice($retainerinvoiceid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $retainerinvoiceid .
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
     * Mark a retainer invoice as sent
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${retainerinvoice_id}/status/sent?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $retainerinvoiceid
     * Headers:
     * @param array $data = []
     */
    public function mark_a_retainer_invoice_as_sent(
        $retainerinvoiceid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $retainerinvoiceid .
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
     * Update retainer invoice template
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${retainerinvoice_id}/templates/${template_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $retainerinvoiceid
     * @param $templateid
     * Headers:
     * @param array $data = []
     */
    public function update_retainer_invoice_template(
        $retainerinvoiceid,
        $templateid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $retainerinvoiceid .
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
     * Void a retainer invoice
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${retainerinvoice_id}/status/void?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $retainerinvoiceid
     * Headers:
     * @param array $data = []
     */
    public function void_a_retainer_invoice($retainerinvoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $retainerinvoiceid .
                "/status/void?organization_id={{ORGANIZATION_ID}}"
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
     * Mark as draft
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${reatinerinvoice_id}/status/draft?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $reatinerinvoiceid
     * Headers:
     * @param array $data = []
     */
    public function mark_as_draft($reatinerinvoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $reatinerinvoiceid .
                "/status/draft?organization_id={{ORGANIZATION_ID}}"
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
     * Submit a retainer invoice for approval
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${reatinerinvoice_id}/submit?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $reatinerinvoiceid
     * Headers:
     * @param array $data = []
     */
    public function submit_a_retainer_invoice_for_approval(
        $reatinerinvoiceid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $reatinerinvoiceid .
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
     * Approve a retainer invoice.
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${reatinerinvoice_id}/approve?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $reatinerinvoiceid
     * Headers:
     * @param array $data = []
     */
    public function approve_a_retainer_invoice($reatinerinvoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $reatinerinvoiceid .
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
     * Email a retainer invoice
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${retainerinvoice_id}/email?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $retainerinvoiceid
     * Headers:
     * @param array $data = []
     */
    public function email_a_retainer_invoice($retainerinvoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $retainerinvoiceid .
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
     * Get retainer invoice email content
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${retainerinvoice_id}/email?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $retainerinvoiceid
     * Headers:
     */
    public function get_retainer_invoice_email_content($retainerinvoiceid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $retainerinvoiceid .
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
     * Update billing address
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${retainerinvoice_id}/address/billing?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $retainerinvoiceid
     * Headers:
     * @param array $data = []
     */
    public function update_billing_address($retainerinvoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $retainerinvoiceid .
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
     * List retainer invoice templates
     * URL: https://books.zoho.com/api/v3/retainerinvoices/templates?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_retainer_invoice_templates()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/templates?organization_id={{ORGANIZATION_ID}}"
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
     * Add attachment to a retainer invoice
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${retainerinvoice_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $retainerinvoiceid
     * Headers:
     * @param array $data = []
     */
    public function add_attachment_to_a_retainer_invoice(
        $retainerinvoiceid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $retainerinvoiceid .
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
     * Get a retainer invoice attachment
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${retainerinvoice_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $retainerinvoiceid
     * Headers:
     */
    public function get_a_retainer_invoice_attachment($retainerinvoiceid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $retainerinvoiceid .
                "/attachment?organization_id={{ORGANIZATION_ID}}"
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
     * Delete an attachment
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${retainerinvoice_id}/documents/${document_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $retainerinvoiceid
     * @param $documentid
     * Headers:
     */
    public function delete_an_attachment($retainerinvoiceid, $documentid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $retainerinvoiceid .
                "/documents/" .
                $documentid .
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
     * Add comment
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${retainerinvoice_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $retainerinvoiceid
     * Headers:
     * @param array $data = []
     */
    public function add_comment($retainerinvoiceid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $retainerinvoiceid .
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
     * List retainer invoice comments & history
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${retainerinvoice_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $retainerinvoiceid
     * Headers:
     */
    public function list_retainer_invoice_comments_and_history(
        $retainerinvoiceid
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $retainerinvoiceid .
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
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${retainerinvoice_id}/comments/${comment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $retainerinvoiceid
     * @param $commentid
     * Headers:
     * @param array $data = []
     */
    public function update_comment($retainerinvoiceid, $commentid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $retainerinvoiceid .
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
     * URL: https://books.zoho.com/api/v3/retainerinvoices/${retainerinvoice_id}/comments/${comment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $retainerinvoiceid
     * @param $commentid
     * Headers:
     */
    public function delete_a_comment($retainerinvoiceid, $commentid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/retainerinvoices/" .
                $retainerinvoiceid .
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
