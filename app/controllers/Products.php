<?php

class Products extends Controller {
    public function index() {
        $data = [
            "title" => "Home",
        ];
        $this->view('templates/header', $data);
        $this->view('products/index');
        $this->view('templates/footer');
    }
}