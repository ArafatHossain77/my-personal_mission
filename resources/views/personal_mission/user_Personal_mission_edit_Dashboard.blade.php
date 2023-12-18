<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <nav class="navbar bg-primary navbar-fixed-top" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">User Profile</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('user_dashboard')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('personalMissionUserView')}}">Personal Mission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user_dashboard')}}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout')}}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-5 mb-3">
            <div class="card p-5">
                <div class="card-header">
                    <h2>Edit Mission</h2>
                </div>
                <form method="POST" action="{{route('personalMissionUserMissionUpdate', $usersWithMissions[0]->id)}}">
                    @method('PUT')
                    @csrf
                    <div class="form-group mb-3">
                        <label for="exampleFormControlTextarea1">Your Mission Complete Percentage</label>
                        <input type="number" name="mission_complete" class="form-control" value="{{$usersWithMissions[0]->mission_complete}}">
                    </div>
                       <div>
                            <textarea type="email" name="personal_mission" class="form-control input-lg mt-3" placeholder="Enter mission...">{{$usersWithMissions[0]->personal_mission}}</textarea>
                       </div>
                    <input type="hidden" name="edit_flag" value=0>
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
