<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Task_model extends CI_Model{
	public function __construct() {
    parent::__construct();

      $this->load->database();

}

	// View All TASKS
	public function get(){
		$this->db->select('*');
		// $this->db->where('b_status','active' );
		$query = $this->db->get('viewtasks');
		if($query->num_rows()>0){
			return $query->result();
		}else{

			return false;
		}
	}
	// View All Tasks Assigned bY ME
	public function taskAssigned(){
		$this->db->select('*');
		 $this->db->where('tcreated_by',$this->session->userdata('user_id'));
		$query = $this->db->get('viewtasks');
		if($query->num_rows()>0){
			return $query->result();
		}else{

			return false;
		}
	}
	//View Task Assigned By Me Count
	public function taskAssignedCount(){
		$this->db->select('*');
		 $this->db->where('tcreated_by',$this->session->userdata('user_id'));
		$query = $this->db->get('viewtasks');
		
			return $query->num_rows();
		
	}
	// Task Assigned By Me Summary  
	public function taskAssignedSummary(){
		$this->db->select('assignedto,email,full_name,task_status,count(task_status) as total');
		$this->db->from('viewtasks');
		// $this->db->where('created_at >=',$start_date);
		 $this->db->where('tcreated_by ',$this->session->userdata('user_id'));
		//  $this->db->where('assignedto ',$this->session->userdata('user_id'));
		$this->db->group_by('task_status');
		$this->db->group_by('email');
		$this->db->group_by('full_name');
		$this->db->group_by('assignedto');
		$this->db->order_by("assignedto", "asc");
		$this->db->order_by("task_status", "desc");
		$query = $this->db->get();
		
		if($query->num_rows()>0){
			return $query->result();
		}else{

			return false;
		}
	}
	
	// View Tasks Assigned to me By Status
	public function taskAssignedToMeByStatus($param1){
		$this->db->select('*');
		 $this->db->where('task_status ',$param1);
		 $this->db->where('assignedto ',$this->session->userdata('user_id'));
		$query = $this->db->get('viewtasks');
		if($query->num_rows()>0){
			return $query->result();
		}else{

			return false;
		}
	}
	// View Tasks Assigned to me
	public function taskAssignedToMe(){
		$this->db->select('*');
		 $this->db->where('assignedto ',$this->session->userdata('user_id'));
		$query = $this->db->get('viewtasks');
		if($query->num_rows()>0){
			return $query->result();
		}else{

			return false;
		}
	}
	//TASKS Assigned to me COunt
	public function taskAssignedToMeCount(){
		$this->db->select('*');
		 $this->db->where('assignedto ',$this->session->userdata('user_id'));
		$query = $this->db->get('viewtasks');
	
			return $query->num_rows();
		
	}
	// Task Assigned To me Summary
	public function taskAssignedToMeSummary(){
		$this->db->select('task_status,count(task_status) as total');
		$this->db->from('viewtasks');
		// $this->db->where('created_at >=',$start_date);
		 $this->db->where('assignedto ',$this->session->userdata('user_id'));
		$this->db->group_by('task_status');
		$query = $this->db->get();
		
		if($query->num_rows()>0){
			return $query->result();
		}else{

			return false;
		}
	}
	//Tasks assigned to me whic is not closed
	public function taskNotClosed(){
		$this->db->select('*');
		$this->db->where('task_status !=','Closed' );
	    $this->db->where('assignedto ',$this->session->userdata('user_id'));
		$query = $this->db->get('viewtasks');
		if($query->num_rows()>0){
			return $query->result();
		}else{

			return false;
		}
	}
	// Assign Tasks
 public function assign($data){

		$this->db->insert('tblhistory',$data);
		if($this->db->affected_rows()>0){
		       return true;
		}else{
			return false;
		}
	}
	//create Tasks
  public function create($data){

		$this->db->insert('tbltasks',$data);
		if($this->db->affected_rows()>0){
		       return true;
		}else{
			return false;
		}
	}
	// Get Single Task
	public function get_single($param1){

		$this->db->select('*');
		$this->db->where('task_id',$param1 );
		// $this->db->where('status','Open' );
		$query = $this->db->get('viewtasks');
		if($query->num_rows()>0){
			return $query->result();
		}else{

			return false;
		}
	}
	//View Singe TAsk History
	public function get_single_history($param1){
    	$this->db->select('*');
		$this->db->where('htask_id',$param1 );
		// $this->db->where('status !=','Cloed' );
		$query = $this->db->get('viewtaskhistory');
		if($query->num_rows()>0){
			return $query->result();
		}else{

			return false;
		}
		
	}
	// View Task History By User
	public function get_user_history($param1){
    	$this->db->select('*');
		$this->db->where('htask_id',$param1 );
		$this->db->where('owner ',$this->session->userdata('user_id'));
		$query = $this->db->get('viewtaskhistory');
		if($query->num_rows()>0){
			return $query->result();
		}else{

			return false;
		}
		
	}
	//Update Tasks
	public function update($data)
	{
		$this->db->where('task_id',$data['task_id'] );
		$this->db->update('tbltasks',$data);
	}
	//Update Task Assignment
	public function updateAssign($data)
	{
		$this->db->where('htask_id',$data['ru_task_id'] );
		$this->db->update('tblhistory',$data);
	}

//Get Tasks By Status and OWner
public function tasksByStatusAndOwner($param1,$param2){
	$this->db->select('*');
	$this->db->where('task_status',$param1 );
	$this->db->where('assignedto ',$param2);
	$this->db->where('tcreated_by ',$this->session->userdata('user_id'));
	$query = $this->db->get('viewtasks');
	if($query->num_rows()>0){
		return $query->result();
	}else{

		return false;
	}
}
}
?>
