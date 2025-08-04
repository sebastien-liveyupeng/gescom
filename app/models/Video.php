<?php
require_once __DIR__ . '/../../core/Model.php';



class Video extends Model {
    public function getLastVideos($limit = 3) {
        $stmt = $this->pdo->prepare("SELECT * FROM videos ORDER BY date_publication DESC LIMIT ?");
        $stmt->bindValue(1, $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
