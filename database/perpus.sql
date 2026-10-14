CREATE DATABASE IF NOT EXISTS perpus
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE perpus;

CREATE TABLE IF NOT EXISTS buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_buku VARCHAR(20) NOT NULL UNIQUE,
    judul VARCHAR(150) NOT NULL,
    penulis VARCHAR(100) NOT NULL,
    tahun_terbit INT NOT NULL,
    stok INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO buku (kode_buku, judul, penulis, tahun_terbit, stok) VALUES
('BK-001', 'Pemrograman Web dengan PHP', 'Andi Pratama', 2024, 10),
('BK-002', 'Arsitektur MVC Modern', 'Budi Santoso', 2023, 5),
('BK-003', 'Database MySQL & PDO', 'Citra Lestari', 2025, 8);