<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * http://example.com/admin/users/users
 * http://example.com/admin/users/users/roles
 * http://example.com/admin/users/users/login
 * http://example.com/admin/users/users/logout
 * http://example.com/admin/users/users/reset
 * http://example.com/admin/users/users/forgot
 * http://example.com/admin/users/users/changePassword
 */
Router::plugin('Users', ['path' => '/'], function (RouteBuilder $route) {
    $route->prefix('admin', function (RouteBuilder $route) {
        $route->setExtensions(['json']);

        $route->scope('/users', [], function (RouteBuilder $route) {
            $route->fallbacks();
        });
    });
});
