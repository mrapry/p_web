<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Infrastructure extends MX_Controller {

    public function __construct()
    {
        $this->load->model("InfrastructureModel", "infrastructure");
    }

    public function getInfrastructure()
    {
        isAjax();
        $p = $this->infrastructure->get();
        echo json_encode($p);
    }

    public function saveInfrastructure()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->infrastructure->post($data);
        echo json_encode($p);
    }

    public function editInfrastructure()
    {
        isAjax();
        $data= $this->input->post('data');
        $p = $this->infrastructure->put($data);
        echo json_encode($p);
    }

    public function deleteInfrastructure()
    {
        isAjax();
        $data= $this->input->post('data');
        $p = $this->infrastructure->delete($data);
        echo json_encode($p);
    }

}

/* End of file Infrastructure.php */

