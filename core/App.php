<?php

class App {
  protected $controller = "HomeController";
  protected $method = "index";
  protected $params = [];
  
  public function __construct() {
    $url = $this->parseUrl();
    // Controller
    if (!empty($url) && !is_null($url)) {
      if (file_exists(BASE_PATH. "/controllers/" . $url[0] . ".php")) {
        $this->controller = $url[0];
        unset($url[0]);
      }

    };
   
    require_once BASE_PATH ."/controllers/" . $this->controller . ".php";
    $this->controller = new $this->controller;

    // Method
    if (isset($url[1]) && method_exists($this->controller, $url[1])) {
      $this->method = $url[1];
      unset($url[1]);
    }

    // Parameters
    if (!empty($url)) {
      $this->params = array_values($url);
    }

    // Call the controller method with parameters
    call_user_func_array([$this->controller, $this->method], $this->params);
  }
  protected function parseUrl() {
    if (isset($_GET['url'])) {
      return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
    }
  }

}
