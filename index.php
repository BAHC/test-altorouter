<?php
//require 'vendor/autoload.php';
require __DIR__.'/vendor/altorouter/altorouter/AltoRouter.php';
$router = new AltoRouter();

define('GEEK_ROOT', __DIR__);

$router->map( 'GET', '/articles?/?[*:article]', function($article) {
  require GEEK_ROOT . '/views/article.php';
});

$router->map( 'GET', '/users/[i:id]/?', function($id) {
  require GEEK_ROOT . '/views/user_details.php';
});

$router->map( 'GET', '/online', function() {
  require GEEK_ROOT . '/views/post.php';
});

$match = $router->match();

if( $match && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] );
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
