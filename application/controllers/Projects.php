<?php
        class Projects extends CI_Controller{
            public function index(){
                $data['title']="My Projects";
                $data['projects']=$this->project_model->get_projects(FALSE);
                
                $this->load->view('header');
                $this->load->view('index_page', $data);
                // $this->load->view('templates/footer');
            }
            public function view(){
                $id=$_POST['id'];
                $data['project']=$this->project_model->get_projects($id);
                
                $this->load->view('header');
                $this->load->view('view_page',$data);
                // $this->load->view('templates/footer');
            }
            public function view_image() {
                if (!isset($_POST['id'])) {
                    show_error('ID not provided.');
                    return; // Stop execution if ID is not set
                }
            
                $id = $_POST['id'];
                $data['image'] = $this->project_model->get_image($id);
            
                if ($data['image'] === null) {
                    show_error('Image not found.'); // Handle the case where no image is found
                    return;
                }
            
                $this->load->view('header');
                $this->load->view('image', $data);
            }

            public function add_project(){
                if(!isset($_POST['title'])){
                    $this->load->view('header');
                    $this->load->view('create_project');
                }
                else{
                    $this->project_model->insert_project();
                    header("Location: ". base_url(). "projects/index");
                }
                
            }
            public function welcome(){
                $this->load->view('welcome');
            }
            
        }