<?php

require_once '../vendor/autoload.php';

require_once '../config/eloquent.php';
require_once '../config/blade.php';
require_once '../config/router.php';

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class User extends Model{}


$router->get('/', \App\Controller\IndexController::class);
$router->post('/', \App\Controller\PostLoginController::class);

$router->get('/register', \App\Controller\RegisterController::class);
$router->post('/register',\App\Controller\PostRegisterController::class);


$router->get('/forgot-password', \App\Controller\ForgotPasswordController::class);

$request = \Illuminate\Http\Request::createFromGlobals();
function request()
{
    global $request;
    return $request;
}
request()->all();


$router->dispatch($request);
$response = $router->dispatch($request);
echo $response->getContent();




