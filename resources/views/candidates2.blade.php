@extends('layouts.default')

@section('title', "Candidate Detail")

@section('location', "meet")

@section('content')
    @include('layouts.navbar')
    <div class="container mt-4">
        <div class="row mb-3">
            <img src="https://via.placeholder.com/250x250.png" alt="candidatePic" class="mr-4">
            <div class="mt-2">
                <h3>Bowo</h3>
                <p>Lahir : 16-09-1989</p>
                <p>Asal : Yogyakarta</p>
                <p>Partai : Persatuan Indonesia</p>
            </div>
        </div>

        <div class="row mb-3">
            <img src="https://via.placeholder.com/250x250.png" alt="candidatePic" class="mr-4">
            <div class="mt-2">
                <h3>David</h3>
                <p>Lahir : 26-10-1979</p>
                <p>Asal : Batam</p>
                <p>Partai : Persatuan Indonesia</p>
            </div>
        </div>
    </div>
@stop

