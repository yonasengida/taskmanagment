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

    public function validate(){

    }

    public function process(){
        
    }

}
