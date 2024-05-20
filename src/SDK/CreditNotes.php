<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class CreditNotes extends BaseClass
{
    /**
     * Create a credit note
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_credit_note($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes?organization_id={{ORGANIZATION_ID}}"
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
     * List all Credit Notes
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_all_credit_notes()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes?organization_id={{ORGANIZATION_ID}}"
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
     * Update a credit note
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $creditnoteid
     * Headers:
     * @param array $data = []
     */
    public function update_a_credit_note($creditnoteid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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
     * Get a credit note
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $creditnoteid
     * Headers:
     */
    public function get_a_credit_note($creditnoteid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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
     * Delete a credit note
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $creditnoteid
     * Headers:
     */
    public function delete_a_credit_note($creditnoteid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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
     * Email a credit note
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/email?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $creditnoteid
     * Headers:
     * @param array $data = []
     */
    public function email_a_credit_note($creditnoteid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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
     * Get email content
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/email?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $creditnoteid
     * Headers:
     */
    public function get_email_content($creditnoteid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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
     * Void a Credit Note
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/status/void?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $creditnoteid
     * Headers:
     * @param array $data = []
     */
    public function void_a_credit_note($creditnoteid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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
     * Convert Credit Note to Draft.
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/status/draft?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $creditnoteid
     * Headers:
     * @param array $data = []
     */
    public function convert_credit_note_to_draft($creditnoteid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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
     * Convert to Open
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/status/open?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $creditnoteid
     * Headers:
     * @param array $data = []
     */
    public function convert_to_open($creditnoteid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
                "/status/open?organization_id={{ORGANIZATION_ID}}"
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
     * Submit a credit note for approval
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/submit?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $creditnoteid
     * Headers:
     * @param array $data = []
     */
    public function submit_a_credit_note_for_approval($creditnoteid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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
     * Approve a credit note.
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/approve?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $creditnoteid
     * Headers:
     * @param array $data = []
     */
    public function approve_a_credit_note($creditnoteid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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
     * Email history
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/emailhistory?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $creditnoteid
     * Headers:
     */
    public function email_history($creditnoteid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
                "/emailhistory?organization_id={{ORGANIZATION_ID}}"
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
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/address/billing?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $creditnoteid
     * Headers:
     * @param array $data = []
     */
    public function update_billing_address($creditnoteid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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
     * Update Shipping address
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/address/shipping?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $creditnoteid
     * Headers:
     * @param array $data = []
     */
    public function update_shipping_address($creditnoteid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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
     * List credit note template
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/templates?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_credit_note_template()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/templates?organization_id={{ORGANIZATION_ID}}"
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
     * Update a credit note template
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/templates/${template_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $creditnoteid
     * @param $templateid
     * Headers:
     * @param array $data = []
     */
    public function update_a_credit_note_template(
        $creditnoteid,
        $templateid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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
     * Credit to an invoice
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/invoices?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $creditnoteid
     * Headers:
     * @param array $data = []
     */
    public function credit_to_an_invoice($creditnoteid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
                "/invoices?organization_id={{ORGANIZATION_ID}}"
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
     * List invoices credited
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/invoices?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $creditnoteid
     * Headers:
     */
    public function list_invoices_credited($creditnoteid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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

    /**
     * Delete invoices credited
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/invoices/${creditnote_invoice_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $creditnoteid
     * @param $creditnoteinvoiceid
     * Headers:
     */
    public function delete_invoices_credited(
        $creditnoteid,
        $creditnoteinvoiceid
    ) {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
                "/invoices/" .
                $creditnoteinvoiceid .
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
     * Add a comment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $creditnoteid
     * Headers:
     * @param array $data = []
     */
    public function add_a_comment($creditnoteid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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
     * List credit note comments & history
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $creditnoteid
     * Headers:
     */
    public function list_credit_note_comments_and_history($creditnoteid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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
     * Delete a Comment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/comments/${comment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $creditnoteid
     * @param $commentid
     * Headers:
     */
    public function delete_a_comment($creditnoteid, $commentid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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
     * List credit note refunds
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/refunds?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_credit_note_refunds()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/refunds?organization_id={{ORGANIZATION_ID}}"
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
     * Refund credit note
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/refunds?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $creditnoteid
     * Headers:
     * @param array $data = []
     */
    public function refund_credit_note($creditnoteid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
                "/refunds?organization_id={{ORGANIZATION_ID}}"
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
     * List refunds of a credit note
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/refunds?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $creditnoteid
     * Headers:
     */
    public function list_refunds_of_a_credit_note($creditnoteid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
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
     * Update credit note refund
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/refunds/${creditnote_refund_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $creditnoteid
     * @param $creditnoterefundid
     * Headers:
     * @param array $data = []
     */
    public function update_credit_note_refund(
        $creditnoteid,
        $creditnoterefundid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
                "/refunds/" .
                $creditnoterefundid .
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
     * Get credit note refund
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/refunds/${creditnote_refund_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $creditnoteid
     * @param $creditnoterefundid
     * Headers:
     */
    public function get_credit_note_refund($creditnoteid, $creditnoterefundid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
                "/refunds/" .
                $creditnoterefundid .
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
     * Delete credit note refund
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/${creditnote_id}/refunds/${creditnote_refund_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $creditnoteid
     * @param $creditnoterefundid
     * Headers:
     */
    public function delete_credit_note_refund(
        $creditnoteid,
        $creditnoterefundid
    ) {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/books/v3/creditnotes/" .
                $creditnoteid .
                "/refunds/" .
                $creditnoterefundid .
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
