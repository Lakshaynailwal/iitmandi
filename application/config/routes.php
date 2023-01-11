<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['admin'] = 'admin/login';
$route['logout'] = 'home/logout';
$route['home_about'] = 'admin/homeabout';
$route['home_message'] = 'admin/homemessage';
$route['page/(:any)'] = 'page/pageDetails/$1';
$route['pages/students'] = 'Students/index';
$route['pages/student_details/(:any)'] = 'Students/student_details/$1';
$route['pages/faculty_list'] = 'Faculty/index';
$route['pages/faculty_details/(:any)'] = 'Faculty/faculty_details/$1';
$route['pages/contactus'] = 'home/contactus';
$route['pages/payment'] = 'home/payment';
$route['pages/committees'] = 'home/committees';

/* Students */
$route['student'] = 'student/student/index';
$route['student/login'] = 'student/student/login';
$route['student/dashboard'] = 'student/student/dashboard';
$route['student/save_aboutme'] = 'student/student/save_aboutme';
$route['student/save_educate'] = 'student/student/save_educate';
//$route['student/edit_educate'] = 'student/student/edit_educate';
$route['student/save_experience'] = 'student/student/save_experience';
$route['student/save_publication'] = 'student/student/save_publication';
$route['student/logout'] = 'student/student/logout';

/* Faculty */
$route['faculty'] = 'facultys/facultys/index';
$route['faculty/login'] = 'facultys/facultys/login';
$route['faculty/dashboard'] = 'facultys/facultys/dashboard';
$route['faculty/research'] = 'facultys/facultys/research';
$route['faculty/publication'] = 'facultys/facultys/publication';
$route['faculty/projects'] = 'facultys/facultys/projects';
$route['faculty/lab_members'] = 'facultys/facultys/lab_members';
$route['faculty/current_opening'] = 'facultys/facultys/current_opening';
$route['faculty/miscellaneous'] = 'facultys/facultys/miscellaneous';
$route['faculty/save_aboutme'] = 'facultys/facultys/save_aboutme';
$route['faculty/save_educate'] = 'facultys/facultys/save_educate';
$route['faculty/save_experience'] = 'facultys/facultys/save_experience';
$route['faculty/logout'] = 'facultys/facultys/logout';
