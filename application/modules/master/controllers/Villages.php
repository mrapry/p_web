<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Villages extends MX_Controller {

    public function __construct()
    {
        $this->load->model("VillagesModel", "villages");
    }

    public function getVillages()
    {
        $p = $this->villages->get();
        echo json_encode($p);
    }

    public function saveVillages()
    {
        $data = $this->input->post('data');
        $p = $this->villages->post($data);
        echo json_encode($p);
    }
}

/* End of file Villages.php */
