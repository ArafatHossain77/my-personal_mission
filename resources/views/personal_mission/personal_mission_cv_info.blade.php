<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Write your Info</title>
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
    </div>
    <div class="item">
        <div class="container mt-5">
            <div class="card mt-5 mb-3">
                <div class="card-body">
                    <h3 class="text-uppercase text-center mb-5">CV Info Desk</h3>
                    <form method="POST" action='{{route('storeCvData')}}'>
                        @csrf
                        <div class="item p-2">
                            <p>Personal Information:</p>
                            <div class="name-item">
                                <input type="text" name="full_name" placeholder="Full name"/>
                            </div>
                            <div class="name-item mt-2">
                                <input type="text" name="father_name" placeholder="Father's Name"/>
                            </div>
                            <div class="name-item mt-2">
                                <input type="text" name="mother_name" placeholder="Mother's Name"/>
                            </div>
                            <div class="item mt-3">
                                <p>Date of birth:</p>
                                <div class="item">
                                    <input type="date" name="date_of_birth" required/>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <p>About Me :</p>
                            <textarea name="about_me" rows="5"></textarea>
                        </div>
                        <div class="item">
                            <p>Address:</p>
                            <input type="text" name="present_address" placeholder="Present address"/>
                            <div class="city-item">
                                <input type="text" name="city" placeholder="City"/>
                                <input type="text" name="region" placeholder="Region"/>
                                <input type="number" name="zip_code" placeholder="Postal / Zip code"/>
                                <input type="text" name="country" placeholder="Country"/>
                            </div>
                        </div>
                        <div class="item mt-3">
                            <p>Contact:</p>
                            <input type="email" name="email" placeholder="type your email"/>
                            <input type="text" name="social_link" placeholder="social link"/>
                            <div class="city-item">
                                <input type="number" name="mobile_number"
                                       placeholder="Mobile number where you can be reached"/>
                                <input type="number" name="emergency_contact" placeholder="Emergency Contact"/>
                            </div>
                        </div>


                        <div class="item">
                            <div class="container mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <p>Education</p>
                                        <div class="city-item">
                                            <input type="text" name="level_of_education"
                                                   placeholder="Level of Education"/>
                                            <input type="text" name="major_group"
                                                   placeholder="Concentration/ Major/Group"/>
                                            <input type="text" name="result_division_class"
                                                   placeholder="Result Division/Class"/>
                                            <input type="number" name="marks" placeholder="Marks(%)"/>
                                            <input type="number" name="years_of_passing"
                                                   placeholder="Year of Passing "/>
                                        </div>
                                        <input type="text" name="institute_name" placeholder="Institute Name"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <p>Experience</p>
                                        <input type="text" name="company_name" placeholder="Company Name"/>
                                        <div class="city-item">
                                            <input type="text" name="company_business" placeholder="Company Business"/>
                                            <input type="text" name="designation" placeholder="Designation"/>
                                            <input type="text" name="department" placeholder="Department"/>
                                            <input type="text" name="responsibility" placeholder="Responsibilities"/>
                                            <input type="text" name="company_location" placeholder="Company Location"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="container mt-5">
                                        <div class="card">
                                            <div class="card-body">
                                                <p>Employment Period:</p>
                                                <div class="item">
                                                    <input type="date" name="employment_period" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <p>Highlights</p>
                                            <div class="item">
                                                <textarea name="highlights" placeholder="start with 1."
                                                          rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-block mb-2 mt-3">
                                            <button type="submit" name="storeCV" class="text-bg-info p-3">SAVE INFO</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
