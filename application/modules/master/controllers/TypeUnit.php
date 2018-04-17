<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TypeUnit extends MX_Controller {

    public function __construct()
    {
        $this->load->model("TypeUnitModel", "type");
    }
    public function getType()
    {
        $p = $this->type->get();
        echo json_encode($p);
    }

    public function saveType()
    {
        $data = $this->input->post('data');
        $p = $this->type->post($data);
        echo json_encode($p);
    }

    public function editType()
    {
        $data= $this->input->post('data');
        $p = $this->type->put($data);
        echo json_encode($p);
    }

    public function deleteType()
    {
        $data= $this->input->post('data');
        $p = $this->type->delete($data);
        echo json_encode($p);
    }

}

/* End of file TypeUnit.php */
