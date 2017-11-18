<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = 'Welcome';
$route['home'] = 'Welcome/home';
$route['hollywood'] = 'Welcome/hollywood';
$route['bollywood'] = 'Welcome/bollywood';
$route['hmovie'] = 'Welcome/hmovie';
$route['hmovie/(:num)'] = 'Welcome/hmovie/$1';
$route['bmovie'] = 'Welcome/bmovie';
$route['bmovie/(:num)'] = 'Welcome/bmovie/$1';

/* End of file routes.php */
/* Location: ./application/config/routes.php */