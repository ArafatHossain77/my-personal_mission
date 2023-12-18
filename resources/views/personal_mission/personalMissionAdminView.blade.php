<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Mission Admin View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Profile</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('admin_dashboard')}}">Back</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('personalMissionAdminView')}}">Personal Mission</a>
                    </li>
                    {{--                        <li class="nav-item">--}}
                    {{--                            <a class="nav-link" href="{{route('admin_dashboard')}}">Profile</a>--}}
                    {{--                        </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5 mb-3">
        <div class="card p-5">
            <div class="card-header">
                <h2>Mission List</h2>
            </div>
            <div class="row mt-3">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Mission</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i = 1)
                    @foreach($usersWithMissions as $usersMission)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>
                                <div
                                    class="ms-2 me-auto">{{$usersMission->first_name}} {{$usersMission->last_name}}</div>
                            </td>
                            <td>
                                <div class="ms-2 me-auto">
                                    @if($usersMission->user_type == 1)
                                        Admin
                                    @else
                                        User
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="ms-2 me-auto">{{$usersMission->personal_mission}}</div>
                            </td>
                            <td>
                                <div class="ms-2 me-auto">
                                    @if($usersMission->edit_flag == 0)
                                        @if($user->id == $usersMission->user_id)
                                            <a href="{{route('admin_Personal_mission_edit_Dashboard', ['id'=>$usersMission->id, 'personal_mission'=>$usersMission->personal_mission])}}">
                                                <button type="submit" class="btn btn-secondary">Edit Mission</button>
                                            </a>
                                        @else
                                            <button type="submit" hidden class="btn btn-secondary">Make Request To Edit
                                                Your Mission
                                            </button>
                                        @endif
                                    @elseif($usersMission->edit_flag == 1)
                                        <div>
                                            <form method="POST"
                                                  action="{{route('personalMissionAdminEditAcceptIgnoreRequest', $usersMission->id)}}">
                                                @method('PUT')
                                                @csrf
                                                <input type="hidden" name="id" value="{{$usersMission->id}}">
                                                <button type="submit" name="action" value="accept"
                                                        class="btn btn-success mt-2">Accept
                                                </button>
                                                <button type="submit" name="action" value="ignore"
                                                        class="btn btn-warning mt-2">Ignore
                                                </button>
                                            </form>
                                        </div>
                                    @elseif($usersMission->edit_flag == 2)
                                        <a href="#">
                                            <button type="button" hidden class="btn btn-info">Edit Mission</button>
                                        </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>
</html>
