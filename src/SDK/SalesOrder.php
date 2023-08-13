<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class SalesOrder extends BaseClass
{
    /**
     * Create sales order
     * URL: https://books.zoho.com/api/v3/salesorders?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function create_sales_order($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders?organization_id={{ORGANIZATION_ID}}"
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
     * Update Sales Order
     * URL: https://books.zoho.com/api/v3/salesorders?organization_id={{Organization_ID}}
     * Method: PUT
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function update_sales_order($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders?organization_id={{Organization_ID}}"
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
        return $this->executeRequest("PUT", $url, $options);
    }

    /**
     * List of Sales Orders
     * URL: https://books.zoho.com/api/v3/salesorders?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function list_of_sales_orders()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders?organization_id={{ORGANIZATION_ID}}"
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

    /**
     * Get a Sales Order
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrder.Sales_Order_ID}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $SalesOrderSalesOrderID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function get_a_sales_order($SalesOrderSalesOrderID)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrderSalesOrderID .
                "?organization_id={{ORGANIZATION_ID}}"
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

    /**
     * Delete a Sales Order
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrder.Sales_Order_ID}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $SalesOrderSalesOrderID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function delete_a_sales_order($SalesOrderSalesOrderID)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrderSalesOrderID .
                "?organization_id={{ORGANIZATION_ID}}"
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
        return $this->executeRequest("DELETE", $url, $options);
    }

    /**
     * Mark a Sales Order as Open
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrder.Sales_Order_ID}/status/open?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $SalesOrderSalesOrderID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function mark_a_sales_order_as_open(
        $SalesOrderSalesOrderID,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrderSalesOrderID .
                "/status/open?organization_id={{ORGANIZATION_ID}}"
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
     * Mark a Sales Order as Void
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrder.Sales_Order_ID}/status/void?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $SalesOrderSalesOrderID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function mark_a_sales_order_as_void(
        $SalesOrderSalesOrderID,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrderSalesOrderID .
                "/status/void?organization_id={{ORGANIZATION_ID}}"
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
     * Get Sales Order Email Content
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrder.Sales_Order_ID}/email?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $SalesOrderSalesOrderID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function get_sales_order_email_content_($SalesOrderSalesOrderID)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrderSalesOrderID .
                "/email?organization_id={{ORGANIZATION_ID}}"
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

    /**
     * Bulk Export Sales Orders
     * URL: https://books.zoho.com/api/v3/salesorders/pdf?organization_id={{ORGANIZATION_ID}}&salesorder_ids=${SalesOrder.Sales_Order_IDs}
     * Method: GET
     * @param $SalesOrderSalesOrderIDs
     * @param $salesorder_ids
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function bulk_export_sales_orders(
        $SalesOrderSalesOrderIDs,
        $salesorder_ids
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/pdf?organization_id={{ORGANIZATION_ID}}&salesorder_ids=" .
                $SalesOrderSalesOrderIDs .
                ""
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
            $this->replaceVariables(
                "salesorder_ids"
            ) => $this->replaceVariables($salesorder_ids),
        ];
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * Bulk Print Sales Orders
     * URL: https://books.zoho.com/api/v3/salesorders/print?organization_id={{ORGANIZATION_ID}}&salesorder_ids=${SalesOrder.Sales_Order_IDs}
     * Method: GET
     * @param $SalesOrderSalesOrderIDs
     * @param $salesorder_ids
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function bulk_print_sales_orders(
        $SalesOrderSalesOrderIDs,
        $salesorder_ids
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/print?organization_id={{ORGANIZATION_ID}}&salesorder_ids=" .
                $SalesOrderSalesOrderIDs .
                ""
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
            $this->replaceVariables(
                "salesorder_ids"
            ) => $this->replaceVariables($salesorder_ids),
        ];
        return $this->executeRequest("GET", $url, $options);
    }

    /**
     * Update Billing Address
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrders.Sales_Order_ID}/address/billing?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $SalesOrdersSalesOrderID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function update_billing_address($SalesOrdersSalesOrderID, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrdersSalesOrderID .
                "/address/billing?organization_id={{ORGANIZATION_ID}}"
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
        return $this->executeRequest("PUT", $url, $options);
    }

    /**
     * Update Shipping Address
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrders.Sales_Order_ID}/address/shipping?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $SalesOrdersSalesOrderID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function update_shipping_address(
        $SalesOrdersSalesOrderID,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrdersSalesOrderID .
                "/address/shipping?organization_id={{ORGANIZATION_ID}}"
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
        return $this->executeRequest("PUT", $url, $options);
    }

    /**
     * List Sales Orders Templates
     * URL: https://books.zoho.com/api/v3/salesorders/templates?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function list_sales_orders_templates()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/templates?organization_id={{ORGANIZATION_ID}}"
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

    /**
     * Update Sales Order Template
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrder.Sales_Order_ID}/templates/${Template.Template_ID}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $SalesOrderSalesOrderID
     * @param $TemplateTemplateID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function update_sales_order_template(
        $SalesOrderSalesOrderID,
        $TemplateTemplateID,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrderSalesOrderID .
                "/templates/" .
                $TemplateTemplateID .
                "?organization_id={{ORGANIZATION_ID}}"
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
        return $this->executeRequest("PUT", $url, $options);
    }

    /**
     * Get a Sales Order Attachment
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrder.Sales_Order_ID}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $SalesOrderSalesOrderID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function get_a_sales_order_attachment($SalesOrderSalesOrderID)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrderSalesOrderID .
                "/attachment?organization_id={{ORGANIZATION_ID}}"
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

    /**
     * Add Attachment to a Sales Order
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrder.Sales_Order_ID}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $SalesOrderSalesOrderID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function add_attachment_to_a_sales_order(
        $SalesOrderSalesOrderID,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrderSalesOrderID .
                "/attachment?organization_id={{ORGANIZATION_ID}}"
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
     * Update Attachment Preference
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrder.Sales_Order_ID}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $SalesOrderSalesOrderID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function update_attachment_preference(
        $SalesOrderSalesOrderID,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrderSalesOrderID .
                "/attachment?organization_id={{ORGANIZATION_ID}}"
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
        return $this->executeRequest("PUT", $url, $options);
    }

    /**
     * Delete an Attachment
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrder.Sales_Order_ID}/attachment?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $SalesOrderSalesOrderID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function delete_an_attachment($SalesOrderSalesOrderID)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrderSalesOrderID .
                "/attachment?organization_id={{ORGANIZATION_ID}}"
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
        return $this->executeRequest("DELETE", $url, $options);
    }

    /**
     * List Sales Order Commens & History
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrder.Sales_Order_ID}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $SalesOrderSalesOrderID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function list_sales_order_commens_and_history(
        $SalesOrderSalesOrderID
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrderSalesOrderID .
                "/comments?organization_id={{ORGANIZATION_ID}}"
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

    /**
     * Add Comment
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrder.Sales_Order_ID}/comments?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $SalesOrderSalesOrderID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function add_comment($SalesOrderSalesOrderID, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrderSalesOrderID .
                "/comments?organization_id={{ORGANIZATION_ID}}"
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
     * Update Comment
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrder.Sales_Order_ID}/comments/${Comments.Comment_ID}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $SalesOrderSalesOrderID
     * @param $CommentsCommentID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function update_comment(
        $SalesOrderSalesOrderID,
        $CommentsCommentID,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrderSalesOrderID .
                "/comments/" .
                $CommentsCommentID .
                "?organization_id={{ORGANIZATION_ID}}"
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
        return $this->executeRequest("PUT", $url, $options);
    }

    /**
     * Delete a Comment
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrder.Sales_Order_ID}/comments/${Comments.Comment_ID}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $SalesOrderSalesOrderID
     * @param $CommentsCommentID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     */
    public function delete_a_comment(
        $SalesOrderSalesOrderID,
        $CommentsCommentID
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrderSalesOrderID .
                "/comments/" .
                $CommentsCommentID .
                "?organization_id={{ORGANIZATION_ID}}"
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
        return $this->executeRequest("DELETE", $url, $options);
    }

    /**
     * Email a Sales Order
     * URL: https://books.zoho.com/api/v3/salesorders/${SalesOrder.Sales_Order_ID}/email?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $SalesOrderSalesOrderID
     * Headers:
     *  - Authorization: Zoho-authtoken {{ACCESS_TOKEN}}
     * @param array $data = []
     */
    public function email_a_sales_order($SalesOrderSalesOrderID, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/salesorders/" .
                $SalesOrderSalesOrderID .
                "/email?organization_id={{ORGANIZATION_ID}}"
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
}
