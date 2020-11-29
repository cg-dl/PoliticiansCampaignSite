@extends('layouts.default')

@section('title', "Forum")

@section('location', "forum")

@extends('layouts.navbar')

@section('content')
    <h1 class="w-25 mt-4 mx-auto">Forum Discussion</h1>
    <div class="row">

    </div>
    <div class="input-group mt-2 mb-3 w-50 mx-auto">
        <input type="text" class="form-control" placeholder="Write your forum here" aria-label="Post Your Forum" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Post</button>
        </div>
    </div>
    <div class="row justify-content-end w-75">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort Forum By
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                <button class="dropdown-item" type="button">Newest</button>
                <button class="dropdown-item" type="button">Oldest</button>
                <button class="dropdown-item" type="button">Most Popular</button>
            </div>
        </div>
    </div>
    <ul class="list-group w-50 mx-auto mt-3">
        <li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                <span class="badge badge-primary badge-pill">13</span>
            </div>
            <small class="mb-0">1 days ago</small>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                <span class="badge badge-primary badge-pill">3</span>
            </div>
            <small class="mb-0">2 days ago</small>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                <span class="badge badge-primary badge-pill">31</span>
            </div>
            <small class="mb-0">3 days ago</small>
        </li>
    </ul>
@stop

