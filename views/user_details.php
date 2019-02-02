<?php

$users = [
  1 => ['name'=>'John', 'last_name'=>'Doe'],
];
$user = isset($users[$id])? $users[$id]: null;
var_dump($user);
