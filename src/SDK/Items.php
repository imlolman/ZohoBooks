<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class Items extends BaseClass
{
    /**
     * Create an Item
     * URL: https://books.zoho.com/api/v3/items?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * Headers:
     * @param array $data = []
     */
    public function create_an_item($data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/items?organization_id={{ORGANIZATION_ID}}"
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
     * List items
     * URL: https://books.zoho.com/api/v3/items?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * Headers:
     */
    public function list_items()
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/items?organization_id={{ORGANIZATION_ID}}"
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
     * Update an item
     * URL: https://books.zoho.com/api/v3/items/${item_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $itemid
     * Headers:
     * @param array $data = []
     */
    public function update_an_item($itemid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/items/" .
                $itemid .
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
     * Get an item
     * URL: https://books.zoho.com/api/v3/items/${item_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $itemid
     * Headers:
     */
    public function get_an_item($itemid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/items/" .
                $itemid .
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
     * Delete an item
     * URL: https://books.zoho.com/api/v3/items/${item_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $itemid
     * Headers:
     */
    public function delete_an_item($itemid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/items/" .
                $itemid .
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
     * Mark as active
     * URL: https://books.zoho.com/api/v3/items/${item_id}/active?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $itemid
     * Headers:
     * @param array $data = []
     */
    public function mark_as_active($itemid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/items/" .
                $itemid .
                "/active?organization_id={{ORGANIZATION_ID}}"
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
     * Mark as inactive
     * URL: https://books.zoho.com/api/v3/items/${item_id}/inactive?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $itemid
     * Headers:
     * @param array $data = []
     */
    public function mark_as_inactive($itemid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/items/" .
                $itemid .
                "/inactive?organization_id={{ORGANIZATION_ID}}"
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
