<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Cover Latter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<section class="vh-100 bg-image">
    <div class="container">
        <nav class="navbar bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CV From</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user_dashboard')}}">Back</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">New Registration</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{route('login')}}">Log Out</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">About Us</a></li>
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
        <div class="btn-group mt-5 m-5">
            <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                More Options
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Print</a></li>
                <li><a class="dropdown-item" href="{{route('exportPDF')}}">PDF</a></li>
                <li><a class="dropdown-item" href="#">CSV</a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid mt-3 mb-4">
        <div class="container mt-5 py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 mt-4 gradient-custom text-center text-white"
                                 style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="1.jpg" class="rounded-3"
                                     style="width: 150px;" alt="Avatar"/>
                            </div>
                            <div class="card mt-3 p-4">
                                <p>Date:<br>
                                    To:<br/>

                                    The Authority<br>
                                    Joypurhat, Sadar<br>
                                    arafat@codesparks.com<br>

                                    Dear Mr. Jacobson,<br>

                                    As a long-term admirer of the work done by the team at Mayflower Technologies,<br>
                                    I’m
                                    delighted to submit my application for the entry-level. IT technician position
                                    posted on
                                    Indeed.com. As a recent graduate from the University of Rochester with a B.S. in
                                    Computer Science, I’m confident that my knowledge of Linux systems, experience in
                                    backend coding, and precise attention to detail would make me an asset to the team
                                    at
                                    Mayflower.<br>


                                    Sincerely,<br>

                                    [Your Name]</p>
                            </div>
                            <section class="vh-200" style="background-color: rgb(253,253,254);">
                                <div class="container mb-4 mt-5">
                                    <div class="card mt-5 mb-3">
                                        <div class="card-body mb-4">
                                            <h3 class="text-uppercase text-center mb-5">CV Info Desk</h3>
                                            <hr class="mt-0 mb-4">
                                            <div class="row p-5 pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>Full_name</h6>
                                                    <p class="text-muted">{{$missionCv['full_name']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Father_name</h6>
                                                    <p class="text-muted">{{$missionCv['father_name']}}</p>
                                                </div>
                                            </div>
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>Mother_name</h6>
                                                    <p class="text-muted">{{$missionCv['mother_name']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Date of Birth</h6>
                                                    <p class="text-muted">{{$missionCv['date_of_birth']}}</p>
                                                </div>
                                            </div>
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>About Me</h6>
                                                    <p class="text-muted">{{$missionCv['about_me']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Present Address</h6>
                                                    <p class="text-muted">{{$missionCv['present_address']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>City</h6>
                                                    <p class="text-muted">{{$missionCv['city']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Region</h6>
                                                    <p class="text-muted">{{$missionCv['region']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Zip Code</h6>
                                                    <p class="text-muted">{{$missionCv['zip_code']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Email</h6>
                                                    <p class="text-muted">{{$missionCv['email']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Social Link</h6>
                                                    <p class="text-muted">{{$missionCv['social_link']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Mobile Number</h6>
                                                    <p class="text-muted">{{$missionCv['mobile_number']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Emergency Contact</h6>
                                                    <p class="text-muted">{{$missionCv['emergency_contact']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Level of Education</h6>
                                                    <p class="text-muted">{{$missionCv['level_of_education']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Major Group</h6>
                                                    <p class="text-muted">{{$missionCv['major_group']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Result Division Class</h6>
                                                    <p class="text-muted">{{$missionCv['result_division_class']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Marks</h6>
                                                    <p class="text-muted">{{$missionCv['marks']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Years of Passing</h6>
                                                    <p class="text-muted">{{$missionCv['years_of_passing']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Institute Name</h6>
                                                    <p class="text-muted">{{$missionCv['institute_name']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Company Name</h6>
                                                    <p class="text-muted">{{$missionCv['company_name']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Company Business</h6>
                                                    <p class="text-muted">{{$missionCv['company_business']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Designation</h6>
                                                    <p class="text-muted">{{$missionCv['designation']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Department</h6>
                                                    <p class="text-muted">{{$missionCv['department']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Responsibility</h6>
                                                    <p class="text-muted">{{$missionCv['responsibility']}}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Company Location</h6>
                                                    <p class="text-muted">{{$missionCv['company_location']}}</p>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="buttons">
                                                    <a href="{{route('editPersonalCv',
                                                                                                                                [
                                                                                                                                    'id'=>$missionCv->id,
                                                                                                                                    'full_name'=>$missionCv->full_name,
                                                                                                                                    'father_name'=>$missionCv->father_name,
                                                                                                                                    'mother_name'=>$missionCv->mother_name,
                                                                                                                                    'date_of_birth'=>$missionCv->date_of_birth,
                                                                                                                                    'about_me'=>$missionCv->about_me,
                                                                                                                                    'present_address'=>$missionCv->present_address,
                                                                                                                                    'city'=>$missionCv->city,
                                                                                                                                    'region'=>$missionCv->region,
                                                                                                                                    'zip_code'=>$missionCv->zip_code,
                                                                                                                                    'email'=>$missionCv->email,
                                                                                                                                    'social_link'=>$missionCv->social_link,
                                                                                                                                    'mobile_number'=>$missionCv->mobile_number,
                                                                                                                                    'emergency_contact'=>$missionCv->emergency_contact,
                                                                                                                                    'level_of_education'=>$missionCv->level_of_education,
                                                                                                                                    'major_group'=>$missionCv->major_group,
                                                                                                                                    'result_division_class'=>$missionCv->result_division_class,
                                                                                                                                    'marks'=>$missionCv->marks,
                                                                                                                                    'years_of_passing'=>$missionCv->years_of_passing,
                                                                                                                                    'institute_name'=>$missionCv->institute_name,
                                                                                                                                    'company_name'=>$missionCv->company_name,
                                                                                                                                    'company_business'=>$missionCv->company_business,
                                                                                                                                    'designation'=>$missionCv->designation,
                                                                                                                                    'department'=>$missionCv->department,
                                                                                                                                    'responsibility'=>$missionCv->responsibility,
                                                                                                                                    'company_location'=>$missionCv->company_location,
                                                                                                                                    'employment_period'=>$missionCv->employment_period,
                                                                                                                                    'highlights'=>$missionCv->highlights,

                                                                                                                                ])}}">
                                                        <button type="button" class="btn btn-info">Edit</button>
                                                    </a>
                                                    {{--                                                    <a--}}
                                                    {{--                                                        href="#"--}}
                                                    {{--                                                        onclick="event.preventDefault();document.getElementById('delete-to').submit();"--}}
                                                    {{--                                                    >--}}
                                                    {{--                                                        <button onclick="myFunction()" type="button"--}}
                                                    {{--                                                                class="btn btn-danger">Delete--}}
                                                    {{--                                                        </button>--}}
                                                    {{--                                                    </a>--}}
                                                    {{--                                                    <form id="delete-to"--}}
                                                    {{--                                                          action="{{route('destroyResume', $missionCv->id)}}"--}}
                                                    {{--                                                          method="POST" class="d-none">--}}
                                                    {{--                                                        @method('delete')--}}
                                                    {{--                                                        @csrf--}}
                                                    {{--                                                    </form>--}}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>
</html>
