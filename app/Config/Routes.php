<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'PostController::getDataPost');


$routes->get('posts/create', 'PostController::createPostView');
$routes->post('posts/create', 'PostController::createData');

$routes->get('posts/view/(:num)', 'PostController::postUniqueView/$1');

$routes->get('posts/update/(:num)', 'PostController::updatePostView/$1');
$routes->post('posts/update/(:num)', 'PostController::updatePost/$1');

$routes->get('posts/delete/(:num)', 'PostController::deletePostView/$1');
$routes->post('posts/delete/(:num)', 'PostController::deletePost/$1');


