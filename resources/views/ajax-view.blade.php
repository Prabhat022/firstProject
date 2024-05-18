<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PDF View Page</title>
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
            <!-- <tr>
                <td>Prabhat</td>
                <td>prabhat@gmail.com</td>
                <td>India</td>
                <td>created</td>
            </tr>   -->
        </tbody>
    </table>
    <input type="button" class="btn-ajax" value="Load Data">
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {


        $(document).on('click', '.btn-ajax', function(e) {
            e.preventDefault();
            fetchData();
        })


        function fetchData() {
            $.ajax({
                type: "GET",
                url: "/ajax/view",
                datatype: "json",
                success: function(responce) {
                    // console.log(responce.students);
                    $('tbody').html("");
                    $.each(responce.students, function(key, item) {
                        $('tbody').append('<tr>\
                            <td>'+item.name+'</td>\
                            <td>'+item.email+'</td>\
                            <td>'+item.country+'</td>\
                            <td>'+item.created_at+'</td>\
                        </tr>');
                    })
                }
            })
        }
    })
</script>
   
</body>
</html>