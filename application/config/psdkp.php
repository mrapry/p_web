<?php
defined('BASEPATH') or exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Default Title
|--------------------------------------------------------------------------
|
| Default Page Title.
|
*/
$config['psdkp_title'] = 'Pengawasan Sumber Daya Kelautan dan Perikanan';

/*
|--------------------------------------------------------------------------
| Service Endpoint
|--------------------------------------------------------------------------
|
| Service Endpoints List.
|
*/

$config['psdkp_address'] = getenv('PSDKP_API_LOCAL').'/address';
$config['psdkp_account'] = getenv('PSDKP_API_LOCAL').'/secman';
