<?php

$post =  md5($article);

switch($post)
{
  case '491b42e1804db0558335c56bc8a0f418':
    echo 'Article Human Readable: ', $article, '<br />';
    echo 'Article ID = md5(Human Readable): ', $post;
    echo '<h1>Вкусная каша с молоком</h1><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    break;

  default:
    include GEEK_ROOT . '/views/article_list.php';
    break;
}
