<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UnitWorking extends MX_Controller 
{
    public function __construct()
    {
        $this->load->model("UnitWorkingModel", "unit");
    }

    public function getUnit()
    {
        isAjax();
        $p = $this->unit->get();
        echo json_encode($p);
    }

    public function saveUnit()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->unit->post($data);
        echo json_encode($p);
    }

    public function editUnit()
    {
        isAjax();
        $data= $this->input->post('data');
        $p = $this->unit->put($data);
        echo json_encode($p);
    }

    public function deleteUnit()
    {
        isAjax();
        $data= $this->input->post('data');
        $p = $this->unit->delete($data);
        echo json_encode($p);
    }

}

/* End of file UnitWorking.php */
