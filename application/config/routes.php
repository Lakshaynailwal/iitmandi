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
$route['pages/postdocs'] = 'Postdocs/index';
$route['pages/scholars'] = 'Scholars/index';
$route['pages/project_staff'] = 'Project_staff/index';
$route['pages/technical_staff'] = 'Technical_staff/index';
$route['pages/supporting_staff'] = 'Supporting_staff/index';
$route['pages/faculty_details/(:any)'] = 'Faculty/faculty_details/$1';
$route['pages/postdocs_details/(:any)'] = 'Postdocs/postdocs_details/$1';
$route['pages/scholars_details/(:any)'] = 'Scholars/scholars_details/$1';
$route['pages/project_staff_details/(:any)'] = 'Project_staff/project_staff_details/$1';
$route['pages/technical_staff_details/(:any)'] = 'Technical_staff/technical_staff_details/$1';
$route['pages/supporting_staff_details/(:any)'] = 'Supporting_staff/supporting_staff_details/$1';
$route['pages/contactus'] = 'home/contactus';
$route['pages/payment'] = 'home/payment';
$route['pages/committees'] = 'home/committees';
$route['login'] = 'home/login';
$route['pages/research'] = 'home/research';
$route['pages/consultancy'] = 'home/consultancy';
$route['pages/publications'] = 'home/publications';

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
$route['faculty/reset_password/(:any)'] = 'facultys/facultys/reset_password/$1';
$route['faculty/update_password'] = 'facultys/facultys/update_password';
$route['faculty/dashboard/(:any)'] = 'facultys/facultys/dashboard/$1';
$route['faculty/research/(:any)'] = 'facultys/facultys/research/$1';
$route['faculty/publication/(:any)'] = 'facultys/facultys/publication/$1';
$route['faculty/projects/(:any)'] = 'facultys/facultys/projects/$1';
$route['faculty/lab_members/(:any)'] = 'facultys/facultys/lab_members/$1';
$route['faculty/current_opening/(:any)'] = 'facultys/facultys/current_opening/$1';
$route['faculty/miscellaneous/(:any)'] = 'facultys/facultys/miscellaneous/$1';
$route['faculty/save_aboutme'] = 'facultys/facultys/save_aboutme';
$route['faculty/save_educate'] = 'facultys/facultys/save_educate';
$route['faculty/save_experience'] = 'facultys/facultys/save_experience';
$route['faculty/save_award'] = 'facultys/facultys/save_award';
$route['faculty/save_event'] = 'facultys/facultys/save_event';
$route['faculty/logout'] = 'facultys/facultys/logout';
