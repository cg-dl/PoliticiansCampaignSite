@extends('layouts.default')

@section('title', "Candidate Detail")

@section('location', "meet")

@section('content')
    @include('layouts.navbar')
    <div class="container mt-4">
        <div class="row mb-3">
            <img src="https://via.placeholder.com/250x250.png" alt="candidatePic" class="mr-4">
            <div class="mt-2">
                <h3>Budi</h3>
                <p>Lahir : 26-09-1989</p>
                <p>Asal : Jakarta</p>
                <p>Partai : Indonesia Bisa</p>
            </div>
        </div>

        <div class="row mb-3">
            <img src="https://via.placeholder.com/250x250.png" alt="candidatePic" class="mr-4">
            <div class="mt-2">
                <h3>Anton</h3>
                <p>Lahir : 26-09-1979</p>
                <p>Asal : Surakarta</p>
                <p>Partai : Indonesia Bisa</p>
            </div>
        </div>
    </div>
@stop

