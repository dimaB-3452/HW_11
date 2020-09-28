@extends('layout')
@section('title', 'Register')


<div class="page_loader"></div>

<!-- Login 3 start -->
<h3>@section('page-title', 'Create an account')</h3>
@section('form')
    <form action="/register" method="POST">
        <div class="form-group">
            <input type="text" name="fullname" class="input-text" placeholder="Full Name">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="input-text" placeholder="Email Address">
        </div>
        <div class="form-group">
            <input type="password" name="Password" class="input-text" placeholder="Password">
        </div>
        <div class="checkbox clearfix">
            <div class="form-check checkbox-theme">
                <input class="form-check-input" type="checkbox" value="" id="termsOfService">
                <label class="form-check-label" for="termsOfService">
                    I agree to the<a href="#" class="terms">terms of service</a>
                </label>
            </div>
        </div>
        <div class="form-group">
        <button type="submit" class="btn-md btn-theme btn-block">Login</button>
        </div>
        <p class="none-2">Already a member?<a href="../../public/index.php"> Login here</a></p>
    </form>
@endsection
