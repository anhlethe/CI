<?php

class Bookmarks_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_bookmarks($slug = FALSE)
		{
		        if ($slug === FALSE)
		        {
		                $query = $this->db->get('bookmarks'); 
		                return $query->result_array();
		        }

		        $query = $this->db->get_where('bookmarks', array('slug' => $slug));
		        return $query->row_array();
		}
		public function set_bookmarks()
		{
		    $this->load->helper('url');

		    $slug = url_title($this->input->post('title'), 'dash', TRUE);var_dump($slug);exit;

		    $data = array(
		        'title' => $this->input->post('title'),
		        'slug' => $slug,
		        'text' => $this->input->post('text')
		    );

		    return $this->db->insert('news', $data);
		}
}
		