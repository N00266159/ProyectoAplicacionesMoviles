<?php
include_once '../utility/db.php';
include_once '../bean/Property.php';

class PropertyDAO {
    private $conn;

    public function __construct() {
        $database = new DB();
        $this->conn = $database->getConnection();
    }

    public function getProperties() {
        $query = "SELECT * FROM propiedad";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addProperty($property) {
        $query = "INSERT INTO propiedad (Titulo, Description, Ubicacion, Price, Imagen) VALUES (:titulo, :description, :ubicacion, :price, :imagen)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":titulo", $property->Titulo);
        $stmt->bindParam(":description", $property->Description);
        $stmt->bindParam(":ubicacion", $property->Ubicacion);
        $stmt->bindParam(":price", $property->Price);
        $stmt->bindParam(":imagen", $property->Imagen);
        return $stmt->execute();
    }
}
?>