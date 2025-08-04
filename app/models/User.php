<?php 
class User extends Model {
    public function create($pseudo, $email, $password) {
        $stmt = $this->pdo->prepare("INSERT INTO utilisateurs (pseudo, email, motdepasse) VALUES (?, ?, ?)");
        return $stmt->execute([$pseudo, $email, $password]);
    }

    public function findByEmail($email) {
        $stmt = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    public function approuver($id) {
        $stmt = $this->pdo->prepare("UPDATE utilisateurs SET approuve = 1 WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
