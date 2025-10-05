<?php

// UserRepository.php
class UserRepository {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function findAll(): array {
        $stmt = $this->db->query("SELECT id, name FROM users");
        return array_map(fn($r) => new User($r['id'], $r['name']), $stmt->fetchAll());
    }

    public function save(User $user): void {
        $stmt = $this->db->prepare("INSERT INTO users (name) VALUES (:name)");
        $stmt->execute(['name' => $user->name]);
    }
}

?>