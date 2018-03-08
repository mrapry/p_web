<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

    public function index()
    {
        $data['content_detail']="master/index";
        $data['content']="master/nav-primary";
        $data['title']="Master Negara";
        $this->load->view('layout/main',$data);   
    }

}

/* End of file Home.php */
