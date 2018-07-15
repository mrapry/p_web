<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FishingVessel extends MX_Controller
{
    public function __construct()
    {
        $this->load->model("FishingGearModel", "gear");
        $this->load->model("VesselTypeModel", "vesselType");
        $this->load->model("VesselModel", "vessel");
    }

    public function index()
    {
        $data['content_detail']="master/vessel/vessel";
        $data['content']="master/nav-vessel";
        $data['title']="Data Kapal";
        $this->load->view('layout/main', $data);
    }

    public function addVessel()
    {
        $data['content_detail']="master/vessel/addVessel";
        $data['content']="master/nav-vessel";
        $data['title']="Tambah Data Kapal";
        $data['javascript'] = 'vessel/addVesselJs';
        $this->load->view('layout/main', $data);
    }

    public function editVessel($id = null)
    {
        $data['content_detail']="master/vessel/EditVessel";
        $data['content']="master/nav-vessel";
        $data['title']="Edit Data Kapal";
        $data['javascript'] = 'vessel/editVesselJs';
        $data['FishingVessel'] = $this->vessel->getById($id);
        $this->load->view('layout/main', $data);
    }

    public function company()
    {
        $data['content_detail']="master/company/company";
        $data['content']="master/nav-vessel";
        $data['title']="Data Perusahaan";
        $this->load->view('layout/main', $data);
    }

    public function addCompany()
    {
        $data['content_detail']="master/company/addCompany";
        $data['content']="master/nav-vessel";
        $data['title']="Tambah Perusahaan";
        $data['javascript'] = 'company/addCompanyJs';
        $this->load->view('layout/main', $data);
    }

    public function editCompany($id = null)
    {
        $data['content_detail']='master/company/editCompany';
        $data['content']="master/nav-vessel";
        $data['title']="Edit Perusahaan";
        $data['javascript'] = 'company/editCompanyJs';
        $data['company'] = $this->company->getById($id);
        $this->load->view('layout/main', $data);
    }

    public function vesselType()
    {
        $data['content_detail']="master/vesselType/vesselType";
        $data['content']="master/nav-vessel";
        $data['title']="Data Jenis Kapal";
        $this->load->view('layout/main', $data);
    }

    public function addVesselType()
    {
        $data['content_detail']="master/vesselType/addVesselType";
        $data['content']="master/nav-vessel";
        $data['title']="Tambah Jenis Kapal";
        $data['javascript'] = 'vesselType/addVesselTypeJs';
        $this->load->view('layout/main', $data);
    }

    public function editVesselType($id = null)
    {
        $data['content_detail']="master/vesselType/editVesselType";
        $data['content']="master/nav-vessel";
        $data['title']="Edit Jenis Kapal";
        $data['javascript'] = 'vesselType/editVesselTypeJs';
        $data['vesselType'] = $this->vesselType->getById($id);
        $this->load->view('layout/main', $data);
    }

    public function fishingGear()
    {
        $data['content_detail']="master/fishingGear/fishingGear";
        $data['content']="master/nav-vessel";
        $data['title']="Data Alat Tangkap";
        $this->load->view('layout/main', $data);
    }

    public function addFishingGear()
    {
        $data['content_detail']="master/fishingGear/addFishingGear";
        $data['content']="master/nav-vessel";
        $data['title']="Tambah Alat Tangkap";
        $data['javascript'] = 'fishingGear/addFishsingGearJs';
        $this->load->view('layout/main', $data);
    }

    public function editFishingGear($id = null)
    {
        $data['content_detail']="master/fishingGear/editFishingGear";
        $data['content']="master/nav-vessel";
        $data['title']="Edit Alat Tangkap";
        $data['javascript'] = 'fishingGear/addFishsingGearJs';
        $data['fishingGear'] = $this->fishingGear->getById($id);
        $this->load->view('layout/main', $data);
    }
    public function gearType()
    {
        $data['content_detail']="master/gearType/gearType";
        $data['content']="master/nav-vessel";
        $data['title']="Jenis Alat Tangkap";
        $this->load->view('layout/main', $data);
    }

    public function addGearType()
    {
        $data['content_detail']="master/gearType/addGearType";
        $data['content']="master/nav-vessel";
        $data['title']="Tambah Jenis Alat Tangkap";
        $data['javascript'] = 'gearType/addGearTypeJs';
        $this->load->view('layout/main', $data);
    }

    public function editGearType($id = null)
    {
        $data['content_detail']="master/gearType/editGearType";
        $data['content']="master/nav-vessel";
        $data['title']="Edit Jenis Alat Tangkap";
        $data['javascript'] = 'gearType/addFishsingGearJs';
        $data['gearType'] = $this->gearType->getById($id);
        $this->load->view('layout/main', $data);
    }

}

/* End of file FishingVessel.phpsel.php */
