<?php 

class Dashboard extends Controller {
    public function index() {
        $data['title'] = "Dashboard";
        $data['user'] = $this->model('UserModel')->getUserById(1);
        $this->view('templates/header', $data);
        $this->view('dashboard/index');
        $this->view('templates/footer');
    }
}