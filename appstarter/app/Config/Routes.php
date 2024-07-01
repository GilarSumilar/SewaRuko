<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
service('auth')->routes($routes);

$routes->get('/', 'GuestController::index');

$routes->group('profile', ['filter' => 'session'], function ($routes) {
    $routes->get('', 'GuestController::index');
});

$routes->group('admin', ['filter' => 'group:admin'], function ($routes) {
    $routes->get('', 'AdminController::index');

    $routes->group('users_permission', function ($routes) {
        $routes->get('', 'UsersPermissionController::index');
        $routes->put('', 'UsersPermissionController::editUserPermission');
        $routes->post('ban', 'UsersPermissionController::BannedUserPermission');
        $routes->post('unban', 'UsersPermissionController::UnbannedUserPermission');

        // DataTables Configuration
        $routes->post('get_list_permission', 'UsersPermissionController::getListUserPermissions');
    });
});

$routes->set404Override(function () {
    return view('errors/html/error_404_custom');
});
