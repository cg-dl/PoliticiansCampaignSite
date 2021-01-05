@extends('layouts.default')

@section('title', "Home")

@section('location', "home")

@section('content')
    @include('layouts.navbar')
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
                    <h5>The Third Placeholder Campaign</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at sodales nunc. Nullam gravida ornare ipsum, vitae sodales sem vulputate vel. Nunc at enim eu diam faucibus lobortis. Ut molestie augue augue, at fringilla mi tempus vel. Quisque malesuada nibh neque, eget vestibulum ex molestie a. Mauris sed dui sit amet sapien consequat pharetra. Etiam sed libero congue tortor rhoncus convallis et sed magna. Sed sollicitudin, urna ac rhoncus malesuada, nunc felis pharetra purus, vel bibendum quam felis sit amet mauris.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://via.placeholder.com/1000x350.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.35);max-width: 100%;width:100%;left:0; padding:15px;">
                    <h5>The Second Placeholder Campaign</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at sodales nunc. Nullam gravida ornare ipsum, vitae sodales sem vulputate vel. Nunc at enim eu diam faucibus lobortis. Ut molestie augue augue, at fringilla mi tempus vel. Quisque malesuada nibh neque, eget vestibulum ex molestie a. Mauris sed dui sit amet sapien consequat pharetra. Etiam sed libero congue tortor rhoncus convallis et sed magna. Sed sollicitudin, urna ac rhoncus malesuada, nunc felis pharetra purus, vel bibendum quam felis sit amet mauris.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://via.placeholder.com/1000x350.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.35);max-width: 100%;width:100%;left:0; padding:15px;">
                    <h5>The First Placeholder Campaign</h5>
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
    <div class="content" style="display:flex;justify-content: space-between; padding:25px;">
        <div>
            <h3>Candidates Campaign</h3>

        </div>
        <div style="max-width:30%;">
            <h3>Surveys</h3>
            <ul class="list-group w-100 mx-auto mt-3">
                <li class="list-group-item">
                    <h4 class="mb-1">What is the most important aspect of life for you that the candidates need to focus on?</h4>
                    <small class="mb-0">by Lorem ipsum Polls</small>
                    <div class="radio">
                        <label><input type="radio" name="optradio"> Education</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio"> Social Equality</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio"> Law Enforcement</label>
                    </div>
                    <button class="btn btn-secondary">Submit</button> 
                </li>
                <li class="list-group-item">
                    <h4 class="mb-1">What is the most important problem in society for you that the candidates need to solve soon?</h4>
                    <small class="mb-0">by Lorem ipsum Polls</small>
                    <div class="radio">
                        <label><input type="radio" name="optradio"> Lack of proper schools/low teaching quality in school</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio"> Inequality towards certain social group</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio"> Unjust law enforcement</label>
                    </div>
                    <button class="btn btn-secondary">Submit</button> 
                </li>
            </ul>
        </div>
    </div>
@stop