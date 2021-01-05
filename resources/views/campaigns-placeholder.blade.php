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
    </div>
@stop