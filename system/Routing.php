<?php

class Routing {
    private $page = array();
    function AddRout ($url, $file_name) {
        $this->page[$url] = $file_name;
    }
    function Route ($url) {
        $dir_file = 'pages/' . $this->page[$url];

        if ($url === "" || !$this->page[$url]) {
            require './error_404.php';
            die();
        }

        echo file_exists('pages/d.php');

        if (file_exists($dir_file)) {

            require $dir_file;
        } else {

            require './error_404.php';
            die();
        }

    }
}