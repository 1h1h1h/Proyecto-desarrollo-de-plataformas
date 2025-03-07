<?php
require_once __DIR__ . '/../models/cliente.model.php';

class ClienteController {
    private $model;

    public function __construct($db) {
        $this->model = new ClienteModel($db);
    }

    public function getAll() {
        return $this->model->getAll();
    }

    public function getById($id) {
        return $this->model->getById($id);
    }

    public function create($data) {
        return $this->model->create($data);
    }
}
?>