<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {


	public function index()
	{
   
    $this->load->view('header');
    $this->load->view('password/index');
    $this->load->view('footer');
 

	}
    public function reset()
	{
   
    $this->load->view('header');
    $this->load->view('password/reset');
    $this->load->view('footer');
 

	}
    public function change(){
        $this->load->model('User_model');
        if($this->input->post('username') == ""){
           
            redirect('password/reset');
        }else{
           	// Update Task Data
			$update = array
            (
        // 'email'=>  $this->in/put->post('username'),
        'pass'  => sha1(trim($this->input->post('new_password')))
                        
            );
        $this->load->model('User_model'); // First load the model
        //Update User Model
        $this->User_model->updatePassword($update); 
        echo "<script>
            alert('Successfully Updated !!!');
          
            </script>";
        redirect('home');

        }
       
     }

}
