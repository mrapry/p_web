<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mapping extends MX_Controller {

    public function __construct()
    {
        $this->load->model("MappingModel", "mapping");
    }

    public function getMapping()
    {
        $p = $this->mapping->get();
        echo json_encode($p);
    }

    public function saveMapping()
    {
        $data = $this->input->post('data');
        $p = $this->mapping->post($data);
        echo json_encode($p);
    }

    public function editMapping()
    {
        $data = $this->input->post('data');
        $p = $this->mapping->put($data);
        echo json_encode($p);
    }

    public function deleteMapping()
    {
        $data = $this->input->post('data');
        $p = $this->mapping->delete($data);
        echo json_encode($p);
    }

}

/* End of file Mapping.php */
