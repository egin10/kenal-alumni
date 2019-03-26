<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'web';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/**
 * login & register page
 */
$route['/'] = 'web';
$route['login'] = 'auth/login';
$route['login/post'] = 'auth/prosesLogin';
$route['logout'] = 'auth/logout';
$route['register'] = 'auth/register';
$route['register/post'] = 'auth/registerUser';

/**
 * alumni page
 */
$route['alumni'] = 'alumni';
$route['alumni/profile'] = 'alumni/profile';
// $route['alumni/update/:id'] = 'alumni/update';

/**
 * guru page
 */

/**
 * admin page
 */