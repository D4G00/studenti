
<?php 
require_once 'db.php';

class utente {
    private $conn;

    public function __construct(ConnessioneDB $db) {
        $this->conn = $db->getConn();  

}


    public function registra($username, $password) {
        $pwdHash = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO utenti (username, password) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ss", $username, $pwdHash);
        return $stmt->execute();
    }

    public function login($username, $password) {
        $query = "SELECT id, password FROM utenti WHERE username = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($id, $pwdHash);
        if ($stmt->fetch() && password_verify($password, $pwdHash)) {
            session_start();
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            return true;
        }
        return false;
    }

    public static function autenticato() {
        session_start();
        return isset($_SESSION['user_id']);
    }
}

?>

