
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