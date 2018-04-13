<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class role extends MX_Controller {

    public function __construct()
    {
        $this->load->model("RoleModel", "role");
    }

    public function index()
    {
        $data['content_detail']="secman/user";
        $data['content']="secman/nav-primary";
        $data['title']="List User";
        $this->load->view('layout/main',$data);
    }

    public function getRole()
    {
        $p = $this->role->get();
        echo json_encode($p);
    }

    public function saveRole()
    {
        $data = $this->input->post('data');
        $p = $this->role->post($data);
        echo json_encode($p);
    }

    public function editRole()
    {
        $data = $this->input->post('data');
        $p = $this->role->put($data);
        echo json_encode($p);
    }

    public function deleteRole(){
        $data = $this->input->post('data');
        $p = $this->role->delete($data);
        echo json_encode($p);
    }


}