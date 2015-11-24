<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('new_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['user'] = $this->new_model->set_user();
                $data['title'] = 'News archive';

		        //$this->load->view('templates/header', $data);
		        $this->load->view('pages/index', $data);
		        //$this->load->view('templates/footer');
        }

	

}
