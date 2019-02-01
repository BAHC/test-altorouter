<?php
require 'vendor/autoload.php';
$router = new AltoRouter();
$router->map( 'GET', '/articles/[*:article]', '', 'article');
$match = $router->match();

if (isset($match['params']['article']))
{
  $post =  md5($match['params']['article']);
  include('article.php');
}
