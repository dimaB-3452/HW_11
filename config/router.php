<?php

use Illuminate\Events\Dispatcher;

$dispatcher = new Dispatcher();
$container = new \Illuminate\Container\Container();

$router = new \Illuminate\Routing\Router($dispatcher, $container);
