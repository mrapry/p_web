<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Address extends MX_Controller
{

    public function index()
    {
        $data['content_detail']="master/negara";
        $data['content']="master/nav-primary";
        $data['title']="Master Negara";
        $this->load->view('layout/main', $data);
    }

    public function provinsi()
    {
        $data['content_detail']="master/province/provinsi";
        $data['content']="master/nav-primary";
        $data['title']="Master Provinsi";
        $this->load->view('layout/main', $data);
    }

    public function addProvinsi()
    {
        $data['content_detail']="master/province/addProvinsi";
        $data['content']="master/nav-primary";
        $data['title']="Tambah Provinsi";
        $data['javascript'] = 'province/addProvinceJs';
        $this->load->view('layout/main',$data);
    }

    public function kota()
    {
        $data['content_detail']="master/city/kota";
        $data['content']="master/nav-primary";
        $data['title']="Master Kabupaten / Kota";
        $this->load->view('layout/main', $data);
    }

    public function addKota()
    {
        $data['content_detail']="master/city/addCity";
        $data['content']="master/nav-primary";
        $data['title']="Tambah Kota";
        $data['javascript'] = 'city/addCityJs';
        $this->load->view('layout/main',$data);
    }

    public function kecamatan()
    {
        $data['content_detail']="master/district/kecamatan";
        $data['content']="master/nav-primary";
        $data['title']="Master Kecamatan";
        $this->load->view('layout/main', $data);
    }

    public function addKecamatan()
    {
        $data['content_detail']="master/district/addDistrict";
        $data['content']="master/nav-primary";
        $data['title']="Tambah Kecamatan";
        $data['javascript'] = 'district/addDistrictJs';
        $this->load->view('layout/main',$data);
    }

    public function kelurahan()
    {
        $data['content_detail']="master/villages/kelurahan";
        $data['content']="master/nav-primary";
        $data['title']="Master Kelurahan";
        $this->load->view('layout/main', $data);
    }

    public function addKelurahan()
    {
        $data['content_detail']="master/villages/addVillages";
        $data['content']="master/nav-primary";
        $data['title']="Tambah Kelurahan";
        $data['javascript'] = 'villages/addVillagesJs';
        $this->load->view('layout/main',$data);
    }

}

/* End of file Address.php */
