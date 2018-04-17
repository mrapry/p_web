<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MappingModel extends CI_Model {

    public function __construct()
    {

    }

    public function get()
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_areas");
        $requestUri.= "/mapping";
        $data = $this->psdkp->getData($requestUri);
        return $data;
    }

    public function getById($id = "")
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_areas");
        $requestUri.= "/mapping?id=".$id;
        $data = $this->psdkp->getData($requestUri);
        return $data;
    }

    public function post($payload)
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_areas");
        $requestUri.= "/mapping";
        $data = $this->psdkp->getData($requestUri, json_encode($payload));
        return $data;
    }

    public function put($payload)
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_areas");
        $requestUri.= "/mapping";
        $data = $this->psdkp->putDta($requestUri, json_encode($payload));
        return $data;
    }

    public function delete()
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_areas");
        $requestUri.= "/mapping";
        $data = $this->psdkp->deleteData($requestUri, json_encode($payload));
        return $data;
    }

}

/* End of file MappingModel.php */
