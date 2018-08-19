<?php

class SubDistrict extends MX_Controller
{

    public function __construct()
    {
        $this->load->model("SubDistrictModel", "SubDistrict");
    }

    public function getSubDistrict()
    {
        isAjax();
        $getRequest = $this->input->get();
        $p = $this->SubDistrict->get($getRequest);
        $p->draw = (int)$getRequest['draw'];
        $p->recordsTotal = $p->data->totalElements;
        $p->recordsFiltered = $p->data->totalElements;
        echo json_encode($p);
    }

    public function saveSubDistrict()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->SubDistrict->post($data);
        echo json_encode($p);
    }

    public function editSubDistrict()
    {
        isAjax();
        $data= $this->input->post('data');
        $p = $this->SubDistrict->put($data);
        echo json_encode($p);
    }

    public function deleteSubDistrict()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->SubDistrict->delete($data);
        echo json_encode($p);
    }
}