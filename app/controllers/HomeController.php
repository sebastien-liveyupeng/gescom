<?php
require_once '../app/models/Video.php';

class HomeController {
    public function index() {
        $videoModel = new Video();
        $videos = $videoModel->getLastVideos(3);

        require '../app/views/home/index.php';
    }
}
