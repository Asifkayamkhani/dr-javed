<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KM-Advanced-Pain-Management-Center</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://technext.github.io/fronted/images/favicon.ico" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('fronted/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{asset('fronted/plugins/icofont/icofont.min.css')}}">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{asset('fronted/plugins/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('fronted/plugins/slick-carousel/slick/slick-theme.css')}}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('fronted/css/style.css')}}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="top">

    <header>
        <div class="header-top-bar ">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-6">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item"><a href="mailto:Kmadvpain@gmail.com"><i
                                        class="icofont-support-faq mr-2"></i>Kmadvpain@gmail.com</a></li>
                            <li class="list-inline-item"><a href="https://maps.app.goo.gl/TFPtWuo1KYPrwemo6"><i
                                        class="icofont-location-pin mr-2"></i>Clinik Location</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="tel:+919983349786">
                                <span><i class="fa fa-phone" aria-hidden="true" style="font-size:20px; "></i> </span>
                                <span class="h4">+919983349786</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navigation aasi11" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('fronted/images/logo.png')}}" width="150px" alt="" class="img-fluid">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                    aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    @include('fronted.layout.page')
                </div>
            </div>
        </nav>
    </header>