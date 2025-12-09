<?php
// config/database.php

class Database {
    private $host = "gateway01.ap-southeast-1.prod.aws.tidbcloud.com";
    private $db_name = "test";
    private $username = "wrvr86JNUurTeWf.root";
    private $password = "Xwfgvu1YVDy24039";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

?>


