<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Bills extends BaseClass
{
    /**
     * Create a bill
     * URL: https://books.zoho.com/api/v3/bills?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_bill($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills?organization_id={{ORGANIZATION_ID}}"
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
     * List bills
     * URL: https://books.zoho.com/api/v3/bills?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_bills()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills?organization_id={{ORGANIZATION_ID}}"
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
     * Update a bill
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $billid
     * Headers:
     * @param array $data = []
     */
    public function update_a_bill($billid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
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
     * Get a bill
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $billid
     * Headers:
     */
    public function get_a_bill($billid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
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
     * Delete a bill
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $billid
     * Headers:
     */
    public function delete_a_bill($billid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
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
     * Void a bill
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}/status/void?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $billid
     * Headers:
     * @param array $data = []
     */
    public function void_a_bill($billid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
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
     * Mark a bill as open
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}/status/open?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $billid
     * Headers:
     * @param array $data = []
     */
    public function mark_a_bill_as_open($billid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
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
     * Submit a bill for approval
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}/submit?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $billid
     * Headers:
     * @param array $data = []
     */
    public function submit_a_bill_for_approval($billid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
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
     * Approve a bill
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}/approve?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $billid
     * Headers:
     * @param array $data = []
     */
    public function approve_a_bill($billid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
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
     * Update billing address
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}/address/billing?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $billid
     * Headers:
     * @param array $data = []
     */
    public function update_billing_address($billid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
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
     * List bill payments
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}/payments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $billid
     * Headers:
     */
    public function list_bill_payments($billid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
                "/payments?organization_id={{ORGANIZATION_ID}}"
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
     * Apply credits
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}/credits?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $billid
     * Headers:
     * @param array $data = []
     */
    public function apply_credits($billid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
                "/credits?organization_id={{ORGANIZATION_ID}}"
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
     * Delete a payment
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}/payments/${bill_payment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $billid
     * @param $billpaymentid
     * Headers:
     */
    public function delete_a_payment($billid, $billpaymentid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
                "/payments/" .
                $billpaymentid .
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
     * Add attachment to a bill
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $billid
     * Headers:
     * @param array $data = []
     */
    public function add_attachment_to_a_bill($billid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
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
     * Get a bill attachment
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $billid
     * Headers:
     */
    public function get_a_bill_attachment($billid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
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
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $billid
     * Headers:
     */
    public function delete_an_attachment($billid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
                "/attachment?organization_id={{ORGANIZATION_ID}}"
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
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $billid
     * Headers:
     * @param array $data = []
     */
    public function add_comment($billid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
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
     * List bill comments & history
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $billid
     * Headers:
     */
    public function list_bill_comments_and_history($billid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
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
     * URL: https://books.zoho.com/api/v3/bills/${bill_id}/comments/${comment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $billid
     * @param $commentid
     * Headers:
     */
    public function delete_a_comment($billid, $commentid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/bills/" .
                $billid .
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
