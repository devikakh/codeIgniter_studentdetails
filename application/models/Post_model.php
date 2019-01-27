<?php
 class Post_model extends CI_Model{
     public function __construct(){
         $this->load->database();
     }
     
     public function get_posts($id = FALSE){
         if($id === FALSE){
             $query = $this->db->get('insert_table');
             return $query->result_array();
         }
         $q = $this->db->get_where('insert_table',array('id' => $id));
         return $q->row_array();
     }
 }