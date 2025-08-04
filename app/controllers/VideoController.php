<?php class VideoController {
    public function show($id) {
        // Affiche une vidéo + commentaires liés
        require '../app/views/video/show.php';
    }

    public function addComment($id) {
        // Ajoute un commentaire à la vidéo $id
    }
}
