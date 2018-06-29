<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Facilities extends MX_Controller {

    public function __construct()
    {
        $this->load->model("FacilitiesModel", "facilities");
    }

    public function getFacilities()
    {
        isAjax();
        $p = $this->facilities->get();
        echo json_encode($p);
    }

    public function saveFacilities()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->facilities->post($data);
        echo json_encode($p);
    }

    public function editFacilities()
    {
        isAjax();
        $data= $this->input->post('data');
        $p = $this->facilities->put($data);
        echo json_encode($p);
    }

    public function deleteFacilities()
    {
        isAjax();
        $data= $this->input->post('data');
        $p = $this->facilities->delete($data);
        echo json_encode($p);
    }

}

/* End of file Facilities.php */
