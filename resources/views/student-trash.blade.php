<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Trashed data</title>
</head>
<body>

<div class="container-fluid bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="{{url('/login')}}" style="color:white">
                @if(session()->has('user_name'))
                    {{session()->get('user_name')}}
                @else
                    Home
                @endif
            </a>
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
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/logout')}}" style="color:white">Logout</a>
                </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Country</th>
                <th>Created_at</th>
                <th>Action1</th>
                <th>Action2</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $row)
            <tr>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->country}}</td>
                <td>{{get_formatted_date($row->created_at, "d-M-Y")}}</td>
                <td><a href="{{route('student.force-delete', ['id' => $row->id])}}"><button class="btn btn-warning">Delete</button></a></td>
                <td><a href="{{route('student.restore', ['id' => $row->id])}}"><button class="btn btn-warning">Restore</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('student.create')}}">
        <button class="btn btn-primary">Add</button>
    </a>
    <a href="{{route('student.view')}}">
        <button class="btn btn-primary">Student data</button>
    </a>
</div>
   
</body>
</html>