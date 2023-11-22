<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>
<body>
<div class="container">
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Profile</a>
            @if(isset($all_data[1]['personal_mission']) && $all_data[1]['personal_mission'] != null)
                <div class="text-center">
                    <button type="button" hidden="" class="btn btn-success">
                        <a href="{{route('personalMissionAdmin')}}" class="navbar-brand inline_block font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Write This Month's Personal Mission</a>
                    </button>
                </div>
            @else
                @if(now()->format('d') > 20)
                    <div class="text-center">
                        <button type="button" hidden class="btn btn-success">
                            <a href="{{route('personalMissionAdmin')}}" class="navbar-brand inline_block font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Write This Month's Personal Mission</a>
                        </button>
                    </div>
                @else
                    <div class="text-center">
                        <button type="button" class="btn btn-success">
                            <a href="{{route('personalMissionAdmin')}}" class="navbar-brand inline_block font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Write This Month's Personal Mission</a>
                        </button>
                    </div>
                @endif
            @endif
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('admin_dashboard')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('personalMissionAdminView')}}">Personal Mission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('mission_report')}}">Personal Mission Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_dashboard')}}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid pt-3">
        <section class="vh-100" style="background-color: rgba(40,222,217,0.88);">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                            <div class="pl-2">
                                @php($xValues = [])
                                @php($yValues = [])
{{--                                @dd($usersWithMissions)--}}
                                @foreach($usersWithMissions as $usersDataWithMissions)
                                    @php(array_push($xValues, $usersDataWithMissions->first_name))
                                    @php(array_push($yValues, $usersDataWithMissions->mission_complete))
                                @endforeach
                                <canvas id="myChart" style="width:100%;max-width:1000px;margin-left: 10px"></canvas>

                                <script>
                                    var xValues = JSON.parse('<?= json_encode($xValues); ?>');
                                    var yValues = JSON.parse('<?= json_encode($yValues); ?>');
                                    var barColors = [
                                        "rgba(255, 26, 104, 1)",
                                        "rgba(54, 162, 235, 1)",
                                        "rgba(255, 206, 86, 1)",
                                        "rgba(75, 192, 192, 1)",
                                        "rgb(157,116,236)",
                                        "rgba(25,162,121,0.46)",
                                        "rgba(97,105,46,0.94)",
                                    ];

                                    new Chart("myChart", {
                                        type: "polarArea",
                                        data: {
                                            labels: xValues,
                                            datasets: [{
                                                backgroundColor: barColors,
                                                data: yValues
                                            }]
                                        },
                                        options: {
                                            legend: {display: true},
                                            title: {
                                                display: true,
                                                text: "This Month's Monthly Mission Report"
                                            },
                                            layout: {
                                                padding: 26
                                            },
                                            plugins: {
                                                labels: {
                                                    render: 'label',
                                                    fontStyle: 'bolder',
                                                    position: 'outside',
                                                }
                                            },
                                        },
                                        plugins: [ChartDataLabels]
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>




{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>mission report dash board</title>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>--}}
{{--    <script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>--}}

{{--</head>--}}
{{--<body>--}}
{{--    <div class="container">--}}
{{--        <nav class="navbar bg-primary navbar-fixed-top" data-bs-theme="dark">--}}
{{--            <div class="container-fluid ">--}}
{{--                <a class="navbar-brand" href="#">User Profile</a>--}}
{{--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}
{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link active" aria-current="page" href="{{route('user_dashboard')}}">Home</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('personalMissionUserView')}}">Personal Mission</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('user_dashboard')}}">Profile</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('login')}}">Logout</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--        <div class="card mt-5">--}}
{{--            <div class="card-body ">--}}

{{--        <div class="chart-container mt-5">--}}
{{--            <canvas id="myCanvas"></canvas>--}}
{{--        <script>--}}
{{--        var xValous= ["Arafat", "Bappy", "Sajib", "Sihab","Akshvai","Arabvai"];--}}
{{--        var yValous= [23, 12, 24, 21,22,20];--}}
{{--        var barColours=[--}}
{{--                    "rgba=(260,125,54,146')",--}}
{{--                    "rgba=(260,15,54,112')",--}}
{{--                    "rgba=(260,12,54,16')",--}}
{{--                    "rgba=(260,15,54,146')",--}}
{{--                    "rgba=(260,12,54,14')",--}}
{{--        ];--}}

