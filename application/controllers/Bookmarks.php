<?php
class Bookmarks extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Bookmarks_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {       
                $data['bookmark'] = $this->Bookmarks_model->get_bookmarks();
                $data['title'] = 'News archive';
                $arrayName = array( );
                $arrayName = $data['bookmark'];
                $this->load->view('templates/header', $data);
                $this->load->view('bookmarks/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($id=null)
        {       
                $data['bookmark'] = $this->Bookmarks_model->get_bookmarks($id);
               
                if (empty($data['bookmark']))
                {
                        show_404();
                }
                $data['title'] = $data['bookmark']['title'];

                $this->load->view('templates/header', $data);
                $this->load->view('bookmarks/view',$data);
                $this->load->view('templates/footer');
        }
        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a news item';

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('text', 'Text', 'required');

            if ($this->form_validation->run() === FALSE)
            {           echo "chay vao day";exit;
                $this->load->view('templates/header', $data);
                $this->load->view('news/create');
                $this->load->view('templates/footer');
                
            }
            else
            {
                $this->news_model->set_news();
                $this->load->view('news/success');
            }
}
}