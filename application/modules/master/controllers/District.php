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
        isAjax();
        $getRequest= $this->input->get();
        $p = $this->district->get($getRequest);
        $p->draw = (int)$getRequest['draw'];
        $p->recordsTotal = $p->data->totalElements;
        $p->recordsFiltered = $p->data->totalElements;
        echo json_encode($p);
    }

    public function saveDistrict()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->district->post($data);
        echo json_encode($p);
    }

    public function editDistrict()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->district->put($data);
        echo json_encode($p);
    }

    public function deleteDistrict()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->district->delete($data);
        echo json_encode($p);
    }

}

/* End of file District.php */
