<?php
    class Users extends CI_Controller{
        public function login(){
            $data['title']="Login";
            
            if (!isset($_POST['email'])){
                $this->load->view('header');
                $this->load->view('login');
            }
            else{
                $email=$_POST['email'];
                $password=$_POST['password'];
                $user=$this->user_model->login($email,$password);

                if(!empty($user)){
                    $user_data=array(
                        'user_id'=>$user->user_id,
                        'email'=>$user->user_email,
                        'logged_in'=>true,

                    );
                    
                    $this->session->set_userdata($user_data);
                    header("Location: ". base_url(). "projects/index");
                }else{
                    header("Location: ". base_url(). "users/login");
                    
                }
                
            }
    }
    }