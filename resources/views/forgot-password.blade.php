@extends('layout')

@section('title', 'Forgot password')

<div class="page_loader"></div>

<!-- Login 13 start -->
<h3>@section('page-title', 'Recover your password')</h3>
@section('form')
    <form action="../../public/index.php" method="GET">
        <div class="form-group">
            <input type="email" name="email" class="input-text" placeholder="Email Address">
        </div>
        <div class="form-group">
            <button type="submit" class="btn-md btn-theme btn-block">Login</button>
        </div>
        <p class="none-2">Already a member?<a href="/index.php"> Login here</a></p>
    </form>
@endsection

