@extends('layouts.default')

@section('title', "Candidate Detail")

@section('location', "meet")

@section('content')
    @include('layouts.navbar')
    <div class="container mt-4">
        <div class="row mb-3">
            <img src="https://via.placeholder.com/250x250.png" alt="candidatePic" class="mr-4">
            <div class="mt-2" style="width: 70%">
                <h3>Bowo</h3>
                <p>Lahir : 16-09-1989</p>
                <p>Asal : Yogyakarta</p>
                <p>Partai : Persatuan Indonesia</p>
                <p>Biodata : Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga optio cupiditate obcaecati doloribus totam perferendis deserunt adipisci eos placeat est saepe exercitationem tempora explicabo eaque eum aspernatur, repellat odio inventore!</p>
            </div>
        </div>

        <div class="row mb-3">
            <img src="https://via.placeholder.com/250x250.png" alt="candidatePic" class="mr-4">
            <div class="mt-2" style="width: 70%">
                <h3>David</h3>
                <p>Lahir : 26-10-1979</p>
                <p>Asal : Batam</p>
                <p>Partai : Persatuan Indonesia</p>
                <p>Biodata : Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga optio cupiditate obcaecati doloribus totam perferendis deserunt adipisci eos placeat est saepe exercitationem tempora explicabo eaque eum aspernatur, repellat odio inventore!</p>
            </div>
        </div>
    </div>
@stop

