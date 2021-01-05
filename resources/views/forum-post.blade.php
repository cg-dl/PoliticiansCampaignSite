@extends('layouts.default')

@section('title', "Forum Post")

@section('location', "forum")

@section('content')
    @include('layouts.navbar')
    <div class="row">

    </div>
    <ul class="list-group w-75 mx-auto mt-3">
        <li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
            </div>
            <small class="mb-0 font-italic">by Lorem</small>
            <small class="mb-0">3 days ago</small>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula turpis et auctor interdum. Integer ut purus nulla. Aliquam tempor tellus vitae risus cursus convallis. Quisque in est in lectus laoreet scelerisque maximus nec urna. Nam scelerisque iaculis justo varius ornare. Nunc nec mattis augue. Phasellus at ultricies augue, id fermentum metus. Sed eu volutpat ex, in bibendum enim. Aliquam quis tellus id nibh hendrerit mollis. Aenean faucibus sem metus, sed interdum leo dignissim ut.
                <br/>
                Integer pulvinar eros non pellentesque efficitur. Nunc in diam purus. Duis dapibus eros et velit pellentesque gravida. Curabitur eu fringilla sapien, in pellentesque dolor. Mauris feugiat, sapien eu finibus semper, quam quam condimentum leo, ac elementum nibh turpis eget enim. Aenean at consequat elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam ac risus felis. 
            </p>
            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#comment">Reply</button>
            <div class="collapse input-group mt-2 mb-3 w-100 mx-auto" id="comment">
                <input type="text" class="form-control" placeholder="Write your reply here" aria-label="Post Your Forum" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Post</button>
                </div>
            </div>
        </li>
        <ul class="list-group w-75 mx-auto mt-3">
            <h4 class="mb-1">Replies</h4>
            <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-1">Ipsum replied:</h5>
                </div>
                <small class="mb-0">1 days ago</small>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula turpis et auctor interdum. Integer ut purus nulla. Aliquam tempor tellus vitae risus cursus convallis. Quisque in est in lectus laoreet scelerisque maximus nec urna. Nam scelerisque iaculis justo varius ornare. Nunc nec mattis augue. Phasellus at ultricies augue, id fermentum metus. Sed eu volutpat ex, in bibendum enim. Aliquam quis tellus id nibh hendrerit mollis. Aenean faucibus sem metus, sed interdum leo dignissim ut.
                </p>
            </li>
            <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-1">Dolor replied:</h5>
                </div>
                <small class="mb-0">1 days ago</small>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula turpis et auctor interdum. Integer ut purus nulla. Aliquam tempor tellus vitae risus cursus convallis. Quisque in est in lectus laoreet scelerisque maximus nec urna. Nam scelerisque iaculis justo varius ornare. Nunc nec mattis augue. Phasellus at ultricies augue, id fermentum metus. Sed eu volutpat ex, in bibendum enim. Aliquam quis tellus id nibh hendrerit mollis. Aenean faucibus sem metus, sed interdum leo dignissim ut.
                </p>
            </li>
        </ul>
    </ul>
@stop

