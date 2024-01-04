<!doctype html>
<html lang="en">
<head>
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Cover Latter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<h3 class="text-uppercase text-center mb-2">Your Resume</h3>
<section class="vh-200" style="background-color: rgb(253,253,254);">
    <div class="container mb-4 ">
        <div class="card mt-5 mb-3">
            <div class="card-body mb-2">
                <table>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Created_at</th>
                        <th>Mobile</th>
                        <th>Country</th>
                        <th>Date of Birth</th>
                    </tr>
                    {{--        @dd($user['first_name'])--}}
                    {{--        @foreach($user as $u)--}}
                    <tr>
                        <td>{{$user['first_name']}}</td>
                        <td>{{$user['last_name']}}</td>
                        <td>{{$user['email']}}</td>
                        <td>{{$user['created_at']}}</td>
                        <td>{{$user['mobile']}}</td>
                        <td>{{$user['country']}}</td>
                        <td>{{$user['dob']}}</td>
                    </tr>
                    {{--        @endforeach--}}
                </table>
            </div>
        </div>
    </div>
</section>
</body>
</html>
