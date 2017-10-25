<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['messages/compose/(:any)'] = 'message/compose/$1';
$route['messages/process/(:any)/(:any)/(:any)'] = 'message/process/$1/$2/$3';
$route['messages/star/(:any)/(:any)/(:any)'] = 'message/star/$1/$2/$3';
$route['messages/markAsread/(:any)/(:any)/(:any)'] = 'message/mark_as_read/$1/$2/$3';
$route['messages/markAsUnread/(:any)/(:any)/(:any)'] = 'message/mark_as_unread/$1/$2/$3';
$route['messages/delete/(:any)/(:any)/(:any)'] = 'message/delete/$1/$2/$3';
$route['messages/(:any)/(:any)'] = 'message/index/$1/$2';

$route['unleash'] = 'ideas/index';
$route['projects'] = 'projects/index';

$route['signup'] = 'users/signup';
$route['login'] = 'users/login';
$route['users'] = 'users/index';
$route['users/index/(:any)'] = 'users/index/$1';

$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//$route['(:any)'] = 'pages/view/$1';
