@extends('layouts.default')
@section('title', "Sign Up")

@section('content')
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="{{url('/')}}">e-Campaign</a>
        </nav>
    </header>
    <h2 class="mt-2 ml-3">Candidate Registration Form</h2>
    <div class="mt-1 ml-3">
        <form>
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="code">Full Name</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="code">National ID</label>
                    <input type="text" class="form-control input-normal">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="code">Party</label>
                    <input type="text" class="form-control input-normal">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="code">Password</label>
                    <input type="password" class="form-control input-normal">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="code">Confirm password</label>
                    <input type="password" class="form-control input-normal">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <a href="{{url('')}}">
                        <button type="button" class="btn btn-primary">Sign up</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
@stop
