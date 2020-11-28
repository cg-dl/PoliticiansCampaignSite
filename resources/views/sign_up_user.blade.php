<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Political Campaign</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="">Political Campaign</a>
    </nav>
    <h2 class="mt-2 ml-3">Citizen Registration Form</h2>
    <div class="mt-1 ml-3">
        <form>
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="code">Full Name</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="code">National ID</label>
                    <input type="text" class="form-control input-normal">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="code">Password</label>
                    <input type="password" class="form-control input-normal">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="code">Confirm password</label>
                    <input type="password" class="form-control input-normal">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <a href="{{url('')}}">
                        <button type="button" class="btn btn-primary">Sign up</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>