<?php
   class Project_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_projects($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('projects');
            return $query->result_array();
        } else {
            // Specify the table name to avoid ambiguity
            $this->db->select('projects.*, images.*'); // Select the relevant fields
            $this->db->from('projects');
            $this->db->join('images', 'images.project_id = projects.project_id', 'left');
            $this->db->where('projects.project_id', $id);
            $query = $this->db->get();
            return $query->result_array(); // Return all rows including images
        }
    }
    public function get_image($id) {
        $this->db->select('projects.*, images.*'); // Select the relevant fields
        $this->db->from('images');
        $this->db->join('projects', 'projects.project_id = images.project_id', 'left');
        $this->db->where('images.image_id', $id); // Ensure you're using the correct field for the image ID
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            return $query->row_array(); // Return the data if found
        } else {
            return null; // Return null if no data is found
        }
    }
    public function insert_project(){
        $data=array(
            'project_title'=>$_POST['title'],
            'project_description'=>$_POST['desc'],
            'project_company'=>$_POST['company'],
            'project_url'=>$_POST['url'],
            'project_notes'=>$_POST['notes']
        );
        return $this->db->insert('projects', $data);
    }
    
}
