<?php

namespace ZohoBooks;

use \GuzzleHttp\Client;

use ZohoBooks\ZohoBooks;

class BaseClass {
  protected $config;

  protected $client;

  public function __construct() {
    $this->client = new Client();
    $this->config = ZohoBooks::init()->getConfig();
  }


  protected function replaceVariables($string) {
    return preg_replace_callback('/\{{2}([\w.]+)\}{2}|\$\{([\w.]+)\}/', function($matches) {
      $variableName = isset($matches[1]) ? $matches[1] : $matches[2];
      $value = getenv($variableName);

      if ($value === false && isset($this->config[$variableName])) {
        $value = $this->config[$variableName];
      }

      return $value !== false ? $value : $matches[0];
    }, $string);
  }

  protected function executeRequest($method, $url, $options) {
    // Add bearer token if it's present
    $bearerToken = $this->replaceVariables('{{ACCESS_TOKEN}}');
    if ($bearerToken) {
      $options['headers']['Authorization'] = 'Bearer ' . $bearerToken;
    }

    $response = $this->client->request($method, $url, $options);
    return json_decode($response->getBody(), true);
  }
}
