<?php
use App\Models\CustomerDetails;
$customer_name =CustomerDetails::where('user_id', Auth::user()->id)->value('first_name');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <title>Zebra Brain</title>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dashboard_styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS for full calender -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />



</head>

<body>
    <div class="container-fluid">
        <div class="row px-0 ">
            <div class="col-md-2 dashboard-nav vh-100 hideOnMobile flex-column">
                <div class="logo">
                    <img src="{{ asset('assets/images/zebra_logo.PNG') }}" alt="Logo">
                </div>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('dashboard')}}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('tips')}}">Your Flow & Grow Tips</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('consultation-booking')}}">Consultation
                            Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('internships')}}">Internships</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('scholarships')}}">Scholarships</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('university-programs')}}">Universities
                            Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('test-attempt')}}">My Test Attempts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('profile')}}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('events')}}">Our Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('packages')}}">Pricing Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('parent-community')}}">Parent Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('supar-future-club')}}">Super Future
                            Club</a>
                    </li>
                    <li class="nav-item logout">
                        <a class="nav-link " aria-current="page" href="{{url('logout')}}">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10 vh-100 overflow-auto px-0 dashbordContainer">
                <div class="row dashboard-top align-items-center hideOnMobile">
                    <div class="col-md-3 text-start">
                        <div class="input-group search">
                            <input type="text" class="form-control" placeholder="Type what you need to know"
                                style="background: transparent;">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-1 text-end">
                        <i class="fa-solid fa-bell"></i>
                    </div>
                    <div class="col-md-2 text-start">
                        <div class="row  align-items-center">
                            <div class="col-6 text-start">
                                <h1 class="user-name">{{$customer_name}}</h1>
                                <a href="{{url('logout')}}">
                                    <h1 class="logout ">Logout</h1>
                                </a>
                            </div>
                            <div class="col-6 text-start">
                                <img src="{{ asset('assets/images/zebra2.PNG') }}" class="user-image">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- mobile navbar --}}
                <nav class="navbar navbarMobile displayOnMobile">
                    <div class="container d-flex justify-content-between">
                        <button class="navbar-toggler" type="button" id="navbarToggleBtn">
                            <i class="bi bi-list"></i>
                        </button>
                        <img src="{{ asset('assets/images/zebra_logo.PNG') }}" alt="Logo"
                            style="height: 30px; width: auto">
                        <div class="d-flex flex-row align-items-center">
                            <i class="bi bi-bell-fill signoutTxt me-2"></i>
                            <a href="{{url('logout')}}">
                                <h1 class="signoutTxt mb-0">Sign Out</h1>
                            </a>
                        </div>

                    </div>
                </nav>
                <div class="d-flex px-3 py-2">
                    <a href="#" class="backLink">
                        <i class="fa fa-angle-left"></i>
                        Back
                    </a>
                </div>
                {{-- mobile drawer --}}
                <div class="drawer px-3 py-2" id="drawer">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col drawerContentWrapper">
                                <div class="d-flex ">
                                    <a href="#" class="backLinkDrawer">
                                        <i class="fa fa-angle-left"></i>
                                        Back
                                    </a>
                                </div>
                                <h2 class="drawerTitle text-center mt-3 mb-4">Menu</h2>
                                <ul class="nav flex-column text-center mobileDrawerMenu">
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('dashboard')}}">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('tips')}}">Your Flow & Grow Tips</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('consultation-booking')}}">Consultation
                                            Bookings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('internships')}}">Internships</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('scholarships')}}">Scholarships</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('university-programs')}}">Universities
                                            Programs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('test-attempt')}}">My Test Attempts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('profile')}}">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('events')}}">Our Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('packages')}}">Pricing Packages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('parent-community')}}">Parent Community</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('supar-future-club')}}">Super Future
                                            Club</a>
                                    </li>
                                    <br>
                                    <li class="nav-item logout">
                                        <a class="nav-link " aria-current="page" href="{{url('logout')}}">Logout</a>
                                    </li>
                                </ul>
                                {{-- <button type="button" class="btn-close float-end" aria-label="Close"
                                    id="closeDrawerBtn"></button> --}}
                            </div>
                        </div>
                    </div>
                </div>