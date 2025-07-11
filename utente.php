<?php
require_once 'db.php';

class Utente {
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
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $query = "SELECT id, username, password FROM utenti WHERE username = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result && $row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            return true;
        }
    }
    return false;
    }

    public static function autenticato() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
        return isset($_SESSION['user_id']);
    }
}
?>
