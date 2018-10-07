    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function index()
	{
    $this->load->helper('url');
    $this->load->view('header');
    $this->load->model('User_model');
    $data['profiles']=$this->User_model->get();
    $this->load->view('user/index',$data);
    $this->load->view('footer');
 

	}
    public function getAll(){
       $this->load->model('User_model');
	   echo json_encode($this->User_model->get());  
    }

    public function create(){
        $this->load->model('User_model');
			$user= array(
			'full_name'  => $this->input->post('name'),
		    'emp_dept'  => $this->input->post('dept'),
		    'pass'  => sha1(trim("pass@123")),
			'email'  => $this->input->post('username'),
			'emp_id'=>$this->input->post('emp_id'),	
			'emp_group'=>$this->input->post('group'),	
			'role'=>	$this->input->post('role'),			
			'ecreated_at'  => date('Y-m-d H:i:s')
	     );
		 	
          $this->User_model->create($user);
		  	redirect('user');	

    }

    public function update(){
        
    }

}
