<?php 

class About extends Controller {
    public function index() {
        $data = [
            "title" => "About",
        ];
        $data['user'] = $this->model('UserModel')->getUserById(1);
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}