@extends('layouts.default')

@section('title', "Candidate Detail")

@section('location', "meet")

@section('content')
    @include('layouts.navbar')
    <div class="container mt-4">
        <div class="row mb-3">
            <img src="https://via.placeholder.com/250x250.png" alt="candidatePic" class="mr-4">
            <div class="mt-2">
                <h3>Bob</h3>
                <p>Lahir : 28-11-1989</p>
                <p>Asal : Tanggerang</p>
                <p>Partai : Demokrasi Pancasila</p>
            </div>
        </div>

        <div class="row mb-3">
            <img src="https://via.placeholder.com/250x250.png" alt="candidatePic" class="mr-4">
            <div class="mt-2">
                <h3>Putu</h3>
                <p>Lahir : 26-09-1979</p>
                <p>Asal : Bekasi</p>
                <p>Partai : Demokrasi Pancasila</p>
            </div>
        </div>
    </div>
@stop

