<?php


namespace App\Controller;
use Illuminate\Http\Request;


final class RegisterController
{
    public function __invoke()
    {
        return view('register');
    }

}