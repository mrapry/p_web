<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class VesselType extends MX_Controller 
{

    public function __construct()
    {
        $this->load->model("VesselTypeModel", "vesselType");
    }

    public function getVesselType()
    {
        isAjax();
        $p = $this->vesselType->get();
        echo json_encode($p);
    }

    public function saveVesselType()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->vesselType->post($data);
        echo json_encode($p);
    }

    public function editVesselType()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->vesselType->put($data);
        echo json_encode($p);
    }

    public function deleteVesselType()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->vesselType->delete($data);
        echo json_encode($p);
    }

}

/* End of file VesselType.php */
