<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Department_model extends CI_Model{
	public function __construct() {
    parent::__construct();

      $this->load->database();

}

	public function get(){
		$this->db->select('*');
		// $this->db->where('b_status','active' );
		$query = $this->db->get('tbldepartments');
		if($query->num_rows()>0){
			return $query->result();
		}else{

			return false;
		}
	}

  public function create($data){

		$this->db->insert('tbldepartments',$data);
		if($this->db->affected_rows()>0){
		       return true;
		}else{
			return false;
		}
	}
	public function get_single($param1){

		$this->db->select('*');
		$this->db->where('dept_id',$param1 );
		$query = $this->db->get('tbldepartments');
		if($query->num_rows()>0){
			return $query->result();
		}else{

			return false;
		}
	}
	public function getByGroup(){
		$this->db->select('*');
		$this->db->where('groups',$this->input->post('group'));
		$query = $this->db->get('tbldepartments');
		if($query->num_rows()>0){
			return $query->result();
		}else{

			return false;
		}
	}
	
	public function updateBranch($data)
	{

		$this->db->where('dept_id',$data['dept_id'] );
		$this->db->update('tbldepartments',$data);
	}


}
?>
