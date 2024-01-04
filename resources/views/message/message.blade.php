<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>message box</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Messenger</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user_dashboard')}}">Back</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">New Registration</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route('login')}}">Log Out</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="https://codesparks.io/about/">About Us</a></li>
                        </ul>
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
        <div class="container-fluid mt-5 p-5 mb-5">
            <section class="vh-100" style="background-color: rgba(17,192,187,0.88);">
                <br><br>
                <div class="card mt-5 p-5 m-5">
                    <div class="text-center">
                      <h2>Messenger</h2>
                    </div>
                    @if (\Session::has('success'))
                        <div class="alert alert-success">{!! \Session::get('success') !!} </div>
                    @endif

                    <form method="POST" action='{{route('storeMessage)}}'>
                        @csrf
{{--                        <div class="form-outline mb-2">--}}
{{--                            <label class="form-label" for="form3Example1cg">Your First Name</label>--}}
{{--                            <input type="text" value="{{request()->first_name}}" name="first_name" id="form3Example1cg" class="form-control form-control-lg" placeholder="type your first name.." />--}}
{{--                        </div>--}}
{{--                        <div class="form-outline mb-2">--}}
{{--                            <label class="form-label" for="form3Example1cg">Your Last Name</label>--}}
{{--                            <input type="text" value="{{request()->last_name}}" name="last_name" id="form3Example1cg" class="form-control form-control-lg" placeholder="type your last name.." />--}}
{{--                        </div>--}}



                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <form action="" method="POST" enctype="multipart/form-data" id="form_id">
                                <div class="form-group">
                                    <h5><label for="inputName">Name</label></h5>
                                    <input type="text" value="{{request()->first_name}}" name="first_name" class="form-control" tabindex="1" placeholder="Enter your name" pattern="[a-zA-Z. ]{1,50}" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <h5><label for="inputMessage">Message</label></h5>

                                    <textarea type="text" value="{{request()->message}}" name="message" class="form-control" tabindex="4"
                                              placeholder="Write your details" required></textarea>
                                    <br>
                                    <button type="submit" name="submit" class="btn btn-info btn-block" tabindex="5">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


</section>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
