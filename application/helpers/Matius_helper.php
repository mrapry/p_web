
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('asset'))
{
  function asset($uri = '') {
      return base_url('assets/'.$uri); 
  }
}

if (!function_exists('isAjax')) {
    function isAjax()
    {
        $CI =& get_instance();
        $env = getenv('ENVIRONMENT');
        if ($env == "DEVELOPMENT") {
            if (!$CI->input->is_ajax_request()) {

                $data['content'] = "errors/html/error_404";
                $CI->load->view('layout/main', $data);
                $CI->output->_display();
                exit();
            }
        }
    }
}

if (!function_exists('validateEmail')){
    function validateEmail($email) {
        $v = "/[a-zA-Z0-9_\-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/";
        return (bool)preg_match($v, $email);
    }
}

if (!function_exists('validateText')){
    function validateText($text) {
        $v = "/^[a-zA-Z .\-]+$/i";
        return (bool)preg_match($v, $text);
    }
}

if (!function_exists('validateNumber')){
    function validateNumber($text) {
        $v = "/^[0-9 .\-]+$/i";
        return (bool)preg_match($v, $text);
    }
}