<?php
declare(strict_types=1);

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
use App\Middleware\TokenAuthMiddleware;

/**
 * @var \Cake\Routing\RouteBuilder $routes
 */

$routes->setRouteClass(DashedRoute::class);

$routes->scope('/', function (RouteBuilder $routes) {
    // 👇 This sets the default route (homepage)
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

    // Fallback routes for all controllers
    $routes->fallbacks();
});

$routes->scope('/api', ['prefix' => 'Api'], function (RouteBuilder $builder) {
    $builder->setExtensions(['json']);

    //  Public routes (no token middleware)
    $builder->connect('/login', [
        'controller' => 'Auth',
        'action'     => 'login',
        '_namespace' => 'App\Controller\Api',
    ]);
    $builder->connect('/register', [
        'controller' => 'Auth',
        'action'     => 'register',
        '_namespace' => 'App\Controller\Api',
    ]);
});

$routes->scope('/api', ['prefix' => 'Api'], function (RouteBuilder $builder) {
    $builder->setExtensions(['json']);

    $builder->registerMiddleware('tokenAuth', new TokenAuthMiddleware());
    $builder->applyMiddleware('tokenAuth');

    $builder->connect('/profile', [
        'controller' => 'Auth',
        'action'     => 'profile',
        '_namespace' => 'App\Controller\Api',
    ]);
    $builder->connect('/logout', [
        'controller' => 'Auth',
        'action'     => 'logout',
        '_namespace' => 'App\Controller\Api',
    ]);

    // Client routes
    $builder->connect('/clients', [
        'controller' => 'Client',
        'action' => 'index',
        '_namespace' => 'App\Controller\Api',
    ]);
    $builder->connect('/clients/view/:id', [
        'controller' => 'Client',
        'action' => 'view',
        '_namespace' => 'App\Controller\Api',
    ])->setPass(['id']);

    $builder->connect('/clients/add', [
        'controller' => 'Client',
        'action' => 'add',
        '_namespace' => 'App\Controller\Api',
    ]);
    $builder->connect('/clients/edit/:id', [
        'controller' => 'Client',
        'action' => 'edit',
        '_namespace' => 'App\Controller\Api',
    ])->setPass(['id'])->setPatterns(['id' => '\d+']);

    $builder->connect('/clients/delete/:id', [
        'controller' => 'Client',
        'action' => 'delete',
        '_namespace' => 'App\Controller\Api',
    ])->setPass(['id']);
    
    $builder->fallbacks(DashedRoute::class);
});