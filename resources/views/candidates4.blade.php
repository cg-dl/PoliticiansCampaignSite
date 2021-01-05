@extends('layouts.default')

@section('title', "Candidate Detail")

@section('location', "meet")

@section('content')
    @include('layouts.navbar')
    <div class="container mt-4">
        <div class="row mb-3">
            <img src="https://via.placeholder.com/250x250.png" alt="candidatePic" class="mr-4">
            <div class="mt-2">
                <h3>Jojo</h3>
                <p>Lahir : 16-10-1969</p>
                <p>Asal : Bogor</p>
                <p>Partai : Aman Sejahtera</p>
                <p>Biodata : Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>

        <div class="row mb-3">
            <img src="https://via.placeholder.com/250x250.png" alt="candidatePic" class="mr-4">
            <div class="mt-2">
                <h3>Michael</h3>
                <p>Lahir : 06-11-1989</p>
                <p>Asal : Banten</p>
                <p>Partai : Aman Sejahtera</p>
                <p>Biodata : Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
@stop

