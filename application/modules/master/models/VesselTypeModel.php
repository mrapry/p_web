<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class VesselTypeModel extends CI_Model {

    public function __construct()
    {

    }

    public function get ()
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_vessel");
        $requestUri.="/vesselType";
        $data = $this->psdkp->getData($requestUri);
        return $data;
    }

    public function getById($id = "")
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_vessel");
        $requestUri.="/vesselType?id=".$id;
        $data = $this->psdkp->getData($requestUri);
        return $data;
    }

    public function post($payload)
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_vessel");
        $requestUri.="/vesselType";
        $data = $this->psdkp->postData($requestUri, json_decode($payload));
        return $data;
    }

    public function put($payload)
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_vessel");
        $requestUri.="/vesselType";
        $data = $this->psdkp->putData($requestUri, json_decode($payload));
        return $data;
    }

    public function delete($payload)
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_vessel");
        $requestUri.="/vesselType/del";
        $data = $this->psdkp->deleteData($requestUri, json_decode($payload));
        return $data;
    }

}

/* End of file VesselTypeModel.php */
