<?php

namespace ZohoBooks;

class ZohoBooks
{
    private static $instance;
    private $config;

    private function __construct($config)
    {
        $this->config = $config;
        $this->updateAccessToken();
    }

    public static function init($config = null)
    {
        if (null === static::$instance) {
            static::$instance = new static([
                "CLIENT_ID" => $config["CLIENT_ID"],
                "CLIENT_SECRET" => $config["CLIENT_SECRET"],
                "REDIRECT_URI" => $config["REDIRECT_URI"],
                "ACCESS_TOKEN" => $config["ACCESS_TOKEN"],
                "REFRESH_TOKEN" => $config["REFRESH_TOKEN"],
                "ORGANIZATION_ID" => $config["ORGANIZATION_ID"],
                "ACCESS_TOKEN_EXPIRY" => $config["ACCESS_TOKEN_EXPIRY"],
            ]);
        }

        return static::$instance;
    }

    public static function updateEnv($env_file_path, $key, $value)
    {
        $env_content = file_get_contents($env_file_path);
        $env_content = preg_replace(
            "/^{$key}=.*/m",
            "{$key}={$value}",
            $env_content
        );
        file_put_contents($env_file_path, $env_content);
    }

    public function updateAccessToken()
    {
        $CLIENT_ID = $this->config["CLIENT_ID"];
        $CLIENT_SECRET = $this->config["CLIENT_SECRET"];
        $REFRESH_TOKEN = $this->config["REFRESH_TOKEN"];
        $ACCESS_TOKEN_EXPIRY = $this->config["ACCESS_TOKEN_EXPIRY"];

        if (time() > $ACCESS_TOKEN_EXPIRY) {
            $client = new \GuzzleHttp\Client();

            $response = $client->post(
                "https://accounts.zoho.com/oauth/v2/token",
                [
                    "form_params" => [
                        "refresh_token" => $REFRESH_TOKEN,
                        "client_id" => $CLIENT_ID,
                        "client_secret" => $CLIENT_SECRET,
                        "grant_type" => "refresh_token",
                    ],
                ]
            );

            $response_data = json_decode($response->getBody(), true);

            if (isset($response_data["access_token"])) {
                $new_access_token = $response_data["access_token"];
                $new_access_token_expiry =
                    time() + $response_data["expires_in"];

                // Update the configuration
                $this->config["ACCESS_TOKEN"] = $new_access_token;
                $this->config["ACCESS_TOKEN_EXPIRY"] = $new_access_token_expiry;

                return true;
            }
        }

        return false;
    }

    // Add Functions Here

    public function getConfig()
    {
        return $this->config;
    }
}
