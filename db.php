<?php
class ConnessioneDB {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "studenti_db");
        if ($this->conn->connect_error) {
            die("Connessione fallita: " . $this->conn->connect_error);
        }
    }

    public function getConn() {
        return $this->conn;  // questo metodo restituisce l'oggetto mysqli
    }
}
?>

