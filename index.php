<?php
require 'vendor/autoload.php';
$router = new AltoRouter();

$router->map( 'GET', '/articles/[*:article]', function($article) {
  require __DIR__ . '/article.php';
});

$router->map( 'GET', '/users/[i:id]/?', function($id) {
  require __DIR__ . '/user_details.php';
});

$match = $router->match();

if( $match && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] );
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
