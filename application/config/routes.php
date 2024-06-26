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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'website';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'admin/auth';

// ADMIN PANEL
// blog ****************
$route['blog/add_blog'] = 'admin/blog/add_blog';
$route['blog/blog_submit_data'] = 'admin/blog/blog_submit_data';
$route['blog/view_blog']        = 'admin/blog/blog_view';
$route['blog/edit_blog/(:any)'] = 'admin/blog/blog_edit/$1';
$route['blog/blog_update_data'] = 'admin/blog/blog_update_data';
$route['blog/blog_delete/(:any)'] = 'admin/blog/blog_delete/$1';

// blog_category ****************
$route['blog_category/add_blog_category'] = 'admin/blog_category/add_blog_category';
$route['blog_category/blog_category_submit_data'] = 'admin/blog_category/blog_category_submit_data';
$route['blog_category/view_blog_category']        = 'admin/blog_category/blog_category_view';
$route['blog_category/edit_blog_category/(:any)'] = 'admin/blog_category/blog_category_edit/$1';
$route['blog_category/blog_category_update_data'] = 'admin/blog_category/blog_category_update_data';
$route['blog_category/blog_category_delete/(:any)'] = 'admin/blog_category/blog_category_delete/$1';

// blog_detail ****************
$route['blog_detail/add_blog_detail'] = 'admin/blog_detail/add_blog_detail';
$route['blog_detail/blog_detail_submit_data'] = 'admin/blog_detail/blog_detail_submit_data';
$route['blog_detail/view_blog_detail']        = 'admin/blog_detail/blog_detail_view';
$route['blog_detail/edit_blog_detail/(:any)'] = 'admin/blog_detail/blog_detail_edit/$1';
$route['blog_detail/blog_detail_update_data'] = 'admin/blog_detail/blog_detail_update_data';
$route['blog_detail/blog_detail_delete/(:any)'] = 'admin/blog_detail/blog_detail_delete/$1';

// seo ****************
$route['seo/add_seo'] = 'admin/seo/add_seo';
$route['seo/seo_submit_data'] = 'admin/seo/seo_submit_data';
$route['seo/view_seo']        = 'admin/seo/seo_view';
$route['seo/edit_seo/(:any)'] = 'admin/seo/seo_edit/$1';
$route['seo/seo_update_data'] = 'admin/seo/seo_update_data';
$route['seo/seo_delete/(:any)'] = 'admin/seo/seo_delete/$1';


// WEBSITE
$route['index'] = 'website/index';
$route['affiliate'] = 'website/affiliate';
$route['swing'] = 'website/swing';
$route['blog'] = 'website/blog';
$route['blog/(:any)'] = 'website/blog_details/$1';
$route['faq'] = 'website/faq';
$route['payment'] = 'website/payment';
$route['pricing'] = 'website/pricing';
$route['register'] = 'website/register';
$route['regular'] = 'website/regular';
$route['risk-disclosure'] = 'website/risk_disclosure';
$route['sign-in'] = 'website/sign_in';
$route['terms-condititons'] = 'website/terms_condititons';