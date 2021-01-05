@extends('layouts.default')

@section('title', "Vote")

@section('location', "vote")

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
                        <div style="text-align:center;">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#confirmModal" onclick="candidatesName('Budi & Anton')">Vote!</button>
                        </div>
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
                        <div style="text-align:center;">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#confirmModal" onclick="candidatesName('Bowo & David')">Vote!</button>
                        </div>
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
                        <div style="text-align:center;">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#confirmModal" onclick="candidatesName('Bob & Putu')">Vote!</button>
                        </div>
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
                        <div style="text-align:center;">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#confirmModal" onclick="candidatesName('Jojo & Michael')">Vote!</button>
                        </div>
                    </div>
                </div>
                </div>
          </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Vote!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                <div id="candidateName"></div>
                Please confirm your identity by filling in your National ID (NIK) and Password.
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control input-normal">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control input-normal">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a type="button" class="btn btn-primary" href="{{url('/home')}}">Confirm</a>
            </div>
        </div>
    </div>
    <script>
        function candidatesName(name)
        {
            document.getElementById("candidateName").innerHTML = "You are going to vote candidate: " + name;
        }
    </script>
</div>

@stop

