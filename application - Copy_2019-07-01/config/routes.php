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
//$route['default_controller'] = 'welcome';logout
$route['default_controller'] = 'Login_controller';
$route['login'] = 'Login_controller/login';
$route['hardness_chilldept'] = 'Login_controller/hardness_chilldept';
$route['camshaft_scrap'] = 'Login_controller/camshaft_scrap';
$route['report_camshaft_scrap'] = 'Login_controller/report_camshaft_scrap';
$route['camshaft_scrap_dash'] = 'Login_controller/camshaft_scrap_dash';
$route['add_hardness_item'] = 'Login_controller/add_hardness_item';
$route['report_hardeness'] = 'Login_controller/report_hardeness';
$route['edit_hardness_item'] = 'Login_controller/edit_hardness_item';
$route['report_x_bar_r_bar'] = 'Login_controller/report_x_bar_r_bar';

$route['add_camshaft_scrap']='Login_controller/add_camshaft_scrap';
$route['edit_camshaft_scrap']='Login_controller/edit_camshaft_scrap';
$route['report_daily_rejection']='Login_controller/report_daily_rejection';
$route['report_pareto_analysis']='Login_controller/report_pareto_analysis';
$route['download_report/(:any)']='Login_controller/download_report/$1';
$route['download_report_x_bar_r_bar/(:any)/(:any)/(:any)/(:any)']='Login_controller/download_report_x_bar_r_bar/$1/$2/$3/$4';

$route['graph'] = 'Login_controller/graph';
$route['check_hardness_form'] = 'Login_controller/check_hardness_form';
$route['chart'] = 'login_controller/chart';
$route['download_pareto_report/(:any)/(:any)'] = 'login_controller/download_pareto_report/$1/$2/';

$route['logout'] = 'login_controller/logout';
$route['404_override'] = '';
$route['check']='login_controller/check';
$route['translate_uri_dashes'] = FALSE;
$route['summary_report_form']='login_controller/summary_report_form';
$route['summary_report']='login_controller/summary_report';



$route['db_backup_fun']='login_controller/db_backup_fun';

//ABCD FGG AAAA