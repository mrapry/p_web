<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Infrastructure extends MX_Controller {

    public function __construct()
    {
        $this->load->model("InfrastructureModel", "infrastructure");
    }

    public function getInfrastructure()
    {
        $p = $this->infrastructure->get();
        echo json_encode($p);
    }

    public function saveInfrastructure()
    {
        $data = $this->input->post('data');
        $p = $this->infrastructure->post($data);
        echo json_encode($p);
    }

    public function editInfrastructure()
    {
        $data= $this->input->post('data');
        $p = $this->infrastructure->put($data);
        echo json_encode($p);
    }

    public function deleteInfrastructure()
    {
        $data= $this->input->post('data');
        $p = $this->infrastructure->delete($data);
        echo json_encode($p);
    }

}

/* End of file Infrastructure.php */

