<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update your cv info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>
<body>
<div class="container">
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Update Your Info</a>
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
            <form method="POST" action="{{route('mission_cv_update',request()->has('id'))}}">
                @method('put')
                @csrf
                <div class="row mb-3 mt-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Full Name :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->full_name}}" name="full_name" class="form-control"
                               id="inputEmail3" placeholder="Type your name...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3 mt-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Father Name :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->father_name}}" name="father_name" class="form-control"
                               id="inputEmail3" placeholder="Type here...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Mother Name :</h5></label>
                    <div class="col-sm-10">
                        <input type="email" value="{{request()->mother_name}}" name="mother_name" class="form-control"
                               id="inputPassword3" placeholder="type here..">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Date of Birth :</h5></label>
                    <div class="col-sm-10">
                        <input type="number" value="{{request()->date_of_birth}}" name="date_of_birth"
                               class="form-control"
                               id="inputPassword3" placeholder="Type ...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>About Me :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->about_me}}" name="about_me" class="form-control"
                               id="inputPassword3" placeholder="Type ...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Present Address :</h5></label>
                    <div class="col-sm-10">

                        <input type="text" value="{{request()->present_address}}" name="present_address"
                               class="form-control"
                               id="inputPassword3">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>

                </div>
                <div class="row mb-3 mt-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>City :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->city}}" name="city" class="form-control"
                               id="inputEmail3" placeholder="Type  ...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3 mt-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Region :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->region}}" name="region" class="form-control"
                               id="inputEmail3" placeholder="Type here...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Zip Code :</h5></label>
                    <div class="col-sm-10">
                        <input type="email" value="{{request()->zip_code}}" name="zip_code" class="form-control"
                               id="inputPassword3" placeholder="type here..">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Social link :</h5></label>
                    <div class="col-sm-10">
                        <input type="number" value="{{request()->social_link}}" name="social_link"
                               class="form-control"
                               id="inputPassword3" placeholder="Type ...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Mobile Number :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->mobile_number}}" name="mobile_number"
                               class="form-control"
                               id="inputPassword3" placeholder="Type ...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Email :</h5></label>
                    <div class="col-sm-10">

                        <input type="text" value="{{request()->email}}" name="email"
                               class="form-control"
                               id="inputPassword3">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>

                </div>
                <div class="row mb-3 mt-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Emergency Contact :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->emergency_contact}}" name="emergency_contact"
                               class="form-control"
                               id="inputEmail3" placeholder="Type  ...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3 mt-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Level Of Education :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->level_of_education}}" name="level_of_education"
                               class="form-control"
                               id="inputEmail3" placeholder="Type here...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Major Group :</h5></label>
                    <div class="col-sm-10">
                        <input type="email" value="{{request()->major_group}}" name="major_group" class="form-control"
                               id="inputPassword3" placeholder="type here..">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Result Division Class :</h5></label>
                    <div class="col-sm-10">
                        <input type="number" value="{{request()->result_division_class}}" name="result_division_class"
                               class="form-control"
                               id="inputPassword3" placeholder="Type ...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Marks :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->marks}}" name="marks" class="form-control"
                               id="inputPassword3" placeholder="Type ...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Years Of Passing :</h5></label>
                    <div class="col-sm-10">

                        <input type="text" value="{{request()->years_of_passing}}" name="years_of_passing"
                               class="form-control"
                               id="inputPassword3">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>

                </div>
                <div class="row mb-3 mt-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Institute Name :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->institute_name}}" name="institute_name"
                               class="form-control"
                               id="inputEmail3" placeholder="Type here...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Company Name :</h5></label>
                    <div class="col-sm-10">
                        <input type="email" value="{{request()->company_name}}" name="company_name" class="form-control"
                               id="inputPassword3" placeholder="type here..">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Company Business :</h5></label>
                    <div class="col-sm-10">
                        <input type="number" value="{{request()->company_business}}" name="company_business"
                               class="form-control"
                               id="inputPassword3" placeholder="Type ...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Designation :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->designation}}" name="designation" class="form-control"
                               id="inputPassword3" placeholder="Type ...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Department :</h5></label>
                    <div class="col-sm-10">

                        <input type="text" value="{{request()->department}}" name="department"
                               class="form-control"
                               id="inputPassword3">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>

                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Responsibility :</h5></label>
                    <div class="col-sm-10">
                        <input type="number" value="{{request()->responsibility}}" name="responsibility"
                               class="form-control"
                               id="inputPassword3" placeholder="Type ...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Company Location :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->company_location}}" name="company_location"
                               class="form-control"
                               id="inputPassword3" placeholder="Type ...">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Employment Period :</h5></label>
                    <div class="col-sm-10">

                        <input type="text" value="{{request()->employment_period}}" name="employment_period"
                               class="form-control"
                               id="inputPassword3">
                        <input type="hidden" name="id" value="{{request()->id}}">
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Highlights :</h5></label>
                        <div class="col-sm-10">

                            <input type="text" value="{{request()->highlights}}" name="highlights"
                                   class="form-control"
                                   id="inputPassword3">
                            <input type="hidden" name="id" value="{{request()->id}}">
                        </div>

                    </div>
                    <button type="submit" name="add" class="text-bg-info p-3">UPDATE INFO</button>
            </form>
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


