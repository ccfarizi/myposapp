<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_not_login();
        $this->load->model('user_m');
    }
    

	public function index(){	
        $data['row']  = $this->user_m->get();

		$this->template->load('template','user/user_data',$data);
		
	}
    
    public function add(){
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]',
            array ('matches'=>'%s not same!')
        );
        $this->form_validation->set_rules('level', 'Level', 'required');

        //message validation

        $this->form_validation->set_message('required','%s cannot be left blank');
        $this->form_validation->set_message('min_length','the minimum length {field} is 5 characters');
        $this->form_validation->set_message('is_unique','someone already has that {field}, try another?');
        
        
        
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template','user/user_form_add');
        } else {
            $post = $this->input->post(null,TRUE);
            $this->user_m->add($post);
            
            if ($this->db->affected_rows()>0) {
                echo "<script>";
                echo "alert('Insert Data Successfully')";
                echo "window.location='".site_url('user')."'";
                echo "</script>";

                echo 	"<script>
					 	alert('Insert Data Successfully')
						 window.location='".site_url('user')."'
						 </script>";
            }
        }
        
        
        
    }
}
