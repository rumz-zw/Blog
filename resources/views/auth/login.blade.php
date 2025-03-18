@extends('layouts.app')
@section('content')
<h1>Login</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="col-md-6"></div>
    </div>
    @endsection