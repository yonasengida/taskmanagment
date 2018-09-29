    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {


   //View Task Function
	public function index()
	{
    $this->load->helper('url');
    $this->load->view('header');
    $this->load->model('Task_model');
    $data['profiles']=$this->Task_model->get();
    $this->load->view('task/index',$data);
    $this->load->view('footer');
 
	}
	//Create TAsk Function
	public function create(){
		
	    	$this->load->helper('url');
			$this->load->model('Task_model');
			$taskfield= array(
			'title'  => $this->input->post('title'),
		    'description'  => $this->input->post('desc'),
		    'deadline'  => $this->input->post('deadline'),
			'tdept_id'  => $this->input->post('dept'),
						
			'tcreated_at'  => date('Y-m-d H:i:s')
	     );
		 	// Excute create task
			$query= $this->Task_model->create($taskfield);
			//last inserted id
			$task_id= $this->db->insert_id();
			//Assign TAsk
			$assignTask= array(
			'htask_id'  => $task_id,
		    'owner'  => $this->input->post('owner'),
		    'status'  => "Open",
			'hcreated_at'  => date('Y-m-d H:i:s')
	      );
		  // Excute Assign Task
          $this->Task_model->assign($assignTask);
		  	redirect('task');

		// echo $query;
	}
	public function update(){
		$taskdata = array
				(
			'task_id'  =>  $this->input->post('u_task_id'),
			'title'  => $this->input->post('u_title'),
		    'description'  => $this->input->post('u_desc'),
		    'deadline'  => $this->input->post('u_deadline'),
			'tdept_id'  => $this->input->post('u_dept'),
				
				);
	    $this->load->model('Task_model'); // First load the model
        $this->Branch_model->updateBranch($data); // call the method from the controller
		$this->session->set_flashdata('msg',"Updated Successfully" );
		redirect('task');
	}
		public function getById(){
			$this->load->model('Task_model');
			echo json_encode($this->Task_model->get_single(trim($this->input->post('id'))));
	}
}
