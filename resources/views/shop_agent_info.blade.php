<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Agent</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <nav class="navbar bg-primary navbar-fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">   All Agent's Profile</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Back</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Personal Mission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-4"><a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4"
                                         data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200"
                                         data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i> Add Member</a></div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img
                                    src="1.jpg"
                                        class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>Arafat Khan</h4>
                                <p class="text-muted">@Founder <span>| </span><span><a href="https://codesparks.io/about/" class="text-pink">CodeSparks.com</a></span>
                                </p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href=""
                                                                data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a></li>
                            </ul>
                            <a class="btn btn-info" target="__blank" href="{{route('messageAgent')}}">Message Now</a>
{{--                            <button type="button"--}}
{{--                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">--}}
{{--                                Message Now--}}
{{--                            </button>--}}
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>2563</h4>
                                            <p class="mb-0 text-muted">Wallets Balance</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>6952</h4>
                                            <p class="mb-0 text-muted">Income amounts</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>1125</h4>
                                            <p class="mb-0 text-muted">Total Transactions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>Julie L. Arsenault</h4>
                                <p class="text-muted">@Programmer <span>| </span><span><a href="#" class="text-pink">websitename.com</a></span>
                                </p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href=""
                                                                data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a></li>
                            </ul>
                            <button type="button"
                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                Message Now
                            </button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>8471</h4>
                                            <p class="mb-0 text-muted">Wallets Balance</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>8512</h4>
                                            <p class="mb-0 text-muted">Income amounts</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>4751</h4>
                                            <p class="mb-0 text-muted">Total Transactions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar4.png"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>Christopher Gallardo</h4>
                                <p class="text-muted">@Webdesigner <span>| </span><span><a href="#" class="text-pink">websitename.com</a></span>
                                </p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href=""
                                                                data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a></li>
                            </ul>
                            <button type="button"
                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                Message Now
                            </button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>1021</h4>
                                            <p class="mb-0 text-muted">Wallets Balance</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>4562</h4>
                                            <p class="mb-0 text-muted">Income amounts</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>3621</h4>
                                            <p class="mb-0 text-muted">Total Transactions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar5.png"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>Joseph M. Rohr</h4>
                                <p class="text-muted">@Webdesigner <span>| </span><span><a href="#" class="text-pink">websitename.com</a></span>
                                </p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href=""
                                                                data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a></li>
                            </ul>
                            <button type="button"
                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                Message Now
                            </button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>7845</h4>
                                            <p class="mb-0 text-muted">Wallets Balance</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>1254</h4>
                                            <p class="mb-0 text-muted">Income amounts</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>5846</h4>
                                            <p class="mb-0 text-muted">Total Transactions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>Mark K. Horne</h4>
                                <p class="text-muted">@Director <span>| </span><span><a href="#" class="text-pink">websitename.com</a></span>
                                </p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href=""
                                                                data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a></li>
                            </ul>
                            <button type="button"
                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                Message Now
                            </button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>4851</h4>
                                            <p class="mb-0 text-muted">Wallets Balance</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>10250</h4>
                                            <p class="mb-0 text-muted">Income amounts</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>895</h4>
                                            <p class="mb-0 text-muted">Total Transactions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>James M. Fonville</h4>
                                <p class="text-muted">@Manager <span>| </span><span><a href="#" class="text-pink">websitename.com</a></span>
                                </p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href=""
                                                                data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a></li>
                            </ul>
                            <button type="button"
                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                Message Now
                            </button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>4560</h4>
                                            <p class="mb-0 text-muted">Wallets Balance</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>12350</h4>
                                            <p class="mb-0 text-muted">Income amounts</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>742</h4>
                                            <p class="mb-0 text-muted">Total Transactions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>Jade M. Walker</h4>
                                <p class="text-muted">@Webdeveloper <span>| </span><span><a href="#" class="text-pink">websitename.com</a></span>
                                </p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href=""
                                                                data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a></li>
                            </ul>
                            <button type="button"
                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                Message Now
                            </button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>3520</h4>
                                            <p class="mb-0 text-muted">Wallets Balance</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>4587</h4>
                                            <p class="mb-0 text-muted">Income amounts</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>423</h4>
                                            <p class="mb-0 text-muted">Total Transactions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>Mathias L. Lassen</h4>
                                <p class="text-muted">@Webdesigner <span>| </span><span><a href="#" class="text-pink">websitename.com</a></span>
                                </p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href=""
                                                                data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a></li>
                            </ul>
                            <button type="button"
                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                Message Now
                            </button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>7851</h4>
                                            <p class="mb-0 text-muted">Wallets Balance</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>10020</h4>
                                            <p class="mb-0 text-muted">Income amounts</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>1036</h4>
                                            <p class="mb-0 text-muted">Total Transactions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>Alfred M. Bach</h4>
                                <p class="text-muted">@Manager <span>| </span><span><a href="#" class="text-pink">websitename.com</a></span>
                                </p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href=""
                                                                data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                                                class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a></li>
                            </ul>
                            <button type="button"
                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">
                                Message Now
                            </button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>7421</h4>
                                            <p class="mb-0 text-muted">Wallets Balance</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>14754</h4>
                                            <p class="mb-0 text-muted">Income amounts</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>11525</h4>
                                            <p class="mb-0 text-muted">Total Transactions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="text-right">
                        <ul class="pagination pagination-split mt-0 float-right">
                            <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                        aria-hidden="true">«</span> <span class="sr-only">Previous</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                        aria-hidden="true">»</span> <span class="sr-only">Next</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- container -->
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

