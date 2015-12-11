<?php
class Login extends CI_Controller {

         public function __construct()
        {
            parent::__construct();
           
            $this->load->helper('url_helper');
            $this->load->library('session');
            $this->load->helper('form');
            $this->load->helper('html');
            $this->load->database();
            $this->load->library('form_validation');
            //load the Users_model
            $this->load->model('Users_model');
        }

         public function index()
        {
          //get the posted values
          $username = $this->input->post("username");
          $password = $this->input->post("password");

          //set validations
          
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->view('login/myform');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn btn-primary') == "Login")
               {
                    //check if username and password is correct
                    $usr_result = $this->login_model->get_users($username, $password);
                    if ($usr_result > 0) //active user record is present
                    {
                         //set the session variables
                         $sessiondata = array(
                              'username' => $username,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         redirect("index");
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                         redirect('login/index');
                    }
               }
               else
               {
                    redirect('login/index');
               }
          }
     }

}