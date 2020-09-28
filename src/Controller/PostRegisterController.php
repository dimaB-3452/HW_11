<?php


namespace App\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Model\User;

class PostRegisterController

{
    public function __invoke()
    {

        $data = request()->all();

        $user = new User;
        $user->fullname = $data['fullname'];
        $user->email = $data['email'];
        $user->password = password_hash($data['Password'],PASSWORD_BCRYPT);
        $user->save();

        return view('register');
    }
}