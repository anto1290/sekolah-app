<?php

require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'config/config.php';


$app = new App();

echo "Welcome to " . APP_NAME . " version " . APP_VERSION . "!<br>";
echo "Base URL: " . BASE_URL . "<br>";
