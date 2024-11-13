<?php   
    class User_model extends CI_Model{
        public function login($email,$password){
            $this->db->where('user_email',$email);
            $this->db->where('user_password',$password);
            $result=$this->db->get('users');
            
            if($result->num_rows()>0){
                return $result->row(0);
            }
            else{
                return false;
            }
        }
    }