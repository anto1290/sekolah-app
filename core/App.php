<?php

class App {
  protected $controller = "HomeController";
  protected $method = "index";
  protected $params = [];
  
  public function __construct() {
    $url = $this->parseUrl();
    // Controller
    if (!empty($url) && !is_null($url)) {
      if (isset($url[3]) && file_exists(BASE_PATH. "/controllers/" . ucfirst($url[3]) . "Controller.php")) {
        $this->controller = ucfirst($url[3]) . "Controller";
        unset($url[3]);
      }

    };
   
    require_once BASE_PATH ."/controllers/" . $this->controller . ".php";

    $this->controller = new $this->controller;
    // Method
    if (isset($url[4]) && method_exists($this->controller, $url[4])) {
      $this->method = $url[4];
      unset($url[4]);
    }
    // Parameters
    $this->params = array_values(array_slice($url, 3));
    // Call the controller method with parameters
    call_user_func_array([$this->controller, $this->method], $this->params);
  }
  protected function parseUrl() {
    if (isset($_SERVER['REQUEST_URI'])) {
      // Sanitize the URL and remove trailing slashes
      // Then explode it into an array
      // Use FILTER_SANITIZE_URL instead of PDO::FILLTER_SANITIZE_URL
      $sl = explode('/', filter_var(rtrim($_SERVER['REQUEST_URI'], '/'), FILTER_SANITIZE_URL));
      // Remove the first element if it's empty (which happens if the URL starts with a slash)
      return $sl;
    }
  }

}
