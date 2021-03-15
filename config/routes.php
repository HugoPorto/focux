<?php
use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);
Router::scope('/', function (RouteBuilder $routes) {
    $routes->extensions(['json']);
    $routes->connect('/', ['controller' => 'Users', 'action' => 'mainmenu', 'mainmenu']);
    $routes->fallbacks(DashedRoute::class);
});

Plugin::routes();
