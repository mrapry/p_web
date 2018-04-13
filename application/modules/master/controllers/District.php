<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class District extends MX_Controller
{

    public function __construct()
    {
        $this->load->model("DistrictModel", "district");
    }

    public function getDistrict()
    {
        $p = $this->district->get();
        echo json_encode($p);
    }

    public function saveDistrict()
    {
        $data = $this->input->post('data');
        $p = $this->district->post($data);
        echo json_encode($p);
    }

    public function editDistrict()
    {
        $data = $this->input->post('data');
        $p = $this->district->put($data);
        echo json_encode($p);
    }

    public function deleteDistrict()
    {
        $data = $this->input->post('data');
        $p = $this->district->delete($data);
        echo json_encode($p);
    }

}

/* End of file District.php */
