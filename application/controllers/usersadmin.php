<?php 

class usersadmin extends CI_Controller {
      	public function __construct()
        {
                parent::__construct();
                $this->load->model('Users_model');
                //$this->load->helper('url_helper');
        }

		public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');


                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('login/myform');
                }
                else
                {
                        $this->load->view('formsuccess');
                        return '';
                }
        }
        public function login($info=array()){

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
        	$data['info'] = $this->Users_model->get_users();

        }

} 	
