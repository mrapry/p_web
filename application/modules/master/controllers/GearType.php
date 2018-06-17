<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class GearType extends MX_Controller {

    public function __construct()
    {
        $this->load->model("GearTypeModel", "gearType");
    }
    public function getGearType()
    {
        $p = $this->gearType->get();
        echo json_encode($p);
    }

    public function saveGearType()
    {
        $data = $this->input->post('data');
        $p = $this->gearType->post($data);
        echo json_encode($p);
    }

    public function editGearType()
    {
        $data= $this->input->post('data');
        $p = $this->gearType->put($data);
        echo json_encode($p);
    }

    public function deleteGearType()
    {
        $data= $this->input->post('data');
        $p = $this->gearType->delete($data);
        echo json_encode($p);
    }

}

/* End of file GearType.php */
