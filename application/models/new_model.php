<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class New_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }


		public function set_bookmark($slug = FALSE)
		{
		        if ($slug === FALSE)
		        {
		                $query = $this->db->get('bookmarks');
		                return $query->result_array();
		        }

		}
		//public function set_user()
		//{
		       
		             //   $query = $this->db->get('user');
		              //  return $query->result_array();
		       // }

		
}