<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>
<body>
    <div class="container">
        <nav class="navbar bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin Profile</a>
                @if(isset($all_data[1]['personal_mission']) && $all_data[1]['personal_mission'] != null)
                    <div class="text-center">
                        <button type="button" hidden class="btn btn-success">
                            <a href="{{route('personalMissionAdmin')}}" class="navbar-brand inline_block font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Write This Month's Personal Mission</a>
                        </button>
                    </div>
                @else
                    @if(now()->format('d') > 20)
                        <div class="text-center">
                            <button type="button" hidden class="btn btn-success">
                                <a href="{{route('personalMissionAdmin')}}" class="navbar-brand inline_block font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Write This Month's Personal Mission</a>
                            </button>
                        </div>
                    @else
                        <div class="text-center">
                            <button type="button" class="btn btn-success">
                                <a href="{{route('personalMissionAdmin')}}" class="navbar-brand inline_block font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Write This Month's Personal Mission</a>
                            </button>
                        </div>
                    @endif
                @endif


{{--                @if(isset($all_data[1]['personal_mission']) && $all_data[1]['personal_mission'] != null)--}}
{{--                @dd($all_data)--}}


{{--                @if($all_data[1]->created_at->format('Y') == now()->format('Y') && $all_data[1]->created_at->format('m') == now()->format('m') && isset($all_data[1]->personal_mission) && $all_data[1]->personal_mission != null)--}}
{{--                    @if(now()->format('d') > 20 && $all_data[1]->mission_complete == 0)--}}
{{--                        <div class="text-center">--}}
{{--                            <button type="button" class="btn btn-success">--}}
{{--                                <a href="{{route('personalMissionAdminMissionEditDashboard')}}" class="navbar-brand inline_block font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Complete Your Achievement Rate out of 100</a>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    @else--}}
{{--                        <div class="text-center">--}}
{{--                            <button type="button" hidden class="btn btn-success">--}}
{{--                                <a href="{{route('personalMissionUser')}}" class="navbar-brand inline_block font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Write This Month's Personal Mission</a>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                @else--}}
{{--                    @if(now()->format('d') > 20)--}}
{{--                        <div class="text-center">--}}
{{--                            <button type="button" hidden class="btn btn-success">--}}
{{--                                <a href="{{route('personalMissionUser')}}" class="navbar-brand inline_block font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Write This Month's Personal Mission</a>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    @else--}}
{{--                        <div class="text-center">--}}
{{--                            <button type="button" class="btn btn-success">--}}
{{--                                <a href="{{route('personalMissionUser')}}" class="navbar-brand inline_block font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Write This Month's Personal Mission</a>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                @endif--}}

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('personalMissionAdminView')}}">Personal Mission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('mission_report')}}">Mission Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin_dashboard')}}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('login')}}">Logout</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
{{--                                <li><a class="dropdown-item" href="{{route('action')}}">Action</a></li>--}}
{{--                                <li><hr class="dropdown-divider"></li>--}}
                                <li><a class="dropdown-item" href="{{route('registration')}}">New Registration</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="https://codesparks.io/about/">About Us</a></li>
                            </ul>
                        </li>
                    <form class="d-flex p-2" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
 <br>
                <div class="container-fluid ">
        <section class="vh-100" style="background-color: #336ce5;">
            <div class="container py-5 h-100">
                @if (\Session::has('success'))
                    <div class="alert alert-success">{!! \Session::get('success') !!} </div>
                @endif
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                            <div class="row g-0">
                                <div class="col-md-4 mt-5 gradient-custom text-center text-white"
                                     style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp" class="rounded-circle shadow-4"
                                         style="width: 150px;" alt="Avatar" />
                                </div>
                                <br>
                                <div class="col-md-8">
                                    <div class="card-body p-4">
                                        <h3>Admin Profile</h3>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>First Name</h6>
                                                <p class="text-muted">{{$user['first_name']}}</p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Last Name</h6>
                                                <p class="text-muted">{{$user['last_name']}}</p>
                                            </div>
                                        </div>
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>Email</h6>
                                                <p class="text-muted">{{$user['email']}}</p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Mobile</h6>
                                                <p class="text-muted">{{$user['mobile']}}</p>
                                            </div>
                                        </div>
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>Country</h6>
                                                <p class="text-muted">{{$user['country']}}</p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Date of Birth</h6>
                                                <p class="text-muted">{{$user['dob']}}</p>
                                            </div>
                                        </div>

                                        <hr class="mt-0 mb-1">
{{--                                        <div class="col-auto">--}}
{{--                                            <span id="textExample2" class="form-text"> You can edit and update your information from the 1st to the 20th of every month. </span>--}}
{{--                                        </div>--}}
{{--                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">--}}
{{--                                            <strong> You can update !</strong> it will be not work 21st in this month.--}}
{{--                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                                                <span aria-hidden="true">&times;</span>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}

                                        <div class="row pt-2 mt-2">
                                            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="container">
                                                    <div class="buttons">
                                                        <a href="{{route('action',
                                                                                    [
                                                                                        'id'=>$user->id,
                                                                                        'first_name'=>$user->first_name,
                                                                                        'last_name'=>$user->last_name,
                                                                                        'email'=>$user->email,
                                                                                        'mobile'=>$user->mobile,
                                                                                        'country'=>$user->country,
                                                                                        'dob'=>$user->dob,
                                                                                        'user_type'=>$user->user_type
                                                                                    ])}}">
                                                            <button type="button" class="btn btn-success">Edit</button>
                                                        </a>
                                                        <a
                                                            href="#"
                                                            onclick="event.preventDefault();document.getElementById('delete-to').submit();"
                                                        >
                                                            <button  onclick="myFunction()" type="button" class="btn btn-danger">Delete</button>
                                                        </a>
                                                        <script>
                                                            function myFunction() {
                                                                let text = "Are you sure to Delete Your account ?";
                                                                if (confirm(text) == true) {
                                                                    text = "You pressed OK!";
                                                                } else {
                                                                    text = "You canceled!";
                                                                }
                                                                document.getElementById("demo").innerHTML = text;
                                                            }
                                                        </script>

                                                        <form id="delete-to" action="{{route('delete_user', $user->id)}}" method="POST" class="d-none">
                                                            @method('delete')
                                                            @csrf
                                                        </form>
                                                    </div>
                                                    <div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
