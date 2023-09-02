<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class VendorCredits extends BaseClass
{
    /**
     * Create a vendor credit
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_vendor_credit($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits?organization_id={{ORGANIZATION_ID}}"
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
     * List vendor credits
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_vendor_credits()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits?organization_id={{ORGANIZATION_ID}}"
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
     * Update vendor credit
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $vendorcreditid
     * Headers:
     * @param array $data = []
     */
    public function update_vendor_credit($vendorcreditid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
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
     * Get vendor credit
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $vendorcreditid
     * Headers:
     */
    public function get_vendor_credit($vendorcreditid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
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
     * Delete vendor credit
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $vendorcreditid
     * Headers:
     */
    public function delete_vendor_credit($vendorcreditid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
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
     * Convert to open
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}/status/open?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $vendorcreditid
     * Headers:
     * @param array $data = []
     */
    public function convert_to_open($vendorcreditid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
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
     * Void vendor credit
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}/status/void?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $vendorcreditid
     * Headers:
     * @param array $data = []
     */
    public function void_vendor_credit($vendorcreditid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
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
     * Submit a Vendor credit for approval
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}/submit?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $vendorcreditid
     * Headers:
     * @param array $data = []
     */
    public function submit_a_vendor_credit_for_approval(
        $vendorcreditid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
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
     * Approve a Vendor credit
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}/approve?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $vendorcreditid
     * Headers:
     * @param array $data = []
     */
    public function approve_a_vendor_credit($vendorcreditid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
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
     * Apply credits to a bill
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}/bills?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $vendorcreditid
     * Headers:
     * @param array $data = []
     */
    public function apply_credits_to_a_bill($vendorcreditid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
                "/bills?organization_id={{ORGANIZATION_ID}}"
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
     * List bills credited
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}/bills?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $vendorcreditid
     * Headers:
     */
    public function list_bills_credited($vendorcreditid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
                "/bills?organization_id={{ORGANIZATION_ID}}"
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
     * Delete bills credited
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}/bills/${vendor_credit_bill_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $vendorcreditid
     * @param $vendorcreditbillid
     * Headers:
     */
    public function delete_bills_credited($vendorcreditid, $vendorcreditbillid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
                "/bills/" .
                $vendorcreditbillid .
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
     * Refund a vendor credit
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}/refunds?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $vendorcreditid
     * Headers:
     * @param array $data = []
     */
    public function refund_a_vendor_credit($vendorcreditid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
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
     * List refunds of a vendor credit
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}/refunds?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $vendorcreditid
     * Headers:
     */
    public function list_refunds_of_a_vendor_credit($vendorcreditid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
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
     * Update vendor credit refund
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}/refunds/${vendor_credit_refund_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $vendorcreditid
     * @param $vendorcreditrefundid
     * Headers:
     * @param array $data = []
     */
    public function update_vendor_credit_refund(
        $vendorcreditid,
        $vendorcreditrefundid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
                "/refunds/" .
                $vendorcreditrefundid .
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
     * Get vendor credit refund
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}/refunds/${vendor_credit_refund_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $vendorcreditid
     * @param $vendorcreditrefundid
     * Headers:
     */
    public function get_vendor_credit_refund(
        $vendorcreditid,
        $vendorcreditrefundid
    ) {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
                "/refunds/" .
                $vendorcreditrefundid .
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
     * Delete vendor credit refund
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}/refunds/${vendor_credit_refund_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $vendorcreditid
     * @param $vendorcreditrefundid
     * Headers:
     */
    public function delete_vendor_credit_refund(
        $vendorcreditid,
        $vendorcreditrefundid
    ) {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
                "/refunds/" .
                $vendorcreditrefundid .
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
     * List vendor credit refunds
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/refunds?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_vendor_credit_refunds()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/refunds?organization_id={{ORGANIZATION_ID}}"
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
     * Add a comment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $vendorcreditid
     * Headers:
     * @param array $data = []
     */
    public function add_a_comment($vendorcreditid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
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
     * List vendor credit comments & history
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $vendorcreditid
     * Headers:
     */
    public function list_vendor_credit_comments_and_history($vendorcreditid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
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
     * Delete a comment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/${vendor_credit_id}/comments/${comment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $vendorcreditid
     * @param $commentid
     * Headers:
     */
    public function delete_a_comment($vendorcreditid, $commentid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/vendorcredits/" .
                $vendorcreditid .
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
