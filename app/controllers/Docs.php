<?php 

class Docs extends Controller {
    public function index() {
        $data = [
            "title" => "Docs",
        ];
        $this->view('templates/header', $data);
        $this->view('docs/index', $data);
        $this->view('templates/footer', $data);
    }
}