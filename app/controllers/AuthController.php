<? class AuthController {
    public function login() {
        require '../app/views/auth/login.php';
    }

    public function register() {
        require '../app/views/auth/register.php';
    }

    public function doLogin() {
        // Vérifie identifiants depuis POST
    }

    public function doRegister() {
        // Crée un utilisateur avec role="joueur" et approuve=0
    }

    public function logout() {
        session_destroy();
        header("Location: /auth/login");
    }
}
