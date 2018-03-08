<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Address extends MX_Controller {

    public function index()
    {
        $data['content_detail']="master/negara";
        $data['content']="master/nav-primary";
        $data['title']="Master Negara";
        $this->load->view('layout/main',$data);
    }

    public function provinsi()
    {
        $data['content_detail']="master/provinsi";
        $data['content']="master/nav-primary";
        $data['title']="Master Provinsi";
        $this->load->view('layout/main',$data);
    }

    public function kota()
    {
        $data['content_detail']="master/kota";
        $data['content']="master/nav-primary";
        $data['title']="Master Kota";
        $this->load->view('layout/main',$data);
    }

    public function kecamatan()
    {
        $data['content_detail']="master/kecamatan";
        $data['content']="master/nav-primary";
        $data['title']="Master Kecamatan";
        $this->load->view('layout/main',$data);
    }

    public function kelurahan()
    {
        $data['content_detail']="master/kelurahan";
        $data['content']="master/nav-primary";
        $data['title']="Master Kelurahan";
        $this->load->view('layout/main',$data);
    }

}

/* End of file Address.php */
