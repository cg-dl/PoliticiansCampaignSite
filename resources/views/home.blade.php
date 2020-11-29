@extends('layouts.default')

@section('title', "Home")

@section('location', "home")

@extends('layouts.navbar')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://via.placeholder.com/1000x350.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.35);max-width: 100%;width:100%;left:0; padding:15px;">
                    <h5>The First Placeholder News</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at sodales nunc. Nullam gravida ornare ipsum, vitae sodales sem vulputate vel. Nunc at enim eu diam faucibus lobortis. Ut molestie augue augue, at fringilla mi tempus vel. Quisque malesuada nibh neque, eget vestibulum ex molestie a. Mauris sed dui sit amet sapien consequat pharetra. Etiam sed libero congue tortor rhoncus convallis et sed magna. Sed sollicitudin, urna ac rhoncus malesuada, nunc felis pharetra purus, vel bibendum quam felis sit amet mauris.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://via.placeholder.com/1000x350.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.35);max-width: 100%;width:100%;left:0; padding:15px;">
                    <h5>The Second Placeholder News</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at sodales nunc. Nullam gravida ornare ipsum, vitae sodales sem vulputate vel. Nunc at enim eu diam faucibus lobortis. Ut molestie augue augue, at fringilla mi tempus vel. Quisque malesuada nibh neque, eget vestibulum ex molestie a. Mauris sed dui sit amet sapien consequat pharetra. Etiam sed libero congue tortor rhoncus convallis et sed magna. Sed sollicitudin, urna ac rhoncus malesuada, nunc felis pharetra purus, vel bibendum quam felis sit amet mauris.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://via.placeholder.com/1000x350.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.35);max-width: 100%;width:100%;left:0; padding:15px;">
                    <h5>The Third Placeholder News</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at sodales nunc. Nullam gravida ornare ipsum, vitae sodales sem vulputate vel. Nunc at enim eu diam faucibus lobortis. Ut molestie augue augue, at fringilla mi tempus vel. Quisque malesuada nibh neque, eget vestibulum ex molestie a. Mauris sed dui sit amet sapien consequat pharetra. Etiam sed libero congue tortor rhoncus convallis et sed magna. Sed sollicitudin, urna ac rhoncus malesuada, nunc felis pharetra purus, vel bibendum quam felis sit amet mauris.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

@stop