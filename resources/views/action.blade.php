<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>action about your profile</title>
    @include('bootstrap_cdn.css')
</head>
</head>
<body>
<div class="container">
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            @if(isset($user) && $user['user_type'] == 1)
                <a class="navbar-brand" href="#">Admin Profile</a>
            @elseif(isset($user) && $user['user_type'] == 2)
                <a class="navbar-brand" href="#">User Profile</a>
            @endif
            <a class="navbar-brand" href="#">Update Your Info</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_dashboard')}}">Back</a>
                    </li>
                </ul>
                <form class="d-flex p-2" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</div>


<div class="card text-bg-info p-3 mb-3 mt-4">
    <div class="container mt-5 mb-5">
        <div class="card p-5">
            <div class="card-header">
                <h2>Info Desk</h2>
            </div>
            @if (\Session::has('success'))
                <div class="alert alert-success">{!! \Session::get('success') !!} </div>
            @endif
            <form method="POST" action="{{route('update_user',request()->has('id'))}}">
                @method('put')
                @csrf
                <div class="row mb-3 mt-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>First Name :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->first_name}}" name="first_name" class="form-control"
                               id="inputEmail3" placeholder="Type your name...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3 mt-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>last Name :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->last_name}}" name="last_name" class="form-control"
                               id="inputEmail3" placeholder="Type your name...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>EMAIL :</h5></label>
                    <div class="col-sm-10">
                        <input type="email" value="{{request()->email}}" name="email" class="form-control"
                               id="inputPassword3" placeholder="...@gmail.com ">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Mobile :</h5></label>
                    <div class="col-sm-10">
                        <input type="number" value="{{request()->mobile}}" name="mobile" class="form-control"
                               id="inputPassword3" placeholder="Type your number...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Country :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->country}}" name="country" class="form-control"
                               id="inputPassword3" placeholder="Type your address...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Date of Birth :</h5></label>
                    <div class="col-sm-10">
                        @if(isset($user) && $user['user_type'] == 2)
                            <input type="date" value="{{request()->dob}}" name="dob" class="form-control"
                                   id="inputPassword3">
                            <input type="hidden" name="id" value="{{request()->id}}">
                        @else
                            <input type="date" value="{{request()->dob}}" name="dob" class="form-control"
                                   id="inputPassword3">
                            <input type="hidden" name="id" value="{{request()->id}}">
                        @endif
                    </div>
                </div>
                <button type="submit" name="add" class="text-bg-info p-3">UPDATE INFO</button>
            </form>
        </div>
    </div>
</div>
{{--<div class="container mt-5">--}}
{{--    <div class="card-header">--}}
{{--        <div class="card p-5 mt-5 mb-5">--}}
{{--            <h2>  User Info </h2>--}}
{{--            <table class="table table-bordered mt-3 p-5 mb-5">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th scope="col">First Name</th>--}}
{{--                    <th scope="col">Last Name</th>--}}
{{--                    <th scope="col">EMAIL</th>--}}
{{--                    <th scope="col">Mobile</th>--}}
{{--                    <th scope="col">country</th>--}}
{{--                    <th scope="col">Date of Birth</th>--}}
{{--                    <th scope="col">BIN</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                @foreach($userAllData as $userData)--}}
{{--                        <td>{{$userData->first_name}}</td>--}}
{{--                        <td>{{$userData->last_name}}</td>--}}
{{--                        <td>{{$userData->email}}</td>--}}
{{--                        <td>{{$userData->mobile}}</td>--}}
{{--                        <td>{{$userData->country}}</td>--}}
{{--                        <td>{{$userData->dob}}</td>--}}

{{--                      <td>  <span class="badge  rounded-pill">--}}
{{--                                  <a href="{{route('action',['first_name'=>$userData->first_name,'last_name'=>$userData->last_name,'email'=>$userData->email,'id'=>$userData->id,'mobile'=>$userData->mobile,'country'=>$userData->country,'dob'=>$userData->dob])}}"--}}
{{--                                     class="btn btn-warning btn-sm">Edit</a>--}}
{{--                                  <a href="#"--}}
{{--                                     onclick="event.preventDefault();document.getElementById('delete-to').submit();"--}}
{{--                                     class="btn btn-danger btn-sm">Delete</a>--}}
{{--                                    <form id="delete-to" method="POST" action="{{route('delete_user',$userData->id)}}" method="post" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                        @method('delete')--}}
{{--                                    </form>--}}
{{--                           </span>--}}
{{--                      </td>--}}
{{--                    <tr>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="row mb-3">--}}
{{--    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">--}}
{{--        <div class="container d-flex justify-content-center">--}}
{{--            <div class="buttons">--}}
{{--                <button type="submit" class="btn btn-success">Update</button>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--<div class="row mb-3">--}}
{{--    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">--}}
{{--        <div class="container d-flex justify-content-center">--}}
{{--            <div class="buttons">--}}
{{--                <a--}}
{{--                    href="#"--}}
{{--                    onclick="event.preventDefault();document.getElementById('delete-to').submit();"--}}
{{--                >--}}
{{--                    <button type="button" class="btn btn-danger">Delete</button>--}}
{{--                </a>--}}
{{--                @if(isset($user) && $user['user_type'] == 1)--}}
{{--                    <form id="delete-to" action="{{route('delete_user', $user->id)}}" method="POST" class="d-none">--}}
{{--                        @method('delete')--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                @elseif(isset($user) && $user['user_type'] == 2)--}}
{{--                    <form id="delete-to" action="{{route('delete_user', $user->id)}}" method="POST" class="d-none">--}}
{{--                        @method('delete')--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--            <div>--}}
{{--            </div>--}}
{{--        </div>--}}
@include('bootstrap_cdn.js')
</body>
</html>

