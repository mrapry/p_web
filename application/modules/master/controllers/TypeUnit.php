<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TypeUnit extends MX_Controller {

    public function __construct()
    {
        $this->load->model("TypeUnitModel", "type");
    }
    public function getType()
    {
        isAjax();
        $p = $this->type->get();
        echo json_encode($p);
    }

    public function saveType()
    {
        isAjax();
        $data = $this->input->post('data');
        $p = $this->type->post($data);
        echo json_encode($p);
    }

    public function editType()
    {
        isAjax();
        $data= $this->input->post('data');
        $p = $this->type->put($data);
        echo json_encode($p);
    }

    public function deleteType()
    {
        isAjax();
        $data= $this->input->post('data');
        $p = $this->type->delete($data);
        echo json_encode($p);
    }

}

/* End of file TypeUnit.php */
