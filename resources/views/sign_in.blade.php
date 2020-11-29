@extends('layouts.default')

@section('title', "Sign in")

@section('content')
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="{{url('/')}}">e-Campaign</a>
        </nav>
    </header>
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
                    <label for="code">Password</label>
                    <input type="password" class="form-control input-normal">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <a href="{{url('home')}}">
                        <button type="button" class="btn btn-primary">Log in</button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <a href="{{url('sign_up_user')}}">
                        Sign up now! (Citizen)
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <a href="{{url('sign_up_candidate')}}">
                        Sign up now! (Candidate)
                    </a>
                </div>
            </div>
        </form>
    </div>
@stop