{{--                    new Chart(("myChart"),{--}}
{{--                        type: "pie",--}}
{{--                        data: {--}}

{{--                            datasets: [{--}}
{{--                            data: [260, 125, 54, 146],--}}
{{--                            backgroundColor: [--}}
{{--                            window.theme.primary,--}}
{{--                            window.theme.success,--}}
{{--                            window.theme.warning,--}}
{{--                            "#dee2e6","#0ee0e5"--}}
{{--                            ],--}}
{{--                            borderColor: "transparent"--}}
{{--                            }]--}}
{{--                            },--}}
{{--                            options: {--}}
{{--                            maintainAspectRatio: false,--}}
{{--                            cutoutPercentage: 65,--}}
{{--                            }--}}
{{--                            });--}}
{{--        </script>--}}
{{--        </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--</body>--}}
{{--</html>--}}
{{--<!doctype html>--}}
{{--    <html lang="en">--}}
{{--    <head>--}}
{{--        <meta charset="UTF-8">--}}
{{--        <meta name="viewport"--}}
{{--              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--        <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--        <title>Admin page</title>--}}
{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>--}}
{{--        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>--}}
{{--        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>--}}
{{--        <script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>--}}
{{--            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">--}}
{{--        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>--}}

{{--    </head>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <div class="container">--}}
{{--        <nav class="navbar bg-primary navbar-fixed-top" data-bs-theme="dark">--}}
{{--            <div class="container-fluid ">--}}
{{--                <a class="navbar-brand" href="#">Admin Profile</a>--}}
{{--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}
{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link active" aria-current="page" href="{{route('admin_dashboard')}}">Back</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('personalMissionAdminView')}}">Personal Mission</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('admin_dashboard')}}">Profile</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('login')}}">Logout</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--        <div class="container-fluid pt-3">--}}
{{--            <section class="vh-100" style="background-color: #E3E4FA;">--}}
{{--                <div class="container py-5 h-100">--}}
{{--                    <div class="row d-flex justify-content-center align-items-center h-100">--}}
{{--                        <div class="col col-lg-6 mb-4 mb-lg-0">--}}
{{--                            <div class="card mb-3" style="border-radius: .5rem;">--}}
{{--                                <div class="pl-2">--}}
{{--                                    @php($xValues = [])--}}
{{--                                    @php($yValues = [])--}}
{{--                                    @foreach($usersWithMissions as $usersDataWithMissions)--}}
{{--                                        @php(array_push($xValues, $usersDataWithMissions->first_name))--}}
{{--                                        @php(array_push($yValues, $usersDataWithMissions->mission_complete))--}}
{{--                                    @endforeach--}}
{{--                                    <canvas id="myChart" style="width:100%;max-width:1000px;margin-left: 10px"></canvas>--}}

{{--                                    <script>--}}
{{--                                        var xValues = JSON.parse('<?= json_encode($xValues); ?>');--}}
{{--                                        var yValues = JSON.parse('<?= json_encode($yValues); ?>');--}}
{{--                                        var barColors = [--}}
{{--                                            "rgba(255, 26, 104, 1)",--}}
{{--                                            "rgba(54, 162, 235, 1)",--}}
{{--                                            "rgba(255, 206, 86, 1)",--}}
{{--                                            "rgba(75, 192, 192, 1)",--}}
{{--                                            "rgba(153, 102, 255, 1)",--}}
{{--                                        ];--}}

