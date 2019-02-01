<?php
require 'vendor/autoload.php';
$router = new AltoRouter();
//$router->map( 'GET', '/[a:controller]/[a:action]', function($controller, $action){});
$router->map( 'GET', '/articles/[*:article]', '', 'article');

$match = $router->match();

echo 'Article Human Readable: ', $match['params']['article'], '<br />';

$post =  md5($match['params']['article']);

echo 'Article ID = md5(Human Readable): ', $post;

//echo 'controller: ', $match['params']['controller'], '<br />';
//echo 'action: ', $match['params']['action'], '<br />';
