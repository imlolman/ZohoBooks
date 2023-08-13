<?php

namespace ZohoBooks\SDK;

use ZohoBooks\BaseClass;

class CustomModules extends BaseClass
{
    /**
     * Create  Custom Modules
     * URL: https://books.zoho.com/api/v3/${module_name}?organization_id={{ORGANIZATION_ID}}
     * Method: POST
     * @param $modulename
     * Headers:
     * @param array $data = []
     */
    public function create_custom_modules($modulename, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/" .
                $modulename .
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
     * Bulk Update Custom Module
     * URL: https://books.zoho.com/api/v3/${module_name}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $modulename
     * Headers:
     * @param array $data = []
     */
    public function bulk_update_custom_module($modulename, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/" .
                $modulename .
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
     * Get Record List of a Custom Module
     * URL: https://books.zoho.com/api/v3/${module_name}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $modulename
     * Headers:
     */
    public function get_record_list_of_a_custom_module($modulename)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/" .
                $modulename .
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
     * Delete Custom Modules
     * URL: https://books.zoho.com/api/v3/${module_name}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $modulename
     * Headers:
     */
    public function delete_custom_modules($modulename)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/" .
                $modulename .
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
     * Update Custom Module
     * URL: https://books.zoho.com/api/v3/${module_name}/${module_id}?organization_id={{ORGANIZATION_ID}}
     * Method: PUT
     * @param $modulename
     * @param $moduleid
     * Headers:
     * @param array $data = []
     */
    public function update_custom_module($modulename, $moduleid, $data = [])
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/" .
                $modulename .
                "/" .
                $moduleid .
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
     * Get Individual Record Details
     * URL: https://books.zoho.com/api/v3/${module_name}/${module_id}?organization_id={{ORGANIZATION_ID}}
     * Method: GET
     * @param $modulename
     * @param $moduleid
     * Headers:
     */
    public function get_individual_record_details($modulename, $moduleid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/" .
                $modulename .
                "/" .
                $moduleid .
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
     * Delete individual records
     * URL: https://books.zoho.com/api/v3/${module_name}/${module_id}?organization_id={{ORGANIZATION_ID}}
     * Method: DELETE
     * @param $modulename
     * @param $moduleid
     * Headers:
     */
    public function delete_individual_records($modulename, $moduleid)
    {
        $url = $this->replaceVariables(
            "https://books.zoho.com/api/v3/" .
                $modulename .
                "/" .
                $moduleid .
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
