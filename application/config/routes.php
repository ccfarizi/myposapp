<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['customer'] = 'pelanggan';
$route['customer/add'] = 'pelanggan/add';
$route['customer/process'] = 'pelanggan/process';
$route['customer/edit/(:num)'] = 'pelanggan/edit/$1';
$route['customer/del/(:num)'] = 'pelanggan/del/$1';