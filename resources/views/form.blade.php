<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Registration Form</title>
</head>
<body>

<div class="container-fluid bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="{{url('/login')}}" style="color:white">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/register')}}" style="color:white">Register<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/student/create')}}" style="color:white">Student Registration</a>
                </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

    <div class="container">
        <div class="panel-heading text-center">
            <h2>Registration form</h2>
        </div>

        <form action="{{url('/')}}/register" method="post"> 
            @csrf
            <div class="container">
            <x-input type="text" name="name" label="Please enter your name"/>
            <x-input type="email" name="email" label="Please enter your email"/>
            <!-- <x-input type="password" name="password" label="Please enter your password"/> -->
            <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
   
</body>
</html>