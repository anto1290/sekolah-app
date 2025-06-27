<?php

class App {
  protected $controller = "HomeController";
  protected $method = "index";
  protected $params = [];
  
  public function __construct() {
    $url = $this->parseUrl();
    // Controller
    if (!empty($url) && !is_null($url)) {
      if (isset($url[1]) && file_exists(BASE_PATH. "/controllers/" . ucfirst($url[1]) . "Controller.php")) {
        $this->controller = ucfirst($url[1]) . "Controller";
        unset($url[0]);
      }

    };
   
    require_once BASE_PATH ."/controllers/" . $this->controller . ".php";

    $this->controller = new $this->controller;
    // Method
    if (isset($url[2]) && method_exists($this->controller, $url[2])) {
      $this->method = $url[2];
      unset($url[2]);
    }

    // Parameters
    if (!empty($url)) {
      $this->params = array_values($url);
    }

    // Call the controller method with parameters
    call_user_func_array([$this->controller, $this->method], $this->params);
  }
  protected function parseUrl() {
    if (isset($_SERVER['REQUEST_URI'])) {
      // Sanitize the URL and remove trailing slashes
      // Then explode it into an array
      // Use FILTER_SANITIZE_URL instead of PDO::FILLTER_SANITIZE_URL
      $sl = explode('/', filter_var(rtrim($_SERVER['REQUEST_URI'], '/')));
      // Remove the first element if it's empty (which happens if the URL starts with a slash)
      return $sl;
    }
  }

}
