<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::home');
$routes->get('about', 'Pages::about');
$routes->get('testimonials', 'Pages::testimonials');
$routes->get('partners', 'Pages::partners');

$routes->get('login', 'Auth::login');
$routes->get('register', 'Auth::register');
$routes->get('dbtest', 'Dbtest::index');
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::loginPost');

$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::registerPost');

$routes->get('logout', 'Auth::logout');

$routes->get('dashboard', 'Dashboard::index');
