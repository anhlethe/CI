<?php
class Login extends CI_Controller {

         public function __construct()
        {
                parent::__construct();
                $this->load->model('Users_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['users'] = $this->news_model->get_users();
                $data['title'] = 'Login';
                $this->load->view('templates/header', $data);
                $this->load->view('login/login_form', $data);
                $this->load->view('templates/footer');
        }
}