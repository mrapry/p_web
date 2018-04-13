<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;

class UserModel extends CI_Model {

    public function __construct()
    {
    }

    public function get()
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_account");
        $requestUri.="/account";
        $data = $this->psdkp->getData($requestUri);
        return $data;
    }

    public function getStatus($status = null)
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_account");
        $requestUri.="/account?status=".$status;
        $data = $this->psdkp->getData($requestUri);
        return $data;
    }

    public function getById($id = "")
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_account");
        $requestUri.="/account?id=".$id;
        $data = $this->psdkp->getData($requestUri);
        return $data;
    }


    public function post($payload)
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_account");
        $requestUri.="/account";
        $data = $this->psdkp->postData($requestUri, json_decode($payload));
        return $data;
    }

    public function postUpdateStatus($payload)
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_account");
        $requestUri.="/account/status";
        $data = $this->psdkp->postData($requestUri, json_decode($payload));
        return $data;
    }

    public function put($payload)
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_account");
        $requestUri.="/account";
        $data = $this->psdkp->putData($requestUri, json_decode($payload));
        return $data;
    }

    public function delete($payload)
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_account");
        $requestUri.="/account/del";
        $data = $this->psdkp->deleteData($requestUri, json_decode($payload));
        return $data;
    }
}