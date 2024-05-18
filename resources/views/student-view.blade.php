<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Registration Data</title>
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
    <div class="row my-3">
        <form action="" class="col-9">
            <div class="form-group">
                <input type="search"  name="search" id="" class="form-control" placeholder="Search by name or email" value="{{$search}}">
            </div>
            <button class="btn btn-primary">Search</button>
            <a href="{{url('/student/view')}}"><button class="btn btn-primary" type="button">Reset</button></a>
        </form>
        <div class="col-3">
            <a href="{{route('student.create')}}">
                <button class="btn btn-primary" >Add</button>
            </a>
            <a href="{{route('student.trash')}}">
                <button class="btn btn-danger">Move to trash</button>
            </a>
        </div>
    </div>
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
                <td><a href="{{route('student.delete', ['id' => $row->id])}}"><button class="btn btn-warning">Trash</button></a></td>
                <td><a href="{{route('student.edit', ['id' => $row->id])}}"><button class="btn btn-warning">Edit</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row my-3">
        {{$students->links()}}
    </div>

</div>

   
</body>
</html>