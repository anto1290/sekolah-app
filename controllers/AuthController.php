<?php 

require_once BASE_PATH. "models/users.php";

class AuthController extends Controller {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->userModel->authenticate($username, $password)) {
                // Set session or cookie for user authentication
                $_SESSION['user'] = $username;
                header('Location: ' . BASE_URL . 'dashboard');
            } else {
                echo "Invalid username or password.";
            }
        } else {
            // Load the login view
            $this->view('auth/login');
        }
    }

    public function logout() {
        session_destroy();
        header('Location: ' . BASE_URL . 'auth/login');
    }
}
