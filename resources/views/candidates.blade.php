@extends('layouts.default')

@section('title', "candidates")

@section('location', "meet")

@section('content')
    @include('layouts.navbar')

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="https://via.placeholder.com/200x200.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Budi & Anton</h5>
                    <p class="card-text">"Bersama membangun Indonesia"</p>
                    <p class="card-text">Partai Indonesia Bisa</p>
                    <button class="btn btn-secondary">Details</button>
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
                        <button class="btn btn-secondary">Details</button>
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
                        <button class="btn btn-secondary">Details</button>
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
                        <button class="btn btn-secondary">Details</button>
                    </div>
                </div>
                </div>
          </div>
    </div>


@stop

