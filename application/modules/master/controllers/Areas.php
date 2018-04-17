<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Areas extends MX_Controller 
{
    public function __construct()
    {
        $this->load->model("TypeUnitModel", "type");
        $this->load->model("UnitWorkingModel", "unit");
    }

    public function index()
    {
        $data['content_detail']="master/unitWorking/unitWorking";
        $data['content']="master/nav-areas";
        $data['title']="Data Unit Kerja";
        $this->load->view('layout/main', $data);
    }

    public function addUnitWorking()
    {
        $data['content_detail']="master/unitWorking/addUnitWorking";
        $data['content']="master/nav-areas";
        $data['title']="Tambah Unit Kerja";
        $data['javascript'] = 'unitWorking/addUnitWorkingJs';
        $this->load->view('layout/main', $data);
    }

    public function editUnitWorking($id = null)
    {
        $data['content_detail']="master/unitWorking/editUnitWorking";
        $data['content']="master/nav-areas";
        $data['title']="Edit Unit Kerja";
        $data['javascript'] = 'unitWorking/editUnitWorkingJs';
        $data['unitWorking'] = $this->unit->getById($id);
        $this->load->view('layout/main', $data);
    }

    public function typeUnit()
    {
        $data['content_detail']="master/typeUnit/typeUnit";
        $data['content']="master/nav-areas";
        $data['title']="Tipe Unit Kerja";
        $this->load->view('layout/main', $data);
    }

    public function addTypeUnit()
    {
        $data['content_detail']="master/typeUnit/addTypeUnit";
        $data['content']="master/nav-areas";
        $data['title']="Tambah Unit Kerja";
        $data['javascript'] = 'typeUnit/addTypeUnitJs';
        $this->load->view('layout/main', $data);
    }

    public function editTypeUnit($id = null)
    {
        $data['content_detail']="master/typeUnit/editTypeUnit";
        $data['content']="master/nav-areas";
        $data['title']="Edit Unit Kerja";
        $data['javascript'] = 'typeUnit/editTypeUnitJs';
        $data['typeUnit'] = $this->type->getById($id);
        $this->load->view('layout/main', $data);
    }

}

/* End of file Areas.php */
