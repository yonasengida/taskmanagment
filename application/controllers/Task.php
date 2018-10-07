    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {


	function __construct(){
			parent::__construct();
			$this->check_isvalidated();
	}
	 private function check_isvalidated(){
	 			if(! $this->session->userdata('validated')){
	 					redirect('auth');
	 			}
	 	}
   //View Task Function
	public function index()
	{
    $this->load->helper('url');
    $this->load->view('header');
    $this->load->model('Task_model');
    $data['profiles']=$this->Task_model->taskAssigned();
	//  $data['profiles']=$this->$this->Task_model->taskAssignedToMeCount();
	//  $data['profiles']=$this->Task_model->taskAssignedCount();
    $this->load->view('task/index',$data);
    $this->load->view('footer'); 
	}
	//Create TAsk Function
	public function create(){	
		//
	    	$this->load->helper('url');
			$this->load->model('Task_model');
			$taskfield= array(
			'title'  => $this->input->post('title'),
		    'description'  => $this->input->post('desc'),
		    'deadline'  => $this->input->post('deadline'),
			'tdept_id'  => $this->input->post('dept'),
			'tcreated_by'=>$this->session->userdata('user_id'),	
			'creator'=>$this->session->userdata('full_name'),	
			'approved'=>'false',	
			'assignedto'=>	$this->input->post('owner'),			
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
			'hcreated_by'=>$this->session->userdata('user_id'),	
			'hcreated_at'  => date('Y-m-d H:i:s')
	      );
		  // Excute Assign Task
          $this->Task_model->assign($assignTask);
		  	redirect('task');		
	}
	//Update Task
	public function update(){
		$taskdata = array
				(
			'task_id'  =>  $this->input->post('u_task_id'),
			'title'  => $this->input->post('u_title'),
		    'description'  => $this->input->post('u_desc'),
		    'deadline'  => $this->input->post('u_deadline'),
			'tdept_id'  => $this->input->post('u_dept')				
				);
	    $this->load->model('Task_model'); // First load the model
        $this->Task_model->update($taskdata); // call the method from the controller
		$this->session->set_flashdata('msg',"Updated Successfully" );
		redirect('task');
	}
	// RE-ASSIGN TASK
	public function reassign(){
		// echo $this->input->post('ru_task_id') ;
			// Update Task Assignment
			$taskHistdata = array
				(
			'htask_id'  =>  $this->input->post('ru_task_id'),
			'owner'  => $this->input->post('ru_owner')
		    				
				);
				// Update Task Data
			$updt_taskdata = array
				(
			'task_id'  =>  $this->input->post('ru_task_id'),
			'assignedto'  => $this->input->post('ru_owner')
		    				
				);
			$this->load->model('Task_model'); // First load the model
			//Update Task History
			$this->Task_model->updateAssign($taskHistdata); // call the method from the controller
			//Update TASK
			$this->Task_model->update($updt_taskdata); // call the method from the controller
			$this->session->set_flashdata('msg',"Updated Successfully" );
			redirect('home');
	}
	// GET SINGLE TASK
		public function getById(){
				$this->load->model('Task_model');
				echo json_encode($this->Task_model->get_single(trim($this->input->post('id'))));
		}
         public function getHistoryById(){
				$this->load->model('Task_model');
			    echo json_encode($this->Task_model->get_single_history(trim($this->input->post('id'))));
		}
		 public function taskNotClosed(){
				$this->load->model('Task_model');
			    echo json_encode($this->Task_model->taskNotClosed());
		}
		public function followupview(){
			// echo $this->input->get('id');
			$this->load->helper('url');
			$this->load->view('header');
			$this->load->model('Task_model');
			$data['profiles']=$this->Task_model->get_user_history(trim($this->input->get('id')));
			$this->load->view('task/updatetask',$data);
			$this->load->view('footer'); 
		}
		public function followUpUpdate(){
			
			$assignTask= array(
			'htask_id'  => $this->input->post('taskid'),
		    'owner'  => $this->input->post('owner'),
		    'status'  => $this->input->post('status'),
		   
			'remark' =>$this->input->post('remark'),
			'hupdated_at'  => date('Y-m-d H:i:s')
	      );
		  // Excute Assign Task
		   $this->load->model('Task_model');
            $this->Task_model->assign($assignTask);
						
            $updateTask= array(
			'task_id'  => $this->input->post('taskid'),
			'task_status'  => $this->input->post('status'),
			'progress'  => $this->input->post('progress'),
			'tupdated_at'  => date('Y-m-d H:i:s')
	      );
		   $this->Task_model->update($updateTask);
		 
		  
		  	redirect('task');
			
		}
		//task Assigned to me by Status
		public function taskAssignedToMeByStatus(){
			$this->load->model('Task_model');
			echo json_encode($this->Task_model->taskAssignedToMeByStatus(trim($this->input->post('task_status'))));
	}
		//task Assigned to me 
		 public function taskAssignedToMe(){
				$this->load->model('Task_model');
			    echo json_encode($this->Task_model->taskAssignedToMe());
		}
		//task Assigned to me Count
		 public function taskAssignedToMeCount(){
				$this->load->model('Task_model');
			    echo json_encode($this->Task_model->taskAssignedToMeCount());
		}
		
			//task Assigned to me Summary
		 public function taskAssignedToMeSummary(){
				$this->load->model('Task_model');
			    echo json_encode($this->Task_model->taskAssignedToMeSummary());
		}
			//task Assigned  Summary
		 public function taskAssignedSummary(){
				$this->load->model('Task_model');
			    echo json_encode($this->Task_model->taskAssignedSummary());
		}
		
		// Task Assigned
		 public function taskAssigned(){
				$this->load->model('Task_model');
			    echo json_encode($this->Task_model->taskAssigned());
		}
		// Task Assigned Count
		 public function taskAssignedCount(){
				$this->load->model('Task_model');
			    echo json_encode($this->Task_model->taskAssignedCount());
		}
		//gET tASK bY sTATUS AND oWNER/assigned To
		public function tasksByStatusAndOwner(){
			$this->load->model('Task_model');
			echo json_encode($this->Task_model->tasksByStatusAndOwner(trim($this->input->post('status')),trim($this->input->post('owner'))));
		}

}
