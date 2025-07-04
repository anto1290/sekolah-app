<?php 

$base_url = (isset($_SERVER['HTTPS']) ? 'https' : 'http'). '://' . $_SERVER['HTTP_HOST'] . '/';
; // Change this to your project URL
define('BASE_URL', $base_url . 'sekolah-app/public/'); // Base URL for the application
define('BASE_PATH', dirname(__DIR__)); // Path to the project root
define('APP_NAME', 'SekolahApp');
define('APP_VERSION', '1.0.0');


session_start(); // Start the session for user authentication
