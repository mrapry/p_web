<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FishingGear extends MX_Controller {

    public function __construct()
    {
        $this->load->model("FishingGearModel", "gear");
    }

    public function getGear()
    {
        $p = $this->gear->get();
        echo json_encode($p);
    }

    public function saveGear()
    {
        $data = $this->input->post('data');
        $p = $this->gear->post($data);
        echo json_encode($p);
    }

    public function editGear()
    {
        $data= $this->input->post('data');
        $p = $this->gear->put($data);
        echo json_encode($p);
    }

    public function deleteGear()
    {
        $data= $this->input->post('data');
        $p = $this->gear->delete($data);
        echo json_encode($p);
    }

}

/* End of file FishingGear.php */
