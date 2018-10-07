<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('report/index');
        $this->load->view('footer');
    }    
    
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
