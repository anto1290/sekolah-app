<?php

class View {
  public static function components($component, $data = []) {
    $filePath = "../components/" . $component . ".php";
    if (file_exists($filePath)) {
      require_once $filePath;
    } else {
      die("Component does not exist: " . $component);
    }
  }
}
