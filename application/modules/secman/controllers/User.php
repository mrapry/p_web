<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller {

    public function __construct()
    {
        $this->load->model("UserModel", "user");
    }

    public function index()
    {
        $data['content_detail']="secman/user";
        $data['content']="secman/nav-primary";
        $data['title']="List User";
        $this->load->view('layout/main',$data);  
    }

    public function getuser()
    {
        $p = $this->user->get();
        echo json_encode($p);
    }

    public function getUserStatus()
    {
        $p = $this->user->getStatus('REGISTER');
        echo json_encode($p);
    }

    public function getUserList()
    {
        $p = $this->user->getStatus('ACTIVATE');
        echo json_encode($p);
    }

    public function saveuser()
    {
        $data = $this->input->post('data');
        $p = $this->user->post($data);
        echo json_encode($p);
    }

    public function edituser()
    {
        $data = $this->input->post('data');
        $p = $this->user->put($data);
        echo json_encode($p);
    }

    public function deleteuser()
    {
        $data = $this->input->post('data');
        $p = $this->user->delete($data);
        echo json_encode($p);
    }

    public function updateStatus()
    {
        $data = $this->input->post('data');
        $inputUser = json_decode($data);
        if($inputUser->status == "REMOVE") {
            $p = $this->user->delete($data);
        } else {
        $p = $this->user->postUpdateStatus($data);
        }
        echo json_encode($p);
    }

}

/* End of file User.php */
