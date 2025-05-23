<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.


/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('Core\Home\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$session = session();
$checkadmin = $session->get('isAdmin');


$routes->set404Override('\Core\Home\Controllers\Home::show404');
$routes->get('adminlogin/', 'Home::adminlogin');
$routes->get('login/', 'Home::login');
$routes->post('login', 'Home::submitlogin');
$routes->post('forgot', 'Home::forgot_check');
$routes->post('check_code', 'Home::check_code');
$routes->post('new_password', 'Home::new_password');
$routes->get('logout', 'Home::logout');
$routes->get('forgot-password', 'Home::forgot');
$routes->get('register', 'Home::register');
$routes->post('register', 'Home::submitregister');
$routes->post('singleuploader', 'Home::singleuploader');
$routes->post('multiuploader', 'Home::multiuploader');

$routes->get('/', 'Fronthome::index');
$routes->get('pages/about-us', 'Fronthome::aboutus');
$routes->get('products', 'Fronthome::productView');
$routes->get('carts', 'Fronthome::productCartView');
$routes->post('add-to-cart', 'Fronthome::add_to_cart');
$routes->post('deleteitem', 'Fronthome::deleteitemcart');

$routes->get('care', 'Fronthome::blogView');
$routes->get('care/(:any)', 'Fronthome::recentView/$1');
$routes->get('pages/contact-us', 'Fronthome::contactView');
$routes->get('products/(:any)', 'Fronthome::productDetailsView/$1');
$routes->get('info', 'Fronthome::informationView');
$routes->get('profile', 'Fronthome::deshboardView');
$routes->get('order', 'Fronthome::orderView');
$routes->get('order-histery', 'Fronthome::orderhistery');
$routes->get('offer', 'Fronthome::offerView');
$routes->get('pages/privacy-policy', 'Fronthome::privacyView');
$routes->get('pages/return-policy', 'Fronthome::refundView');
$routes->get('pages/terms-condition', 'Fronthome::termView');
$routes->get('category/(:any)', 'Fronthome::categoryView/$1');
// $routes->get('submit-login', 'Fronthome::submitlogin');
$routes->post('submit-register', 'Fronthome::submitregister');
$routes->post('check-login-status', 'Fronthome::check_login_status');
$routes->post('update-profile', 'Fronthome::update_profile');
$routes->post('address-update', 'Fronthome::update_address');
$routes->post('update-order-address', 'Fronthome::update_order_address');
$routes->post('address-delete', 'Fronthome::address_delete');
$routes->post('address-add', 'Fronthome::addressAdd');
$routes->post('final-order', 'Fronthome::final_order');
$routes->post('payment-success', 'Fronthome::payment_Success');
// $routes->post('change-address-number', 'Fronthome::change_Number_Address');

// $routes->get('recent', 'Fronthome::recentView');
$routes->get('notfound', 'Fronthome::nofoundpageView');
$routes->get('thank', 'Fronthome::thankView');
$routes->post('contact-us-form', 'Fronthome::contactUsForm');



$routes->group('', ['namespace' => 'Core\Auth\Controllers'], static function ($routes) {
    $routes->get('login/(:any)', 'Auth::social_login/$1');
    $routes->post('timezone', 'Auth::timezone');
});
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */

/**
 * --------------------------------------------------------------------
 * Include Modules Routes Files
 * --------------------------------------------------------------------
 */


if($checkadmin == 2) {
    if (file_exists(ROOTPATH.'inc/core')) {
        $modulesPath = ROOTPATH.'inc/core/';
        $modules = scandir($modulesPath);

        foreach ($modules as $module) {
            if ($module === '.' || $module === '..') continue;
            if (is_dir($modulesPath) . '/' . $module) {
                $routesPath = $modulesPath . $module . '/Config/Routes.php';
                if (file_exists($routesPath)) {
                    require($routesPath);
                } else {
                    continue;
                }
            }
        }
    }
}


if (file_exists(ROOTPATH.'inc/themes/backend')) {
    $modulesPath = ROOTPATH.'inc/themes/backend/';
    $modules = scandir($modulesPath);

    foreach ($modules as $module) {
        if ($module === '.' || $module === '..') continue;
        if (is_dir($modulesPath) . '/' . $module) {
            $routesPath = $modulesPath . $module . '/Config/Routes.php';
            if (file_exists($routesPath)) {
                require($routesPath);
            } else {
                continue;
            }
        }
    }
}

if (file_exists(ROOTPATH.'inc/themes/frontend')) {
    $modulesPath = ROOTPATH.'inc/themes/frontend/';
    $modules = scandir($modulesPath);

    foreach ($modules as $module) {
        if ($module === '.' || $module === '..') continue;
        if (is_dir($modulesPath) . '/' . $module) {
            $routesPath = $modulesPath . $module . '/Config/Routes.php';
            if (file_exists($routesPath)) {
                require($routesPath);
            } else {
                continue;
            }
        }
    }
}

if ( file_exists( realpath(  __DIR__."/../Helpers" ) ) ) {
    $helperPath = realpath(  __DIR__."/../Helpers/" )."/";
    $helpers = scandir($helperPath);
    foreach ($helpers as $helper) {
        if ($helper === '.' || $helper === '..' || stripos( $helper , "_helper.php") === false) continue;
        if (  file_exists( $helperPath.$helper ) ) {
            require_once( $helperPath.$helper );
        }
    }
}