<?php


namespace App\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Model\User;

class PostLoginController
{
    public function __invoke(){

        $userData = request()->all();
        $userData['email'];
        $userData['Password'];


        $user = User::where('email', '=', $userData['email'])->first();
        if ($user === null) {
            echo "user not found";
        } else {
            if (password_verify($user->password,$userData['Password']) === true){
                if (password_needs_rehash($user->password,PASSWORD_ARGON2ID)){
                    $user->password = password_hash($user->password,PASSWORD_ARGON2ID);
                    $user::save();
                }
            } else {
                echo "wrong password";
            }
        }
    }
}