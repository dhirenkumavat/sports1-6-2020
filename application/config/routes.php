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
$route['default_controller'] = 'Frantend';
$route['404_override'] = '';

//frantend

$route['index'] ='frantend/index';
$route['about-us'] ='frantend/about_us';
$route['contactus'] ='frantend/contactus';
$route['careers'] ='frantend/careers';
$route['Maintenance'] ='frantend/Maintenance';
$route['translate_uri_dashes'] = TRUE;

$route['featured_products/(:any)'] = 'frantend/featured_products/$1';
$route['gallery/(:any)'] = 'frantend/gallery/$1';
$route['products_category/(:any)'] = 'frantend/products_category/$1';
$route['category/(:any)'] = 'frantend/category/$1';

//Backend

$route['logout']='admin/logout';
$route['dashboard'] ='admin/dashboard';
$route['index'] ='admin/index';
$route['contactus_list'] ='admin/contactus_list';
$route['add_slider'] ='admin/add_slider';
$route['slider_list'] ='admin/slider_list';
$route['change_password'] ='admin/change_password';
$route['social_list'] ='admin/social_list';
$route['edit_social'] ='admin/edit_social';
$route['category_list'] ='admin/category_list';
$route['add_category'] ='admin/add_category';
$route['subcategory_list'] ='admin/subcategory_list';
$route['add_subcategory'] ='admin/add_subcategory';
$route['Feature_product_list'] ='admin/Feature_product_list';
$route['add_Feature_product'] ='admin/add_Feature_product';
$route['Maitnenanceslider_list'] ='admin/Maitnenanceslider_list';
$route['add_gallery'] ='admin/add_gallery';
$route['type_list'] ='admin/type_list';
$route['subtype_list'] ='admin/subtype_list';
$route['careers_list'] ='admin/careers_list';
$route['add_careers'] ='admin/add_careers';
$route['maintenance_list'] ='admin/maintenance_list';
$route['add_maintenance'] ='admin/add_maintenance';