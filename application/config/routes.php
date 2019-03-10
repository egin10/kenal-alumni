<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'web';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/**
 * login & register page
 */
$route['/'] = 'web';
$route['login'] = 'web/login';
$route['register'] = 'web/register';

/**
 * alumni page
 */
$route['alumni'] = 'alumni';
$route['alumni/profile'] = 'alumni/profile';

/**
 * guru page
 */

/**
 * admin page
 */