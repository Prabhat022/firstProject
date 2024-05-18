<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Home Page</title>
</head>
<body>
    <div class="container">

        <h2>
            @isset($name1)
            Hello, {{$name1 ?? "User"}} {{date('d-m-y')}}
            @endisset
        </h2>
        {!! $demo !!}
        @if($name1 == "")
        {{"Name is empty"}}
        @else
        {{"Name is not empty"}}
        @endif
        <br>
        @unless($name1 == "Prabhat")
        Name is not mine.
        @endunless
        <br>
        @for($i=1; $i<11; $i++) 
        <h2>{{$i}}</h2>
        @endfor
        <br><hr>
        @php 
            $arr = [1,2,3,4,5];
        @endphp
        <select>
            @foreach($arr as $key=> $a)
                <option value="{{$key}}">{{$a}}</option>
            @endforeach
        </select>
        <br><hr>
        @php
            $i=1;
        @endphp
        @while($i<=10)
            <h4>{{$i}}</h4>
            @php
                $i++;
            @endphp
        @endwhile
        <br><hr>
        
    </div>
</body>
</html>