<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class New_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }


		public function set_user($slug = FALSE)
		{
		        if ($slug === FALSE)
		        {
		                $query = $this->db->get('users');
		                return $query->result_array();
		        }

		}
}