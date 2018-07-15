<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends MX_Controller {

    public function __construct()
    {
        $this->load->model("CompanyModel", "company");
    }

    public function getCompany()
    {
        isAjax();
        $p = $this->company->get();
        echo json_encode($p);
    }

    public function saveCompany()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->company->post($data);
        echo json_encode($p);
    }

    public function editCompany()
    {
        isAjax();
        $data= $this->input->post('data');
        $p = $this->company->put($data);
        echo json_encode($p);
    }

    public function deleteCompany()
    {
        isAjax();
        $data= $this->input->post('data');
        $p = $this->company->delete($data);
        echo json_encode($p);
    }

}

/* End of file Company.php */
