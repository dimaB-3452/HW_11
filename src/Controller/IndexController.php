<?php

namespace App\Controller;

use Illuminate\Http\Request;

final class IndexController
{
    public function __invoke()
    {
        return view('login');
    }
}