{{--                                        new Chart("myChart", {--}}
{{--                                            type: "pie",--}}
{{--                                            data: {--}}
{{--                                                labels: xValues,--}}
{{--                                                datasets: [{--}}
{{--                                                    backgroundColor: barColors,--}}
{{--                                                    data: yValues--}}
{{--                                                }]--}}
{{--                                            },--}}
{{--                                            options: {--}}
{{--                                                legend: {display: true},--}}
{{--                                                title: {--}}
{{--                                                    display: true,--}}
{{--                                                    text: "This Month's Monthly Mission Report"--}}
{{--                                                },--}}
{{--                                                layout: {--}}
{{--                                                    padding: 26--}}
{{--                                                },--}}
{{--                                                plugins: {--}}
{{--                                                    labels: {--}}
{{--                                                        render: 'label',--}}
{{--                                                        fontStyle: 'bolder',--}}
{{--                                                        position: 'outside',--}}
{{--                                                    }--}}
{{--                                                },--}}
{{--                                            },--}}
{{--                                            plugins: [ChartDataLabels]--}}
{{--                                        });--}}
{{--                                    </script>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}
{{--        </div>--}}
{{--    </div>--}}







{{--    <div class="container-fluid pt-3">--}}
{{--        <section class="vh-100" style="background-color: rgb(45,215,210);">--}}
{{--            <div class="container py-5 h-100">--}}
{{--                <div class="row d-flex justify-content-center align-items-center h-100">--}}
{{--                    <div class="col col-lg-6 mb-4 mb-lg-0">--}}
{{--                        <div class="card mb-3" style="border-radius: .5rem;">--}}
{{--                            <div class="pl-2">--}}
{{--                                @php($xValues = [])--}}
{{--                                @php($yValues = [])--}}
{{--    --}}{{----}}{{--                            @foreach($usersWithMissions as $usersDataWithMissions)--}}
{{--    --}}{{----}}{{--                                @php(array_push($xValues, $usersDataWithMissions->first_name))--}}
{{--    --}}{{----}}{{--                                @php(array_push($yValues, $usersDataWithMissions->mission_complete))--}}
{{--    --}}{{----}}{{--                            @endforeach--}}
{{--                                <canvas id="myChart" style="width:100%;max-width:1000px;margin-left: 10px"></canvas>--}}

{{--                                <script>--}}
{{--                                    --}}{{----}}{{--var xValues = JSON.parse('<?= json_encode($xValues); ?>');--}}
{{--                                    --}}{{----}}{{--var yValues = JSON.parse('<?= json_encode($yValues); ?>');--}}
{{--                                    --}}{{----}}{{--var barColors = [--}}
{{--                                    --}}{{----}}{{--    "rgba(255, 26, 104, 1)",--}}
{{--                                    --}}{{----}}{{--    "rgba(54, 162, 235, 1)",--}}
{{--                                    --}}{{----}}{{--    "rgba(255, 206, 86, 1)",--}}
{{--                                    --}}{{----}}{{--    "rgba(75, 192, 192, 1)",--}}
{{--                                    --}}{{----}}{{--    "rgba(153, 102, 255, 1)",--}}
{{--                                    --}}{{----}}{{--];--}}

{{--                                    --}}{{----}}{{--new Chart("myChart", {--}}
{{--                                    --}}{{----}}{{--    type: "pie",--}}
{{--                                    --}}{{----}}{{--    data: {--}}
{{--                                    --}}{{----}}{{--        labels: xValues,--}}
{{--                                    --}}{{----}}{{--        datasets: [{--}}
{{--                                    --}}{{----}}{{--            backgroundColor: barColors,--}}
{{--                                    --}}{{----}}{{--            data: yValues--}}
{{--                                    --}}{{----}}{{--        }]--}}
{{--                                    --}}{{----}}{{--    },--}}
{{--                                    --}}{{----}}{{--    options: {--}}
{{--                                    --}}{{----}}{{--        legend: {display: true},--}}
{{--                                    --}}{{----}}{{--        title: {--}}
{{--                                    --}}{{----}}{{--            display: true,--}}
{{--                                    --}}{{----}}{{--            text: "This Month's Monthly Mission Report"--}}
{{--                                    --}}{{----}}{{--        },--}}
{{--                                    --}}{{----}}{{--        layout: {--}}
{{--                                    --}}{{----}}{{--            padding: 26--}}
{{--                                    --}}{{----}}{{--        },--}}
{{--                                    --}}{{----}}{{--        plugins: {--}}
{{--                                    --}}{{----}}{{--            labels: {--}}
{{--                                    --}}{{----}}{{--                render: 'label',--}}
{{--                                    --}}{{----}}{{--                fontStyle: 'bolder',--}}
{{--                                    --}}{{----}}{{--                position: 'outside',--}}
{{--                                    --}}{{----}}{{--            }--}}
{{--                                    --}}{{----}}{{--        },--}}
{{--                                    --}}{{----}}{{--    },--}}
{{--                                    --}}{{----}}{{--    plugins: [ChartDataLabels]--}}
{{--                                    --}}{{----}}{{--});--}}
{{--                                    new Chart(document.getElementById("chartjs-polar-area"), {--}}
{{--                                        type: "polarArea",--}}
{{--                                        data: {--}}
{{--                                            labels: ["Speed", "Reliability", "Comfort", "Safety", "Efficiency"],--}}
{{--                                            datasets: [{--}}
{{--                                                label: "Model S",--}}
{{--                                                data: [35, 38, 65, 70, 24],--}}
{{--                                                backgroundColor: [--}}
{{--                                                    window.theme.primary,--}}
{{--                                                    window.theme.success,--}}
{{--                                                    window.theme.danger,--}}
{{--                                                    window.theme.warning,--}}
{{--                                                    window.theme.info--}}
{{--                                                ]--}}
{{--                                            }]--}}
{{--                                        }--}}
{{--                                    });--}}
{{--                                </script>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </body>--}}
{{--</html>--}}
