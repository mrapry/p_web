<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: matius
 * Date: 08/04/18
 * Time: 20.55
 */

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;


class ProvinceModel extends CI_Model
{
    public function __construct()
    {

    }

    public function get()
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_address");
        $requestUri.="/province";
        $data = $this->psdkp->getData($requestUri);
        return $data;
    }

    public function post($payload)
    {
        $data = [];
        $session_user = $this->session->userdata();
        $requestUri = $this->config->item("psdkp_address");
        $requestUri.="/province";
        $data = $this->psdkp->postData($requestUri, json_decode($payload));
        return $data;
    }
}