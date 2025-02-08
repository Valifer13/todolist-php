<?php 

class Login extends Controller {
    public function index() {
        $data['title'] = "Login Form";
        $this->view('templates/base_header', $data);
        $this->view('login/index');
        $this->view('templates/base_footer');
    }
}