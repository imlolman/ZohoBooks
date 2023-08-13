<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class BankTransactions extends BaseClass
{
    /**
     * Create a transaction for an account
     * URL: https://books.zoho.com/api/v3/banktransactions?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_a_transaction_for_an_account($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions?organization_id={{ORGANIZATION_ID}}"
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
     * Get transactions list
     * URL: https://books.zoho.com/api/v3/banktransactions?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function get_transactions_list()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions?organization_id={{ORGANIZATION_ID}}"
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
     * Update a transaction
     * URL: https://books.zoho.com/api/v3/banktransactions/${bank_transaction_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $banktransactionid
     * Headers:
     * @param array $data = []
     */
    public function update_a_transaction($banktransactionid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/" .
                $banktransactionid .
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
     * Get transaction
     * URL: https://books.zoho.com/api/v3/banktransactions/${bank_transaction_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $banktransactionid
     * Headers:
     */
    public function get_transaction($banktransactionid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/" .
                $banktransactionid .
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
     * Delete a transaction
     * URL: https://books.zoho.com/api/v3/banktransactions/${bank_transaction_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $banktransactionid
     * Headers:
     */
    public function delete_a_transaction($banktransactionid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/" .
                $banktransactionid .
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
     * Match a transaction
     * URL: https://books.zoho.com/api/v3/banktransactions/uncategorized/${transaction_id}/match?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $transactionid
     * Headers:
     * @param array $data = []
     */
    public function match_a_transaction($transactionid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/uncategorized/" .
                $transactionid .
                "/match?organization_id={{ORGANIZATION_ID}}"
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
     * Get matching transactions
     * URL: https://books.zoho.com/api/v3/banktransactions/uncategorized/${transaction_id}/match?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $transactionid
     * Headers:
     */
    public function get_matching_transactions($transactionid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/uncategorized/" .
                $transactionid .
                "/match?organization_id={{ORGANIZATION_ID}}"
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
     * Unmatch a matched transaction
     * URL: https://books.zoho.com/api/v3/banktransactions/${transaction_id}/unmatch?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $transactionid
     * Headers:
     * @param array $data = []
     */
    public function unmatch_a_matched_transaction($transactionid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/" .
                $transactionid .
                "/unmatch?organization_id={{ORGANIZATION_ID}}"
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
     * Exclude a transaction
     * URL: https://books.zoho.com/api/v3/banktransactions/uncategorized/${transaction_id}/exclude?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $transactionid
     * Headers:
     * @param array $data = []
     */
    public function exclude_a_transaction($transactionid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/uncategorized/" .
                $transactionid .
                "/exclude?organization_id={{ORGANIZATION_ID}}"
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
     * Restore a transaction
     * URL: https://books.zoho.com/api/v3/banktransactions/uncategorized/${transaction_id}/restore?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $transactionid
     * Headers:
     * @param array $data = []
     */
    public function restore_a_transaction($transactionid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/uncategorized/" .
                $transactionid .
                "/restore?organization_id={{ORGANIZATION_ID}}"
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
     * Categorize an uncategorized transaction
     * URL: https://books.zoho.com/api/v3/banktransactions/uncategorized/${transaction_id}/categorize?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $transactionid
     * Headers:
     * @param array $data = []
     */
    public function categorize_an_uncategorized_transaction(
        $transactionid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/uncategorized/" .
                $transactionid .
                "/categorize?organization_id={{ORGANIZATION_ID}}"
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
     * Categorize as expense
     * URL: https://books.zoho.com/api/v3/banktransactions/uncategorized/${transaction_id}/categorize/expenses?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $transactionid
     * Headers:
     * @param array $data = []
     */
    public function categorize_as_expense($transactionid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/uncategorized/" .
                $transactionid .
                "/categorize/expenses?organization_id={{ORGANIZATION_ID}}"
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
     * Uncategorize a categorized transaction
     * URL: https://books.zoho.com/api/v3/banktransactions/${transaction_id}/uncategorize?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $transactionid
     * Headers:
     * @param array $data = []
     */
    public function uncategorize_a_categorized_transaction(
        $transactionid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/" .
                $transactionid .
                "/uncategorize?organization_id={{ORGANIZATION_ID}}"
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
     * Categorize a vendor payment
     * URL: https://books.zoho.com/api/v3/banktransactions/uncategorized/${transaction_id}/categorize/vendorpayments?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $transactionid
     * Headers:
     * @param array $data = []
     */
    public function categorize_a_vendor_payment($transactionid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/uncategorized/" .
                $transactionid .
                "/categorize/vendorpayments?organization_id={{ORGANIZATION_ID}}"
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
     * Categorize as customer payment
     * URL: https://books.zoho.com/api/v3/banktransactions/uncategorized/${transaction_id}/categorize/customerpayments?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $transactionid
     * Headers:
     * @param array $data = []
     */
    public function categorize_as_customer_payment($transactionid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/uncategorized/" .
                $transactionid .
                "/categorize/customerpayments?organization_id={{ORGANIZATION_ID}}"
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
     * Categorize as credit note refunds
     * URL: https://books.zoho.com/api/v3/banktransactions/uncategorized/${transaction_id}/categorize/creditnoterefunds?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $transactionid
     * Headers:
     * @param array $data = []
     */
    public function categorize_as_credit_note_refunds(
        $transactionid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/uncategorized/" .
                $transactionid .
                "/categorize/creditnoterefunds?organization_id={{ORGANIZATION_ID}}"
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
     * Categorize as vendor credit refunds
     * URL: https://books.zoho.com/api/v3/banktransactions/uncategorized/${transaction_id}/categorize/vendorcreditrefunds?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $transactionid
     * Headers:
     * @param array $data = []
     */
    public function categorize_as_vendor_credit_refunds(
        $transactionid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/uncategorized/" .
                $transactionid .
                "/categorize/vendorcreditrefunds?organization_id={{ORGANIZATION_ID}}"
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
     * Categorize as Customer Payment refund
     * URL: https://books.zoho.com/api/v3/banktransactions/uncategorized/${statement_line_id}/categorize/paymentrefunds?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $statementlineid
     * Headers:
     * @param array $data = []
     */
    public function categorize_as_customer_payment_refund(
        $statementlineid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/uncategorized/" .
                $statementlineid .
                "/categorize/paymentrefunds?organization_id={{ORGANIZATION_ID}}"
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
     * Categorize as Vendor Payment refund
     * URL: https://books.zoho.com/api/v3/banktransactions/uncategorized/${statement_line_id}/categorize/vendorpaymentrefunds?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $statementlineid
     * Headers:
     * @param array $data = []
     */
    public function categorize_as_vendor_payment_refund(
        $statementlineid,
        $data = []
    ) {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/banktransactions/uncategorized/" .
                $statementlineid .
                "/categorize/vendorpaymentrefunds?organization_id={{ORGANIZATION_ID}}"
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
}
