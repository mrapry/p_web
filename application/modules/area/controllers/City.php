<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City extends MX_Controller
{

    public function __construct()
    {
        $this->load->model("CityModel", "city");
    }

    public function getCity()
    {
        isAjax();
        $getRequest = $this->input->get();
        $p = $this->city->get($getRequest);
        $p->draw = (int)$getRequest['draw'];
        $p->recordsTotal = $p->data->totalElements;
        $p->recordsFiltered = $p->data->totalElements;
        echo json_encode($p);
    }

    public function getCityById($id)
    {
        isAjax();
        $p = $this->city->getById($id);
        echo json_encode($p);
    }

    public function saveCity()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->city->post($data);
        echo json_encode($p);
    }

    public function editCity()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->city->put($data);
        echo json_encode($p);
    }

    public function deleteCity()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->city->delete($data);
        echo json_encode($p);
    }

}

/* End of file City.php */
