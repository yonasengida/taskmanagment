    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {


	public function index()
	{
    $this->load->helper('url');
    $this->load->view('header');
    $this->load->model('Department_model');
    $data['profiles']=$this->Department_model->get();
    $this->load->view('department/index',$data);
    $this->load->view('footer');
 

	}
    public function getAll(){
       $this->load->model('Department_model');
	   echo json_encode($this->Department_model->get());  
    }

}
