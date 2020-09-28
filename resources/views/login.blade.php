@extends('layout')
@section('title', 'Login')

<div class="page_loader"></div>

<!-- Login 3 start -->
<h3>@section('page-title', 'Sign into your account')</h3>
@section('form')
    <form action="/" method="POST">
        <div class="form-group">
            <input type="email" name="email" class="input-text" placeholder="Email Address">
        </div>
        <div class="form-group">
            <input type="password" name="Password" class="input-text" placeholder="Password">
        </div>
        <div class="checkbox clearfix">
            <div class="form-check checkbox-theme">
                <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                <label class="form-check-label" for="rememberMe">
                    Remember me
                </label>
            </div>
            <a href="../../public/forgot-password.php">Forgot Password</a>
        </div>
        <div class="form-group">
            <button type="submit" class="btn-md btn-theme btn-block">Login</button>
        </div>
        <p class="none-2">Don't have an account?<a href="../../public/register.php"> Register here</a></p>
    </form>
@endsection


