<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Cover Latter</title>

</head>
<body>
<div class="container-fluid mt-3">
    <section class="vh-100" style="background-color: rgb(17,192,187);">
        <div class="container py-5 h-100">
            {{--            @if (\Session::has('success'))--}}
            {{--                <div class="alert alert-success">{!! \Session::get('success') !!} </div>--}}
            {{--            @endif--}}
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
                                    <h3>Your Cover Latter</h3>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Full_name</h6>
                                            <p class="text-muted">{{$missionCv['full_name']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>father_name</h6>
                                            <p class="text-muted">{{$missionCv['father_name']}}</p>
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>mother_name</h6>
                                            <p class="text-muted">{{$missionCv['mother_name']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>date_of_birth</h6>
                                            <p class="text-muted">{{$missionCv['date_of_birth']}}</p>
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>about_me</h6>
                                            <p class="text-muted">{{$missionCv['about_me']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>present_address</h6>
                                            <p class="text-muted">{{$missionCv['present_address']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>city</h6>
                                            <p class="text-muted">{{$missionCv['city']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>region</h6>
                                            <p class="text-muted">{{$missionCv['region']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>zip_code</h6>
                                            <p class="text-muted">{{$missionCv['zip_code']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>email</h6>
                                            <p class="text-muted">{{$missionCv['email']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>social_link</h6>
                                            <p class="text-muted">{{$missionCv['social_link']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>mobile_number</h6>
                                            <p class="text-muted">{{$missionCv['mobile_number']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>emergency_contact</h6>
                                            <p class="text-muted">{{$missionCv['emergency_contact']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>level_of_education</h6>
                                            <p class="text-muted">{{$missionCv['level_of_education']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>major_group</h6>
                                            <p class="text-muted">{{$missionCv['major_group']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>result_division_class</h6>
                                            <p class="text-muted">{{$missionCv['result_division_class']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>marks</h6>
                                            <p class="text-muted">{{$missionCv['marks']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>years_of_passing</h6>
                                            <p class="text-muted">{{$missionCv['years_of_passing']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>institute_name</h6>
                                            <p class="text-muted">{{$missionCv['institute_name']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>company_name</h6>
                                            <p class="text-muted">{{$missionCv['company_name']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>company_business</h6>
                                            <p class="text-muted">{{$missionCv['company_business']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>designation</h6>
                                            <p class="text-muted">{{$missionCv['designation']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>department</h6>
                                            <p class="text-muted">{{$missionCv['department']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>responsibility</h6>
                                            <p class="text-muted">{{$missionCv['responsibility']}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>company_location</h6>
                                            <p class="text-muted">{{$missionCv['company_location']}}</p>
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
</html>
