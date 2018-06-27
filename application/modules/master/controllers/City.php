<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City extends MX_Controller
{

    public function __construct()
    {
        $this->load->model("CityModel", "city");
    }

    /**
     * getCity
     * @return json city
     */
    public function getCity()
    {
        isAjax();
        $p = $this->city->get();
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
