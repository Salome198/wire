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
$routes->get('dashboard', 'Dashboard::index');
$routes->get('settings', 'Settings::index');
$routes->post('settings/profile-image', 'Settings::updateProfileImage');
$routes->get('logout', 'Auth::logout');
$routes->get('timetable', 'Timetable::index');
$routes->post('timetable/create', 'Timetable::create');

$routes->get('reminders', 'Reminder::index');
$routes->post('reminders/create', 'Reminder::create');

$routes->get('deadlines', 'Deadline::index');
$routes->post('deadlines/create', 'Deadline::create');
$routes->get('tasks', 'Task::index');
$routes->post('tasks/create', 'Task::create');

$routes->get('resources', 'Resource::index');
$routes->post('resources/create', 'Resource::create');
$routes->get('support', 'Support::index');
$routes->post('support/create', 'Support::create');

$routes->get('support/getting-started', 'SupportHelp::gettingStarted');
$routes->get('support/account-help', 'SupportHelp::accountHelp');

$routes->get('support/wellbeing', 'Support::wellbeing');
$routes->get('support/academic', 'Support::academic');
$routes->get('support/financial', 'Support::financial');
$routes->get('support/careers', 'Support::careers');

$routes->post('support/submit-request', 'SupportHelp::submitRequest');
$routes->get('admin', 'Admin::index');
$routes->get('calendar', 'Calendar::index');