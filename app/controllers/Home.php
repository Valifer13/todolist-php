<?php

class Home extends Controller {
    public function index() {
        $data = [
            "title" => "Home",
            "name"  => "Vincent",
        ];
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}