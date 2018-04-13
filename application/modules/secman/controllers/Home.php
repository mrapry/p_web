<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

    public function __construct()
    {
        $this->load->model("RoleModel", "role");
    }

    public function index()
    {
        $data['content_detail']="secman/user/user";
        $data['content']="secman/nav-primary";
        $data['title']="List User (Menunggu verifikasi)";
        $this->load->view('layout/main',$data);
    }

    public function approvalUser()
    {
        $data['content_detail']="secman/user/user";
        $data['content']="secman/nav-primary";
        $data['title']="List User (Menunggu verifikasi)";
        $this->load->view('layout/main',$data);
    }

    public function roleGroupUser()
    {
        $data['content_detail']="secman/role/role";
        $data['content']="secman/nav-primary";
        $data['title']="List Role";
        $this->load->view('layout/main',$data);
    }

    public function addRole($id = null)
    {
        $data['content_detail']="secman/role/addRole";
        $data['content']="secman/nav-primary";
        $data['javascript'] = 'role/addRoleJs';
        $data['title']="List Role";
        $data['role'] = $this->role->getById($id);
        $this->load->view('layout/main',$data);
    }

    public function editRole($id = null)
    {
        $data['content_detail']="secman/role/editRole";
        $data['content']="secman/nav-primary";
        $data['javascript'] = 'role/editRoleJs';
        $data['title']="Edit Role";
        $data['role'] = $this->role->getById($id);
        $this->load->view('layout/main',$data);
    }

    public function listUser()
    {
        $data['content_detail']="secman/user/userList";
        $data['content']="secman/nav-primary";
        $data['title']="List User";
        $this->load->view('layout/main',$data);
    }

}

/* End of file Home.php */
