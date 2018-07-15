<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Areas extends MX_Controller 
{
    public function __construct()
    {
        $this->load->model("TypeUnitModel", "type");
        $this->load->model("UnitWorkingModel", "unit");
        $this->load->model("MappingModel", "mapping");
        $this->load->model("InfrastructureModel", "infrastructure");
        $this->load->model("FacilitiesModel", "facilities");
        $this->load->model("CityModel", "city");
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

    public function mapping()
    {
        $data['content_detail']="master/mapping/mapping";
        $data['content']="master/nav-areas";
        $data['title']="Mapping Unit Kerja";
        $this->load->view('layout/main', $data);
    }

    public function addMapping()
    {
        $data['content_detail']="master/mapping/addMapping";
        $data['content']="master/nav-areas";
        $data['title']="Tambah Mapping Unit Kerja";
        $data['javascript'] = 'mapping/addMappingJs';
        $this->load->view('layout/main', $data);
    }

    public function infrastructure()
    {
        $data['content_detail'] = "master/infrastructure/infrastructure";
        $data['content'] = "master/nav-areas";
        $data['title'] = "Data Prasarana";
        $this->load->view('layout/main', $data);
    }

    public function addInfrastructure()
    {
        $data['content_detail'] = "master/infrastructure/addInfrastructure";
        $data['content'] = "master/nav-areas";
        $data['title'] = "Tambah Prasarana";
        $data['javascript'] = 'infrastructure/addInfrastructureJs';
        $this->load->view('layout/main', $data);
    }
    
    public function editInfrastructure($id = null)
    {
        $data['content_detail'] = "master/infrastructure/editInfrastructure";
        $data['content'] = "master/nav-areas";
        $data['title'] = "Edit Prasarana";
        $data['javascript'] = 'infrastructure/editInfrastructureJs';
        $data['infrastructure'] = $this->infrastructure->getById($id);        
        $this->load->view('layout/main', $data);
    }

    public function facilities()
    {
        $data['content_detail'] = "master/facilities/facilities";
        $data['content'] = "master/nav-areas";
        $data['title'] = "Data Sarana";
        $this->load->view('layout/main', $data);
    }

    public function addFacilities()
    {
        $data['content_detail'] = "master/facilities/addFacilities";
        $data['content'] = "master/nav-areas";
        $data['title'] = "Tambah Sarana";
        $data['javascript'] = 'Facilities/addFacilitiesJs';
        $this->load->view('layout/main', $data);
    }
    
    public function editFacilities($id = null)
    {
        $data['content_detail'] = "master/facilities/editFacilities";
        $data['content'] = "master/nav-areas";
        $data['title'] = "Edit Sarana";
        $data['javascript'] = 'facilities/editFacilitiesJs';
        $data['facilities'] = $this->facilities->getById($id);        
        $this->load->view('layout/main', $data);
    }

}

/* End of file Areas.php */
