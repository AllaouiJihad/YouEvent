<?php
namespace App\Database;
use PDO;
use PDOException;

class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "youevent";
    private $conn;

    public function __construct() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database}";
            $this->conn = new PDO($dsn, $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //    echo 'hana';
        } catch (PDOException $e) {
            // echo '3yan';
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}

?>