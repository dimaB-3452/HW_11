<?php


namespace App\Controller;
use Illuminate\Http\Request;


class ForgotPasswordController
{
    public function __invoke()
    {
        return view('forgot-password');
    }

}