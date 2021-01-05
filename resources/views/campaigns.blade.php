@extends('layouts.default')

@section('title', "Campaigns")

@section('location', "campaigns")

@section('content')
    @include('layouts.navbar')
    <div style="padding:25px;">
        <div class="d-flex justify-content-between align-items-center">
            <h3>Candidates Campaign</h3>
            <button class="btn btn-primary">+ Add Campaign</a>
        </div>
        <ul class="list-group w-100 mx-auto mt-3">
            <li class="list-group-item border-0">
                <h4 class="text-center">The Third Placeholder Campaign</h4>
                <small class="mb-0 font-italic">by Budi and Anton</small>
                <small class="mb-0">1 day ago</small>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at sodales nunc. Nullam gravida ornare ipsum, vitae sodales sem vulputate vel. Nunc at enim eu diam faucibus lobortis. Ut molestie augue augue, at fringilla mi tempus vel. Quisque malesuada nibh neque, eget vestibulum ex molestie a. Mauris sed dui sit amet sapien consequat pharetra. Etiam sed libero congue tortor rhoncus convallis et sed magna. Sed sollicitudin, urna ac rhoncus malesuada, nunc felis pharetra purus, vel bibendum quam felis sit amet mauris.
                </p>
                <a href="{{url('/campaigns/3')}}" class="btn btn-secondary">Read more</a>
            </li>
            <li class="list-group-item border-0">
                <h4 class="text-center">The Second Placeholder Campaign</h4>
                <small class="mb-0 font-italic">by Bowo and David</small>
                <small class="mb-0">3 day ago</small>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at sodales nunc. Nullam gravida ornare ipsum, vitae sodales sem vulputate vel. Nunc at enim eu diam faucibus lobortis. Ut molestie augue augue, at fringilla mi tempus vel. Quisque malesuada nibh neque, eget vestibulum ex molestie a. Mauris sed dui sit amet sapien consequat pharetra. Etiam sed libero congue tortor rhoncus convallis et sed magna. Sed sollicitudin, urna ac rhoncus malesuada, nunc felis pharetra purus, vel bibendum quam felis sit amet mauris.
                </p>
                <a href="{{url('/campaigns/2')}}" class="btn btn-secondary">Read more</a>
            </li>
            <li class="list-group-item border-0">
                <h4 class="text-center">The First Placeholder Campaign</h4>
                <small class="mb-0 font-italic">by Jojo and Michael</small>
                <small class="mb-0">13 day ago</small>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at sodales nunc. Nullam gravida ornare ipsum, vitae sodales sem vulputate vel. Nunc at enim eu diam faucibus lobortis. Ut molestie augue augue, at fringilla mi tempus vel. Quisque malesuada nibh neque, eget vestibulum ex molestie a. Mauris sed dui sit amet sapien consequat pharetra. Etiam sed libero congue tortor rhoncus convallis et sed magna. Sed sollicitudin, urna ac rhoncus malesuada, nunc felis pharetra purus, vel bibendum quam felis sit amet mauris.
                </p>
                <a href="{{url('/campaigns/1')}}" class="btn btn-secondary">Read more</a>
            </li>        
        </ul>
    </div>
@stop