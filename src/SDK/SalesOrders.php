<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class SalesOrders extends BaseClass
{
    /**
     * Create a sales order
     * URL: https://books.zoho.com/api/v3/salesorders?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_sales_order($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders?organization_id={{ORGANIZATION_ID}}"
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
     * List sales orders
     * URL: https://books.zoho.com/api/v3/salesorders?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_sales_orders()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders?organization_id={{ORGANIZATION_ID}}"
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
     * Update a sales order
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $salesorderid
     * Headers:
     * @param array $data = []
     */
    public function update_a_sales_order($salesorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * Get a sales order
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $salesorderid
     * Headers:
     */
    public function get_a_sales_order($salesorderid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * Delete a sales order
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $salesorderid
     * Headers:
     */
    public function delete_a_sales_order($salesorderid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * Mark a sales order as open
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/status/open?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $salesorderid
     * Headers:
     * @param array $data = []
     */
    public function mark_a_sales_order_as_open($salesorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * Mark a sales order as void
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/status/void?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $salesorderid
     * Headers:
     * @param array $data = []
     */
    public function mark_a_sales_order_as_void($salesorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * Update a sales order sub status
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/substatus/${status_code}?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $salesorderid
     * @param $statuscode
     * Headers:
     * @param array $data = []
     */
    public function update_a_sales_order_sub_status(
        $salesorderid,
        $statuscode,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
                "/substatus/" .
                $statuscode .
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
        return $this->executeRequest("POST", $url, $options);
    }

    /**
     * Email a sales order
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/email?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $salesorderid
     * Headers:
     * @param array $data = []
     */
    public function email_a_sales_order($salesorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * Get sales order email content
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/email?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $salesorderid
     * Headers:
     */
    public function get_sales_order_email_content($salesorderid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * Submit a sales order for approval
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/submit?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $salesorderid
     * Headers:
     * @param array $data = []
     */
    public function submit_a_sales_order_for_approval($salesorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * Approve a sales order.
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/approve?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $salesorderid
     * Headers:
     * @param array $data = []
     */
    public function approve_a_sales_order($salesorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * Bulk export sales orders
     * URL: https://books.zoho.com/api/v3/salesorders/pdf?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function bulk_export_sales_orders()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/pdf?organization_id={{ORGANIZATION_ID}}"
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
     * Bulk print sales orders
     * URL: https://books.zoho.com/api/v3/salesorders/print?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function bulk_print_sales_orders()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/print?organization_id={{ORGANIZATION_ID}}"
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
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/address/billing?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $salesorderid
     * Headers:
     * @param array $data = []
     */
    public function update_billing_address($salesorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/address/shipping?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $salesorderid
     * Headers:
     * @param array $data = []
     */
    public function update_shipping_address($salesorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * List sales order templates
     * URL: https://books.zoho.com/api/v3/salesorders/templates?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_sales_order_templates()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/templates?organization_id={{ORGANIZATION_ID}}"
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
     * Update sales order template
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/templates/${template_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $salesorderid
     * @param $templateid
     * Headers:
     * @param array $data = []
     */
    public function update_sales_order_template(
        $salesorderid,
        $templateid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * Add attachment to a sales order
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $salesorderid
     * Headers:
     * @param array $data = []
     */
    public function add_attachment_to_a_sales_order($salesorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $salesorderid
     * Headers:
     * @param array $data = []
     */
    public function update_attachment_preference($salesorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * Get a sales order attachment
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $salesorderid
     * Headers:
     */
    public function get_a_sales_order_attachment($salesorderid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $salesorderid
     * Headers:
     */
    public function delete_an_attachment($salesorderid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $salesorderid
     * Headers:
     * @param array $data = []
     */
    public function add_comment($salesorderid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * List sales order comments & history
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $salesorderid
     * Headers:
     */
    public function list_sales_order_comments_and_history($salesorderid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/comments/${comment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $salesorderid
     * @param $commentid
     * Headers:
     * @param array $data = []
     */
    public function update_comment($salesorderid, $commentid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
     * URL: https://books.zoho.com/api/v3/salesorders/${salesorder_id}/comments/${comment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $salesorderid
     * @param $commentid
     * Headers:
     */
    public function delete_a_comment($salesorderid, $commentid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $salesorderid .
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
