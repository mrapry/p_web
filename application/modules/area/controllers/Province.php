<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Province extends MX_Controller
{

    public function __construct()
    {
        $this->load->model("ProvinceModel", "province");
    }

    public function getProvince()
    {
        isAjax();
        $getRequest= $this->input->get();
        $p = $this->province->get($getRequest);
        $p->draw = (int)$getRequest['draw'];
        $p->recordsTotal = $p->data->totalElements;
        $p->recordsFiltered = $p->data->totalElements;
        echo json_encode($p);
    }

    public function getData()
    {
        isAjax();
        $p = $this->province->getData();
        echo json_encode($p);
    }

    public function saveProvince()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->province->post($data);
        echo json_encode($p);
    }

    public function editProvince()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->province->put($data);
        echo json_encode($p);
    }

    public function deleteProvince()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->province->delete($data);
        echo json_encode($p);
    }
}