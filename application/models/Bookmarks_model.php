<?php

class Bookmarks_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_bookmarks($id = FALSE)
		{
		        if ($id === FALSE)
		        {
		                $query = $this->db->get('bookmarks'); 
		                return $query->result_array();
		        }
		       
		        $query = $this->db->get_where('bookmarks', array('id' => $id));
		        //var_dump($query->row_array());exit;
		        return $query->row_array();
		}
		public function set_bookmarks()
		{
		    $this->load->helper('url');

		    $slug = url_title($this->input->post('title'), 'dash', TRUE);

		    $data = array(
		        'title' => $this->input->post('title'),
		        'slug' => $slug,
		        'text' => $this->input->post('text')
		    );

		    return $this->db->insert('news', $data);
		}
}
		