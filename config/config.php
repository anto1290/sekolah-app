<?php 

$base_url = (isset($_SERVER['HTTPS']) ? 'https' : 'http'). '://' . $_SERVER['HTTP_HOST'] . '/';
; // Change this to your project URL
define('BASE_URL', $base_url);
define('BASE_PATH', dirname(__DIR__)); // Path to the project root
define('APP_NAME', 'SekolahApp');
define('APP_VERSION', '1.0.0');
