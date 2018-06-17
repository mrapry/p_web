<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class VesselName extends MX_Controller {

    public function __construct()
    {
        $this->load->model("VesselNameModel", "vessel");
    }

    public function getVessel()
    {
        $p = $this->vessel->get();
        echo json_encode($p);
    }

    public function saveVessel()
    {
        $data = $this->input->post('data');
        $p = $this->vessel->post($data);
        echo json_encode($p);
    }

    public function editVessel()
    {
        $data= $this->input->post('data');
        $p = $this->vessel->put($data);
        echo json_encode($p);
    }

    public function deleteVessel()
    {
        $data= $this->input->post('data');
        $p = $this->vessel->delete($data);
        echo json_encode($p);
    }

}

/* End of file VesselName.php */
