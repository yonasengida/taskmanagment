<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Task_model extends CI_Model{
	public function __construct() {
    parent::__construct();

      $this->load->database();

}

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
	public function taskAssignedCount(){
		$this->db->select('*');
		 $this->db->where('tcreated_by',$this->session->userdata('user_id'));
		$query = $this->db->get('viewtasks');
		
			return $query->num_rows();
		
	}
	// Task Assigned To me Summary
	public function taskAssignedSummary(){
		$this->db->select('email,full_name,task_status,count(task_status) as total');
		$this->db->from('viewtasks');
		// $this->db->where('created_at >=',$start_date);
		 $this->db->where('tcreated_by ',$this->session->userdata('user_id'));
		//  $this->db->where('assignedto ',$this->session->userdata('user_id'));
		$this->db->group_by('task_status');
		$this->db->group_by('email');
		$this->db->group_by('full_name');
		$query = $this->db->get();
		
		if($query->num_rows()>0){
			return $query->result();
		}else{

			return false;
		}
	}

	
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
	//MY TASKS FUNCTION
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
	
 public function assign($data){

		$this->db->insert('tblhistory',$data);
		if($this->db->affected_rows()>0){
		       return true;
		}else{
			return false;
		}
	}
  public function create($data){

		$this->db->insert('tbltasks',$data);
		if($this->db->affected_rows()>0){
		       return true;
		}else{
			return false;
		}
	}
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
	
	public function update($data)
	{
		$this->db->where('task_id',$data['task_id'] );
		$this->db->update('tbltasks',$data);
	}
	public function updateAssign($data)
	{
		$this->db->where('htask_id',$data['ru_task_id'] );
		$this->db->update('tblhistory',$data);
	}


}
?>
