<?php
class ClienteModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM clientes";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM clientes WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $query = "INSERT INTO clientes (nombre, apellido1, apellido2, telefono, email) VALUES (:nombre, :apellido1, :apellido2, :telefono, :email)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($data);
        return ['id' => $this->conn->lastInsertId()];
    }
}
?>