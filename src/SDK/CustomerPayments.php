<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class CustomerPayments extends BaseClass
{
    /**
     * Create a payment
     * URL: https://books.zoho.com/api/v3/customerpayments?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_payment($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/customerpayments?organization_id={{ORGANIZATION_ID}}"
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
     * List Customer Payments
     * URL: https://books.zoho.com/api/v3/customerpayments?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_customer_payments()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/customerpayments?organization_id={{ORGANIZATION_ID}}"
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
     * Update a payment
     * URL: https://books.zoho.com/api/v3/customerpayments/${payment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $paymentid
     * Headers:
     * @param array $data = []
     */
    public function update_a_payment($paymentid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/customerpayments/" .
                $paymentid .
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
     * Retrieve a payment
     * URL: https://books.zoho.com/api/v3/customerpayments/${payment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $paymentid
     * Headers:
     */
    public function retrieve_a_payment($paymentid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/customerpayments/" .
                $paymentid .
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
     * Delete a payment
     * URL: https://books.zoho.com/api/v3/customerpayments/${payment_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $paymentid
     * Headers:
     */
    public function delete_a_payment($paymentid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/customerpayments/" .
                $paymentid .
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
     * Refund an excess customer payment
     * URL: https://books.zoho.com/api/v3/customerpayments/${customer_payment_id}/refunds?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $customerpaymentid
     * Headers:
     * @param array $data = []
     */
    public function refund_an_excess_customer_payment(
        $customerpaymentid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/customerpayments/" .
                $customerpaymentid .
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
     * List refunds of a customer payment
     * URL: https://books.zoho.com/api/v3/customerpayments/${customer_payment_id}/refunds?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $customerpaymentid
     * Headers:
     */
    public function list_refunds_of_a_customer_payment($customerpaymentid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/customerpayments/" .
                $customerpaymentid .
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
     * Update a refund
     * URL: https://books.zoho.com/api/v3/customerpayments/${customer_payment_id}/refunds/${refund_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $customerpaymentid
     * @param $refundid
     * Headers:
     * @param array $data = []
     */
    public function update_a_refund($customerpaymentid, $refundid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/customerpayments/" .
                $customerpaymentid .
                "/refunds/" .
                $refundid .
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
     * Details of a refund
     * URL: https://books.zoho.com/api/v3/customerpayments/${customer_payment_id}/refunds/${refund_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $customerpaymentid
     * @param $refundid
     * Headers:
     */
    public function details_of_a_refund($customerpaymentid, $refundid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/customerpayments/" .
                $customerpaymentid .
                "/refunds/" .
                $refundid .
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
     * Delete a Refund
     * URL: https://books.zoho.com/api/v3/customerpayments/${customer_payment_id}/refunds/${refund_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $customerpaymentid
     * @param $refundid
     * Headers:
     */
    public function delete_a_refund($customerpaymentid, $refundid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/customerpayments/" .
                $customerpaymentid .
                "/refunds/" .
                $refundid .
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
