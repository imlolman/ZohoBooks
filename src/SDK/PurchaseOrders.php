<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class PurchaseOrders extends BaseClass
{
    /**
     * Create a purchase order
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_purchase_order($data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders?organization_id={{ORGANIZATION_ID}}"
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
     * List purchase orders
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_purchase_orders()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders?organization_id={{ORGANIZATION_ID}}"
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
     * Update a purchase order
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchase_order_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $purchaseorderid
     * Headers:
     * @param array $data = []
     */
    public function update_a_purchase_order($purchaseorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
     * Get a purchase order
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchase_order_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $purchaseorderid
     * Headers:
     */
    public function get_a_purchase_order($purchaseorderid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
     * Delete purchase order
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchase_order_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $purchaseorderid
     * Headers:
     */
    public function delete_purchase_order($purchaseorderid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
     * Mark a purchase order as open
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/status/open?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $purchaseorderid
     * Headers:
     * @param array $data = []
     */
    public function mark_a_purchase_order_as_open($purchaseorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
     * Mark as billed
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/status/billed?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $purchaseorderid
     * Headers:
     * @param array $data = []
     */
    public function mark_as_billed($purchaseorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
                "/status/billed?organization_id={{ORGANIZATION_ID}}"
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
     * Cancel a purchase order
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/status/cancelled?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $purchaseorderid
     * Headers:
     * @param array $data = []
     */
    public function cancel_a_purchase_order($purchaseorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
                "/status/cancelled?organization_id={{ORGANIZATION_ID}}"
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
     * Submit a purchase order for approval
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/submit?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $purchaseorderid
     * Headers:
     * @param array $data = []
     */
    public function submit_a_purchase_order_for_approval(
        $purchaseorderid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
     * Approve a purchase order
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/approve?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $purchaseorderid
     * Headers:
     * @param array $data = []
     */
    public function approve_a_purchase_order($purchaseorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
     * Email a purchase order
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/email?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $purchaseorderid
     * Headers:
     * @param array $data = []
     */
    public function email_a_purchase_order($purchaseorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
     * Get purchase order email content
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/email?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $purchaseorderid
     * Headers:
     */
    public function get_purchase_order_email_content($purchaseorderid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/address/billing?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $purchaseorderid
     * Headers:
     * @param array $data = []
     */
    public function update_billing_address($purchaseorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
     * List purchase order templates
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/templates?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_purchase_order_templates()
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/templates?organization_id={{ORGANIZATION_ID}}"
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
     * Update purchase order template
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/templates/${template_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $purchaseorderid
     * @param $templateid
     * Headers:
     * @param array $data = []
     */
    public function update_purchase_order_template(
        $purchaseorderid,
        $templateid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
     * Add attachment to a purchase order
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $purchaseorderid
     * Headers:
     * @param array $data = []
     */
    public function add_attachment_to_a_purchase_order(
        $purchaseorderid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
     * Update attachment preference
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $purchaseorderid
     * Headers:
     * @param array $data = []
     */
    public function update_attachment_preference($purchaseorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
        return $this->executeRequest("PUT", $url, $options);
    }

    /**
     * Get a purchase order attachment
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $purchaseorderid
     * Headers:
     */
    public function get_a_purchase_order_attachment($purchaseorderid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $purchaseorderid
     * Headers:
     */
    public function delete_an_attachment($purchaseorderid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $purchaseorderid
     * Headers:
     * @param array $data = []
     */
    public function add_comment($purchaseorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
     * List purchase order comments & history
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $purchaseorderid
     * Headers:
     */
    public function list_purchase_order_comments_and_history($purchaseorderid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/comments/${comment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $purchaseorderid
     * @param $commentid
     * Headers:
     * @param array $data = []
     */
    public function update_comment($purchaseorderid, $commentid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
     * URL: https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/${purchaseorder_id}/comments/${comment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $purchaseorderid
     * @param $commentid
     * Headers:
     */
    public function delete_a_comment($purchaseorderid, $commentid)
    {
        $url = $this->replaceVariables(
            "https://{{ZOHO_BOOKS_DOMAIN}}/api/v3/purchaseorders/" .
                $purchaseorderid .
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
