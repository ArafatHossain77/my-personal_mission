<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Update Resume</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user_dashboard')}}">User setting</a>
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
</div>
<div class="container mt-3">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-basic-tab" data-bs-toggle="tab" data-bs-target="#nav-basic" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Basic Info</button>
            <button class="nav-link" id="nav-education-tab" data-bs-toggle="tab" data-bs-target="#nav-education" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Education Info</button>
            <button class="nav-link" id="nav-skills-tab" data-bs-toggle="tab" data-bs-target="#nav-skills" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Skills</button>
            <button class="nav-link" id="nav-certifications-tab" data-bs-toggle="tab" data-bs-target="#nav-certifications" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Certifications</button>
            <button class="nav-link" id="nav-experience-tab" data-bs-toggle="tab" data-bs-target="#nav-experience" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Experience Info</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact Information</button>
            <button class="nav-link" id="nav-address-tab" data-bs-toggle="tab" data-bs-target="#nav-address" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Address</button>
            <button class="nav-link" id="nav-language-tab" data-bs-toggle="tab" data-bs-target="#nav-language" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Language</button>
            <button class="nav-link" id="nav-references-tab" data-bs-toggle="tab" data-bs-target="#nav-references" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">References</button>
            <button class="nav-link" id="nav-extracurricular-tab" data-bs-toggle="tab" data-bs-target="#nav-extracurricular" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Extracurricular involvement</button>
            <button class="nav-link" id="nav-hobbies-tab" data-bs-toggle="tab" data-bs-target="#nav-hobbies" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Hobbies</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-basic" role="tabpanel" aria-labelledby="nav-basic-tab" tabindex="0">
            <div class="container-fluid mt-3">
                <section class="vh-100" style="background-color: rgb(39,95,206);">
                    <div class="container py-5 h-100">
                        @if (\Session::has('success'))
                            <div class="alert alert-success">{!! \Session::get('success') !!} </div>
                        @endif
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col col-lg-6 mb-4 mb-lg-0">
                                <div class="card mb-3" style="border-radius: .5rem;">
                                    <div class="row g-0">
                                        <div class="col-md-4 mt-4 gradient-custom text-center text-white"
                                             style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                            <img src="1.jpg" class="rounded-3"
                                                 style="width: 150px;" alt="Avatar"/>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body p-4">
                                                <h3>User Profile</h3>
                                                <hr class="mt-0 mb-4">
                                                <div class="row pt-1">
                                                    <div class="col-6 mb-3">
                                                        <h6>First Name</h6>
                                                        <p class="text-muted"></p>
                                                    </div>
                                                    <div class="col-6 mb-3">
                                                        <h6>Last Name</h6>
                                                        <p class="text-muted"></p>
                                                    </div>
                                                </div>
                                                <div class="row pt-1">
                                                    <div class="col-6 mb-3">
                                                        <h6>Email</h6>
                                                        <p class="text-muted"></p>
                                                    </div>
                                                    <div class="col-6 mb-3">
                                                        <h6>Mobile</h6>
                                                        <p class="text-muted"></p>
                                                    </div>
                                                </div>
                                                <div class="row pt-1">
                                                    <div class="col-6 mb-3">
                                                        <h6>Country</h6>
                                                        <p class="text-muted"></p>
                                                    </div>
                                                    <div class="col-6 mb-3">
                                                        <h6>Date of Birth</h6>
                                                        <p class="text-muted"></p>
                                                    </div>
                                                </div>
                                                <hr class="mt-0 mb-3">
                                                <div class="row pt-4 p-4 mb-2">
                                                    <div class="btn-toolbar justify-content-between" role="toolbar"
                                                         aria-label="Toolbar with button groups">
                                                        <div class="container">
                                                            <div class="buttons">
                                                                {{--                                                                <a href="{{route('action',--}}
                                                                {{--                                                                                    [--}}
                                                                {{--                                                                                        'id'=>$user->id,--}}
                                                                {{--                                                                                        'first_name'=>$user->first_name,--}}
                                                                {{--                                                                                        'last_name'=>$user->last_name,--}}
                                                                {{--                                                                                        'email'=>$user->email,--}}
                                                                {{--                                                                                        'mobile'=>$user->mobile,--}}
                                                                {{--                                                                                        'country'=>$user->country,--}}
                                                                {{--                                                                                        'dob'=>$user->dob,--}}
                                                                {{--                                                                                        'user_type'=>$user->user_type--}}
                                                                {{--                                                                                    ])}}">--}}
                                                                {{--                                                                    <button type="button" class="btn btn-info">Edit</button>--}}
                                                                {{--                                                                </a>--}}
                                                            </div>
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
                </section>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab" tabindex="0">
            <div class="card text-bg-info p-3 mb-3 mt-4">
                <div class="container mt-5 mb-5">
                    <div class="card p-5">
                        <div class="card-header">
                            <h2> Add Education Info</h2>
                        </div>
                        @if (\Session::has('success'))
                            <div class="alert alert-success">{!! \Session::get('success') !!} </div>
                        @endif
                        <form method="POST" action="{{route('storeResumeEducationData')}}">
                            @csrf
                            <div class="row mb-3 mt-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Level of Education</h5>
                                </label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="level_of_education"
                                            value="{{request()->level_of_education}}">
                                        <option value="">Select</option>
                                        <option value="PSC" @if(true) selected @endif>PSC/5 Pass</option>
                                        <option>JSC/JDC/8 pass</option>
                                        <option>Secondary</option>
                                        <option>Higher Secondary</option>
                                        <option>Diploma</option>
                                        <option>Bachelor/Honors</option>
                                        <option>Masters</option>
                                        <option>PHD/Doctor of Philosophy</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3 mt-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Major Group</h5></label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{request()->major_group}}" name="major_group"
                                           class="form-control"
                                           id="inputEmail3" placeholder="Type your...">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Result Division
                                        Class</h5></label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{request()->result_division_class}}"
                                           name="result_division_class" class="form-control"
                                           id="inputPassword3" placeholder="type...">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Marks</h5></label>
                                <div class="col-sm-10">
                                    <input type="number" value="{{request()->marks}}" name="marks" class="form-control"
                                           id="inputPassword3" placeholder="Type your number...">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Passing Year</h5>
                                </label>
                                <div class="col-sm-10">
                                    <input type="number" value="{{request()->years_of_passing}}" name="years_of_passing"
                                           class="form-control"
                                           id="inputPassword3" placeholder="Passing Year">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Institute Name</h5>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{request()->institute_name}}" name="institute_name"
                                           class="form-control"
                                           id="inputPassword3">
                                </div>
                            </div>
                            <button type="submit" name="add" class="text-bg-info p-3">SAVE INFO</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-skills" role="tabpanel" aria-labelledby="nav-skills-tab" tabindex="0">test Skills</div>
        <div class="tab-pane fade" id="nav-certifications" role="tabpanel" aria-labelledby="nav-certifications-tab" tabindex="0">test Certifications</div>
        <div class="tab-pane fade" id="nav-experience" role="tabpanel" aria-labelledby="nav-experience-tab" tabindex="0">
            <div class="container mt-4 ">
                <div class="card-body mt-3 p-5">
                    <div class="card mt-2 mb-4 p-5">
                        <h3 class="text-uppercase text-center mb-5">Add Your Education Info</h3>
                        <form method="POST" action='{{route('storeResumeExperienceData')}}'>
                            @csrf
                            <div class="form-row p-5 mt-2">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Company Name</label>
                                    <input type="text" class="form-control" value="{{request()->company_name}}"
                                           name="company_name" id="inputEmail4">
                                </div>
                                <div class="form-group mt-2 col-md-6">
                                    <label for="inputPassword4">Company Business</label>
                                    <input type="text" class="form-control" value="{{request()->company_business}}"
                                           name="company_business" id="inputPassword4">
                                </div>
                            </div>
                            <div class="form-row p-5 mt-2">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Designation</label>
                                    <input type="text" class="form-control" value="{{request()->designation}}"
                                           name="designation" id="inputEmail4">
                                </div>
                                <div class="form-group mt-2 col-md-6">
                                    <label for="inputPassword4">department</label>
                                    <select type="text" class="form-control" value="{{request()->department}}"
                                           name="department" id="inputPassword4">
                                        <option value="">Senior Developer </option>
                                        <option value="">Junior Developer </option>
                                        <option value="">Junior Developer </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row p-5 mt-2">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">responsibility</label>
                                    <input type="text" class="form-control" value="{{request()->responsibility}}"
                                           name="responsibility" id="inputEmail4">
                                </div>
                                <div class="form-group mt-2 col-md-6">
                                    <label for="inputPassword4">company_location</label>
                                    <input type="text" class="form-control" value="{{request()->company_location}}"
                                           name="company_location" id="inputPassword4">
                                </div>
                            </div>
                            <div class="form-row p-5 mt-2">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">employment_period</label>
                                    <input type="text" class="form-control" value="{{request()->employment_period}}"
                                           name="employment_period" id="inputEmail4">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info mt-4">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
    <div class="container mt-4 ">
        <div class="card mt-5 mb-4 p-4">
            <h3 class="text-uppercase text-center mb-5">Add Contact Info</h3>
            <form method="POST" action='{{route('storeResumeContactData')}}'>
                @csrf
                <div class="form-outline mb-2">
                    <label class="form-label" for="form3Example1cg">Email</label>
                    <input type="email" value="{{request()->email}}" name="email"
                           id="form3Example1cg" class="form-control form-control-lg"
                           placeholder="@gmail.com"/>
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form3Example1cg">Social Media</label>
                    <input type="text" value="{{request()->social_link}}" name="social_link"
                           id="form3Example1cg" class="form-control form-control-lg"
                           placeholder="share social_link"/>
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form3Example1cg">Phone Number</label>
                    <input type="number" value="{{request()->mobile_number}}" name="mobile_number"
                           id="form3Example1cg" class="form-control form-control-lg"
                           placeholder="type your number"/>
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="form3Example1cg">Emergency Contact</label>
                    <input type="number" value="{{request()->emergency_contact}}" name="emergency_contact"
                           id="form3Example1cg"
                           class="form-control form-control-lg"/>
                </div>
                <div class="d-flex justify-content-center pt-2">
                    <button type="submit" name="store"
                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                        SAVE INFO
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
        <div class="tab-pane fade" id="nav-address" role="tabpanel" aria-labelledby="nav-address-tab" tabindex="0">test Address</div>
        <div class="tab-pane fade" id="nav-language" role="tabpanel" aria-labelledby="nav-language-tab" tabindex="0">test Language</div>
        <div class="tab-pane fade" id="nav-references" role="tabpanel" aria-labelledby="nav-references-tab" tabindex="0">test References</div>
        <div class="tab-pane fade" id="nav-extracurricular" role="tabpanel" aria-labelledby="nav-extracurricular-tab" tabindex="0">test Extracurricular involvement</div>
        <div class="tab-pane fade" id="nav-hobbies" role="tabpanel" aria-labelledby="nav-hobbies-tab" tabindex="0">test Hobbies</div>
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
