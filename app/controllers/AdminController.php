<?php class AdminController {
    public function dashboard() {
        // Nombre total inscrits, joueurs validés
        require '../app/views/admin/dashboard.php';
    }

    public function validerJoueur($id) {
        // Met à jour la colonne `approuve` à TRUE
    }

    public function supprimerCommentaire($id) {
        // Supprime un commentaire
    }
}
