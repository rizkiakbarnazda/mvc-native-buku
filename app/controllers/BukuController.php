<?php
require_once '../config/database.php';
require_once '../app/models/Buku.php';

class BukuController
{
    private Buku $bukuModel;

    public function __construct()
    {
        $db = new Database();
        $this->bukuModel = new Buku($db->connect());
    }

    public function index()
    {
        $bukuList = $this->bukuModel->getAll();
        require_once '../app/views/buku/index.php';
    }

    public function create()
    {
        require_once '../app/views/buku/create.php';
    }

    public function store(array $data)
    {
        if ($this->bukuModel->insert($data)) {
            header('Location: index.php');
            exit;
        }
    }

    public function edit(int $id)
    {
        $buku = $this->bukuModel->findById($id);
        require_once '../app/views/buku/edit.php';
    }

    public function update(int $id, array $data)
    {
        if ($this->bukuModel->update($id, $data)) {
            header('Location: index.php');
            exit;
        }
    }

    public function delete(int $id)
    {
        if ($this->bukuModel->delete($id)) {
            header('Location: index.php');
            exit;
        }
    }
}
?>