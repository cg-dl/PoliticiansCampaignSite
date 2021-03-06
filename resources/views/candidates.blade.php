@extends('layouts.default')

@section('title', "Meet the Candidates")

@section('location', "meet")

@section('content')
    @include('layouts.navbar')

    <div class="container">
        <div class="row justify-content-around w-100" style="margin:25px;padding:10px;">
            <h2>Election type:</h2>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Type
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                    <button class="dropdown-item" type="button">Governor</button>
                    <button class="dropdown-item" type="button">Mayor/Regent</button>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="https://via.placeholder.com/200x200.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Budi & Anton</h5>
                    <p class="card-text">"Bersama membangun Indonesia"</p>
                    <p class="card-text">Partai Indonesia Bisa</p>
                    <a href="{{url('/candidates1')}}">
                        <button class="btn btn-secondary">Details</button>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://via.placeholder.com/200x200.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bowo & David</h5>
                        <p class="card-text">"Indonesia Bangkit !"</p>
                        <p class="card-text">Partai Persatuan Indonesia</p>
                        <a href="{{url('/candidates2')}}">
                            <button class="btn btn-secondary">Details</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://via.placeholder.com/200x200.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bob & Putu</h5>
                        <p class="card-text">"Sukseskan Indonesia"</p>
                        <p class="card-text">Partai Demokrasi Pancasila</p>
                        <a href="{{url('/candidates3')}}">
                            <button class="btn btn-secondary">Details</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://via.placeholder.com/200x200.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jojo & Michael</h5>
                        <p class="card-text">"Untuk Indonesia yang lebih pintar"</p>
                        <p class="card-text">Partai Aman Sejahtera</p>
                        <a href="{{url('/candidates4')}}">
                            <button class="btn btn-secondary">Details</button>
                        </a>
                    </div>
                </div>
                </div>
          </div>
    </div>


@stop

