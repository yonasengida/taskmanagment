<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	// function __construct(){
 //         parent::__construct();
 //     }


    public function index($msg = NULL){
       
        //  $result = $this->Auth_model->validate();
        // Load our view to be displayed
        // to the user
         $data['msg'] = $msg;
		 $this->load->view('header');
         $this->load->view('auth/index', $data);
    }

    public function process(){
					
        $this->load->model('Auth_model');
        // Validate the user can login
        $result = $this->Auth_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }
        else
        {

              redirect('task');
        }
		
    }
		public function logout(){
			  // $this-session_write_close();
        $this->session->sess_destroy();
        redirect('auth/index');
    }


	}
