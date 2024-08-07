@extends('master')
@section('content')
<!doctype html>
<html class=no-js lang="">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset=utf-8>
        <meta name=description content="">
        <meta name="viewport"
            content="width=device-width, height=device-height,
            initial-scale=1.0, user-scalable=0, minimum-scale=1.0,
            maximum-scale=1.0">
        <title>golden goal</title>

        <link rel="shortcut icon" href="/css/favicon.ico">
        <link rel="stylesheet" href="/css/vendor.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" type=text/css href="/css/layerslider.css">
        {{-- <script src="/js/modernizr.js"></script> --}}

    </head>
    <style>
        .banner {
  position: relative;
  width: 100%;
  /* max-width: 400px; */
}

/* .banner img {
  width: 100%;
  height: auto;
} */

.banner .btn {
  position: absolute;
  top: 91%;
  left: 64%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: black;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  z-index: 10;
}

.banner .btn:hover {
  background-color: black;
}
    </style>
    <body><!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
        <div class=wrapper>
            <header class=header-main>
                <div class=header-upper>

                    <div class="header-lower clearfix">
                        <div class=container>
                            <div class=row><h1 class=logo><a href="{{ url('/') }}"><img
                                            src="/images/logo.png" alt=image style="width:154px;" class="logo-img"></a></h1>
                                <div class=menubar>
                                    <nav class=navbar>
                                        <div class=nav-wrapper>
                                            <div class=navbar-header>
                                                <button type=button
                                                    class=navbar-toggle><span
                                                        class=sr-only>Toggle
                                                        navigation</span>
                                                    <span class=icon-bar></span></button>
                                            </div>
                                            <div class=nav-menu>
                                                <ul class="nav navbar-nav
                                                    menu-bar">
                                                    <li>
                                                        <a href="{{ url('/') }}"
                                                            class=active>Home
                                                        </a>
                                                    </li>
                                                    <li><a href="{{ url('/terms-condition') }}">Terms &&
                                                            Conditions
                                                            <span></span> <span></span>
                                                            <span></span>
                                                            <span></span></a></li>
                                                    <li><a href="{{ url('/privacy-policy') }}">Privacy
                                                            Policy<span></span>
                                                            <span></span>
                                                            <span></span> <span></span></a></li>
                                                   <li><a href="{{ url('/download') }}">Download
                                                            <span></span>
                                                            <span></span>
                                                            <span></span> <span></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                                <div class=social><a
                                        href=https://www.facebook.com/templatespoint.net
                                        class=facebook><i
                                            class="fa fa-facebook"></i></a> <a
                                        href=https://twitter.com/itobuztech
                                        class=twitter><i
                                            class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>


    <div class=banner id=layerSlider style="width: 100%;">
        <div class=ls-slide data-ls="transition3d: 33,15;
            slidedelay:
            8000 ; durationin:0;"><img
                src="images/banner/background01.jpg" class=ls-bg
                alt="Slide background">

            <div class="ls-l layercontent01" style="top: 50%; left:
                50%;
                z-index:4;"
                data-ls="offsetxin:left; offsetxout:right;
                durationin:
                4000; parallaxlevel: 8;"><img
                    src=images/banner/player.png alt=innerimage
                    class=img-responsive
                    style="max-width: 100% !important ;"></div>
            <img src=images/banner/ball.png alt=innerimage
                class="ls-l
                layercontent02" style=z-index:5;
                data-ls="offsetxin: right; offsetxout:left;
                rotatein:-360; easingin: easeoutquart; durationin:
                4000;
                delayin: 250; parallaxlevel: -5;">
            <img src=images/banner/front_particles.png alt=particles
                class=ls-l style="z-index:3; left:0;"
                data-ls="offsetxin: left; offsetxout:left;
                scalexin:50;
                easingin: easeoutquart; durationin: 3000; delayin:
                250;">
            <img src=images/banner/back_particles.png alt=particles
                class=ls-l style="z-index:3; left:50%;"
                data-ls="offsetxin: left; offsetxout:left;
                scalein:90;
                easingin: easeoutquart; durationin: 3000; delayin:
                250;">

            <h2 class="ls-l bannertext layercontent03"
                data-ls="offsetxin:left; rotatexin:90 ; durationin:
                3500;">
                action</h2>

            <h2 class="ls-l bannertext01 italic01 layercontent04"
                data-ls="offsetxin:left; scalexin:9; durationin:
                4000;">starts</h2><h4
                class="ls-l bannertext02 layercontent05"
                data-ls="offsetxin:left; rotatexin:90 ; durationin:
                4500;">
                from</h4>

            <h2 class="ls-l bannertext01 layercontent06"
                style="left:
                87%; top:760px;"
                data-ls="offsetxin:left; flipxin:90 ; durationin:
                5000;">21<sup>st</sup></h2><h6
                class="ls-l bannertext03 layercontent07"
                data-ls="offsetxin:left; flipxin:90 ; durationin:
                6000;">
                july , 2020</h6></div>

            <a href="https://goldengoalmyanmar.com/GoldenGoal.apk" class="btn">Download the App</a>
            {{-- <a href="{{ url('/download/apk') }}" class="btn">Download the App</a> --}}

    </div>
    <div class=banner-text>
        <div class=container>
            <div class=row>action start from 21<sup>st</sup> july ,
                2020.</div>
        </div>
    </div>

@endsection

