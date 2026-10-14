<?php
class Database
{
    private string $host = 'localhost';
    private string $db   = 'perpus';
    private string $user = 'root';
    private string $pass = '12345';

    public function connect(): PDO
    {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset=utf8mb4";
        return new PDO($dsn, $this->user, $this->pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
}
?>