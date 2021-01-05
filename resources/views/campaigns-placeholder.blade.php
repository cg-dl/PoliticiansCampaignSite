@extends('layouts.default')

@section('title', "Campaigns")

@section('location', "campaigns")

@section('content')
    @include('layouts.navbar')
    <div style="padding:25px;">
        <h4 class="text-center">The Placeholder Campaign</h4>
        <small class="mb-0 font-italic">by [Writer-Name] and [Writer-Name]</small>
        <small class="mb-0">[day] day ago</small>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZI6Or2x-UJE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at sodales nunc. Nullam gravida ornare ipsum, vitae sodales sem vulputate vel. Nunc at enim eu diam faucibus lobortis. Ut molestie augue augue, at fringilla mi tempus vel. Quisque malesuada nibh neque, eget vestibulum ex molestie a. Mauris sed dui sit amet sapien consequat pharetra. Etiam sed libero congue tortor rhoncus convallis et sed magna. Sed sollicitudin, urna ac rhoncus malesuada, nunc felis pharetra purus, vel bibendum quam felis sit amet mauris.
        </p>
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#comment">Give Feedback</button>
        <div class="collapse w-50 mr-auto" id="comment">
            <style>
                .rating {
                    display: flex;
                    flex-direction: row-reverse;
                    justify-content: center
                }

                .rating>input {
                    display: none
                }

                .rating>label {
                    position: relative;
                    width: 1em;
                    font-size: 25px;
                    color: #FFD600;
                    cursor: pointer
                }

                .rating>label::before {
                    content: "\2605";
                    position: absolute;
                    opacity: 0
                }

                .rating>label:hover:before,
                .rating>label:hover~label:before {
                    opacity: 1 !important
                }

                .rating>input:checked~label:before {
                    opacity: 1
                }

                .rating:hover>input:checked~label:before {
                    opacity: 0.4
                }
            </style>
            <div style="display: inline-block">
                Rating:
                <div class="rating"> 
                    <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> 
                    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                    <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                    <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                    <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                </div>
            </div>
            <input type="text" class="form-control" placeholder="Write your feedback here">
            <button class="btn btn-secondary">Submit</button>
        </div>
        <ul class="list-group w-75 mr-auto mt-3">
            <h4 class="mb-1">Replies</h4>
            <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-1">Lorem wrote:</h5>
                    <h5>☆☆☆☆</h5>
                </div>
                <small class="mb-0">1 days ago</small>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula turpis et auctor interdum. Integer ut purus nulla. Aliquam tempor tellus vitae risus cursus convallis. Quisque in est in lectus laoreet scelerisque maximus nec urna. Nam scelerisque iaculis justo varius ornare. Nunc nec mattis augue. Phasellus at ultricies augue, id fermentum metus. Sed eu volutpat ex, in bibendum enim. Aliquam quis tellus id nibh hendrerit mollis. Aenean faucibus sem metus, sed interdum leo dignissim ut.
                </p>
            </li>
            <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-1">Ipsum wrote:</h5>
                    <h5>☆☆</h5>
                </div>
                <small class="mb-0">1 days ago</small>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula turpis et auctor interdum. Integer ut purus nulla. Aliquam tempor tellus vitae risus cursus convallis. Quisque in est in lectus laoreet scelerisque maximus nec urna. Nam scelerisque iaculis justo varius ornare. Nunc nec mattis augue. Phasellus at ultricies augue, id fermentum metus. Sed eu volutpat ex, in bibendum enim. Aliquam quis tellus id nibh hendrerit mollis. Aenean faucibus sem metus, sed interdum leo dignissim ut.
                </p>
            </li>
        </ul>
    </div>
@stop