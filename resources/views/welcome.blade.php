<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
            crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="w-25 mt-4 mx-auto">Forum Discussion</h1>
    <div class="row">

    </div>
    <div class="input-group mt-2 mb-3 w-50 mx-auto">
        <input type="text" class="form-control" placeholder="Write your forum here" aria-label="Post Your Forum" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Post</button>
        </div>
    </div>
    <div class="row justify-content-end w-75">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort Forum By
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                <button class="dropdown-item" type="button">Newest</button>
                <button class="dropdown-item" type="button">Oldest</button>
                <button class="dropdown-item" type="button">Most Popular</button>
            </div>
        </div>
    </div>
    <ul class="list-group w-50 mx-auto mt-3">
        <li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                <span class="badge badge-primary badge-pill">13</span>
            </div>
            <small class="mb-0">1 days ago</small>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                <span class="badge badge-primary badge-pill">3</span>
            </div>
            <small class="mb-0">2 days ago</small>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                <span class="badge badge-primary badge-pill">31</span>
            </div>
            <small class="mb-0">3 days ago</small>
        </li>
    </ul>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

</body>
</html>
