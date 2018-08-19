<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Address extends MX_Controller
{

    public function __construct()
    {
        $this->load->model("ProvinceModel", "province");
        $this->load->model("CityModel", "city");
        $this->load->model("DistrictModel", "district");
        $this->load->model("SubdistrictModel", "subdistrict");
    }

    public function index()
    {
        $data['content_detail'] = "area/province/province";
        $data['content'] = "area/nav-primary";
        $data['title'] = "area Negara";
        $this->load->view('layout/main', $data);
    }

    public function province()
    {
        $data['content_detail'] = "area/province/province";
        $data['content'] = "area/nav-primary";
        $data['title'] = "area province";
        $this->load->view('layout/main', $data);
    }

    public function add_province()
    {
        $data['content_detail'] = "area/province/add_province";
        $data['content'] = "area/nav-primary";
        $data['title'] = "Tambah Province";
        $data['javascript'] = 'province/add_provinceJs';
        $this->load->view('layout/main', $data);
    }

    public function edit_province($id = null)
    {
        $data['content_detail'] = "area/province/edit_province";
        $data['content'] = "area/nav-primary";
        $data['title'] = "Edit Provinsi";
        $data['javascript'] = 'province/edit_provinceJs';
        $data['province'] = $this->province->getById($id);
        $this->load->view('layout/main', $data);
    }

    public function city()
    {
        $data['content_detail'] = "area/city/city";
        $data['content'] = "area/nav-primary";
        $data['title'] = "area Kabupaten / Kota";
        $this->load->view('layout/main', $data);
    }

    public function add_city()
    {
        $data['content_detail'] = "area/city/add_city";
        $data['content'] = "area/nav-primary";
        $data['title'] = "Tambah Kota";
        $data['javascript'] = 'city/add_cityJs';
        $this->load->view('layout/main', $data);
    }

    public function edit_city($id = null)
    {
        $data['content_detail'] = "area/city/edit_city";
        $data['content'] = "area/nav-primary";
        $data['title'] = "Edit Kota";
        $data['javascript'] = 'city/edit_cityJs';
        $data['city'] = $this->city->getById($id);
        $this->load->view('layout/main', $data);
    }

    public function district()
    {
        $data['content_detail'] = "area/district/district";
        $data['content'] = "area/nav-primary";
        $data['title'] = "area Kecamatan";
        $this->load->view('layout/main', $data);
    }

    public function add_district()
    {
        $data['content_detail'] = "area/district/add_district";
        $data['content'] = "area/nav-primary";
        $data['title'] = "Tambah Kecamatan";
        $data['javascript'] = 'district/add_districtJs';
        $this->load->view('layout/main', $data);
    }

    public function edit_district($id = null)
    {
        $data['content_detail'] = "area/district/edit_district";
        $data['content'] = "area/nav-primary";
        $data['title'] = "Edit Kecamatan";
        $data['javascript'] = 'district/edit_districtJs';
        $data['district'] = $this->district->getById($id);
        $this->load->view('layout/main', $data);
    }

    public function subdistrict()
    {
        $data['content_detail'] = "area/subdistrict/subdistrict";
        $data['content'] = "area/nav-primary";
        $data['title'] = "area Kelurahan";
        $this->load->view('layout/main', $data);
    }
    
    public function add_subdistrict()
    {
        $data['content_detail'] = "area/subdistrict/add_subdistrict";
        $data['content'] = "area/nav-primary";
        $data['title'] = "Tambah Kelurahan";
        $data['javascript'] = 'subdistrict/add_subdistrictJs';
        $this->load->view('layout/main', $data);
    }

    public function edit_subdistrict($id = null)
    {
        $data['content_detail']="area/subdistrict/edit_subdistrict";
        $data['content']="area/nav-primary";
        $data['title']="Edit Kelurahan";
        $data['javascript'] = 'subdistrict/edit_subdistrictJs';
        $data['kelurahan'] = $this->subdistrict->getById($id);
        $this->load->view('layout/main', $data);
    }


}

/* End of file Address.php */
