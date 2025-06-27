<?php 

class Controller {

   public function view($view, $data = []) {
      if (file_exists(BASE_PATH ."/views/" . $view . ".php")) {
         require_once BASE_PATH ."/views/" . $view . ".php";
      } else {
         die("View does not exist: " . $view);
      }
   }

   public function layout($view, $layout, $data = []) {
      $viewFile = BASE_PATH ."/views/" . $view . ".php";
      
      if (file_exists(BASE_PATH ."/components/layout/" . $layout . ".php")) {
         require_once BASE_PATH ."/components/layout/" . $layout . ".php";
      } else {
         die("Layout does not exist: " . $view . " in layout: " . $layout);
      }
   }
   public function model($model) {
      if (file_exists(BASE_PATH ."/models/" . $model . ".php")) {
         require_once BASE_PATH ."/models/" . $model . ".php";
         return new $model();
      } else {
         die("Model does not exist: " . $model);
      }
   }
    /**
      * Redirect to a given URL
      *
      * @param string $url The URL to redirect to
      */
   public function redirect($url) {
      header("Location: " . $url);
      exit();
   }
}
