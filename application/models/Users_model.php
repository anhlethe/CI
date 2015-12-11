<?php

class Users_model extends CI_Model {

          public function __construct()
        {
                $this->load->database();
        }
        public function get_users($user,$pass)
                {
                    
                       
                        $query = $this->db->get_where('bookmarks', array('user' => $user,'pass'=>$pass));
                        var_dump($query->row_array());exit;
                        return $query->row_array();
                }
}