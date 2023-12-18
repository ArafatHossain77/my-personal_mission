<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message Agent</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<section style="background-color: rgba(0,0,0,0.88);">
    <div class="container ">
        <div class="row">
            <div class="col">
                <div class="container">
                    <nav class="navbar bg-primary" data-bs-theme="dark">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Agent Profile</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page"
                                           href="{{route('personalMissionUserView')}}">Personal
                                            Mission</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('shopAgentInfo')}}">Shop Agent Admin</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                           data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('registration')}}">New
                                                    Registration</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="{{route('login')}}">Log Out</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="https://codesparks.io/about/">About
                                                    Us</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <form class="d-flex p-2" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                           aria-label="Search">
                                    <button class="btn btn-outline-warning" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="1.jpg"
                             alt="avatar"
                             class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">Arafat khan</h5>
                        <p class="text-muted mb-1">Full Stack Developer</p>
                        <p class="text-muted mb-4">Bay Area,Joypurhat,BD</p>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-primary">Follow</button>
                            <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fas fa-globe fa-lg text-warning"></i>
                                <p class="mb-0">https://mdbootstrap.com</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                <p class="mb-0">@mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="badge bg-primary text-wrap" style="width: 6rem;">
                                Write Your Info
                            </div>
                            <form method="POST" action="{{route('update_user',request()->has('id'))}}">
                                @method('put')
                                @csrf
                                <div class="row mb-3 mt-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Name :</h5></label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{request()->first_name}}" name="first_name"
                                               class="form-control"
                                               id="inputEmail3" placeholder="Type your name...">
                                    </div>
                                </div>
                                <div class="row mb-3 mt-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Your Address:</h5>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{request()->last_name}}" name="last_name"
                                               class="form-control"
                                               id="inputEmail3" placeholder="Type your address...">
                                    </div>
                                </div>
                                <div class="row mb-3 mt-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Shop Address:</h5>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{request()->last_name}}" name="last_name"
                                               class="form-control"
                                               id="inputEmail3" placeholder="Type Shop address...">
                                    </div>
                                </div>
                                <div class="row mb-3 mt-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Product Name:</h5>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{request()->last_name}}" name="last_name"
                                               class="form-control"
                                               id="inputEmail3" placeholder="Type Product name...">
                                    </div>
                                </div>
                                <div class="row mb-3 mt-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Post Code:</h5></label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{request()->last_name}}" name="last_name"
                                               class="form-control"
                                               id="inputEmail3" placeholder="Type Post Code...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"><h4>Product Details</h4></label>
                                    <textarea class="form-control" name="personal_mission"
                                              id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div>
                                    <div class="row mb-3 mt-2">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Your EMAIL
                                                :</h5>
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="email" value="{{request()->email}}" name="email"
                                                   class="form-control"
                                                   id="inputPassword3" placeholder="...@gmail.com ">
                                            <input type="hidden" name="id" value="{{request()->id}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Mobile :</h5>
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="number" value="{{request()->mobile}}" name="mobile"
                                                   class="form-control"
                                                   id="inputPassword3" placeholder="Type your number...">
                                            <input type="hidden" name="id" value="{{request()->id}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Country :</h5>
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{request()->country}}" name="country"
                                                   class="form-control"
                                                   id="inputPassword3" placeholder="Type your address...">
                                            <input type="hidden" name="id" value="{{request()->id}}">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="add" class="text-bg-info p-3">SEND INFO</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>
</html>
