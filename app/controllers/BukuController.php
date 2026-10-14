<?php
session_start();
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
        if (empty($data['kode_buku']) || empty($data['judul']) || empty($data['penulis'])) {
            $_SESSION['error'] = "Data wajib (Kode, Judul, Penulis) tidak boleh kosong!";
            header('Location: index.php?action=create');
            exit;
        }

        if ($this->bukuModel->insert($data)) {
            $_SESSION['success'] = "Data buku berhasil ditambahkan ke katalog!";
        } else {
            $_SESSION['error'] = "Gagal menambahkan data buku.";
        }
        header('Location: index.php');
        exit;
    }

    public function edit(int $id)
    {
        $buku = $this->bukuModel->findById($id);
        require_once '../app/views/buku/edit.php';
    }

    public function update(int $id, array $data)
    {
        if (empty($data['kode_buku']) || empty($data['judul']) || empty($data['penulis'])) {
            $_SESSION['error'] = "Data wajib tidak boleh kosong!";
            header('Location: index.php?action=edit&id=' . $id);
            exit;
        }

        if ($this->bukuModel->update($id, $data)) {
            $_SESSION['success'] = "Perubahan data buku berhasil disimpan!";
        } else {
            $_SESSION['error'] = "Gagal memperbarui data buku.";
        }
        header('Location: index.php');
        exit;
    }

    public function delete(int $id)
    {
        if ($this->bukuModel->delete($id)) {
            $_SESSION['success'] = "Buku berhasil dihapus dari sistem!";
        } else {
            $_SESSION['error'] = "Gagal menghapus data buku.";
        }
        header('Location: index.php');
        exit;
    }
}
?>