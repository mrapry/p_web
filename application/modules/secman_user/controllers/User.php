<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller {

    public function index()
    {
        $data['content_detail']="secman_user/user";
        $data['content']="secman_user/nav-primary";
        $data['title']="List User";
        $this->load->view('layout/main',$data);  
    }

}

/* End of file User.php */
