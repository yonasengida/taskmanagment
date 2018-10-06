<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{
 	public function __construct() {
    parent::__construct();

      $this->load->database();

}

   public function validate(){
       // grab user input
       $username = $this->security->xss_clean($this->input->post('username'));
    //    $password = trim(md5($this->security->xss_clean($this->input->post('password'))));
       $password = trim($this->security->xss_clean($this->input->post('password')));
       // Prep the query
      	$this->db->select('*');
       $this->db->where('email', $username);
       $this->db->where('pass', $password);
       $this->db->where('emp_status', 'active');

       // Run the query
       $query = $this->db->get('tblemployees');
       if($query->num_rows() == 1)
       {
           // If there is a user, then create session data
           $row = $query->row();
           $data = array(
                   'user_id' => $row->id,
                   'email' => $row->email,
                   'emp_id' => $row->emp_id,
                   'full_name' => $row->full_name,
                   'emp_dept' => $row->emp_dept,
                   'emp_status' => $row->emp_status,
                   'validated' => true,
                   'role' => $row->role
                   );

           $this->session->set_userdata($data);
           return true;
       }
       // If the previous process did not validate
       // then return false.
       return false;
   }

}
?>
