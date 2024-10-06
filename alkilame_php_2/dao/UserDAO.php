<?php
include_once '../utility/db.php';
include_once '../bean/User.php';

class UserDAO {
    private $conn;

    public function __construct() {
        $database = new DB();
        $this->conn = $database->getConnection();
    }

    public function login($user, $password) {
        $query = "SELECT * FROM user WHERE User = :user AND Password = :password";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user", $user);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>