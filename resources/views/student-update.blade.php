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
                <a class="navbar-brand" href="{{url('/')}}" style="color:white">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/register')}}" style="color:white">Register<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/student/view')}}" style="color:white">Student Data</a>
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="panel-heading text-center">
            <h2>{{$title}}</h2>
        </div>

        <form action="{{$url}}" method="post"> 
            @csrf
            <div class="container">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$student->name}}"/>
                    <br><br>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{$student->email}}"/>
                    <br><br>
                    <label for="country">Country</label>
                    <input type="text" name="country" id="country" class="form-control" value="{{$student->country}}"/>
                </div>
            <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
   
</body>
</html>