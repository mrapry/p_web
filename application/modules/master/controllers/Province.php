<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Province extends MX_Controller{

    public function __construct()
    {
        $this->load->model("ProvinceModel", "province");
    }

    public function getProvince(){
        $p = $this->province->get();
        echo json_encode($p);
    }

    public function saveProvince(){
        $data = $this->input->post('data');
        $p = $this->province->post($data);
        echo json_encode($p);
    }
}