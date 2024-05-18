<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PDF Convert Page</title>
</head>
<body>



<div class="container">
   
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Country</th>
                <th>Created_at</th>   
            </tr>
        </thead>
        <tbody>
            @foreach($students as $row)
            <tr>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->country}}</td>
                <td>{{get_formatted_date($row->created_at, "d-M-Y")}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

   
</body>
</html>