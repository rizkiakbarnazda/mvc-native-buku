<?php
require_once '../config/database.php';
require_once '../app/models/Buku.php';
require_once '../app/controllers/BukuController.php';

$controller = new BukuController();

$action = $_GET['action'] ?? 'index';

match ($action) {
    'index'  => $controller->index(),
    'create' => $controller->create(),
    'store'  => $controller->store($_POST),
    'edit'   => $controller->edit((int)$_GET['id']),
    'update' => $controller->update((int)$_POST['id'], $_POST),
    'delete' => $controller->delete((int)$_POST['id']),
    default  => (function () {
        http_response_code(404);
        exit('Halaman tidak ditemukan. (404 Not Found)');
    })()
};
?>