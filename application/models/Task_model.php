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
	public function taskNotClosed(){
		$this->db->select('*');
		$this->db->where('status !=','Closed' );
	
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

		$this->db->insert('tbltaks',$data);
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
		$this->db->where('task_id',$param1 );
		$this->db->where('status','Open' );
		$query = $this->db->get('viewtasks');
		if($query->num_rows()>0){
			return $query->result();
		}else{

			return false;
		}
		
	}
	
	public function update($data)
	{
		$this->db->where('task_id',$data['task_id'] );
		$this->db->update('tbltaks',$data);
	}
	public function updateAssign($data)
	{
		$this->db->where('htask_id',$data['ru_task_id'] );
		$this->db->update('tblhistory',$data);
	}


}
?>
