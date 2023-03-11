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

        <meta content='Golden goal is the best choice for the customer.' name='description' ng-if='metadata.description'>
        <meta content='en_US' property='og:locale'>
        <meta content='593758534890229' property='fb:app_id'>
        <meta content='blog' ng-if='og_meta.type' property='og:type'>
        <meta content='https://goldengoalmyanmar.com/' ng-if='og_meta.url' property='og:url'>
        <meta content='goldengoal' ng-if='og_meta.title' property='og:title'>
        <meta content='https://goldengoalmyanmar.com/storage/logo.png' ng-if='og_meta.image' property='og:image'>
        {{-- <meta content='{{og_meta.image_width}}' ng-if='og_meta.image_width' property='og:image:width'>
        <meta content='{{og_meta.image_height}}' ng-if='og_meta.image_height' property='og:image:height'> --}}
        <meta content='Golden goal is the best choice for the customer.' ng-if='og_meta.description' property='og:description'>
        <meta content='RoadGoat' property='og:site_name'>

        <title>golden goal</title>

        <link rel="shortcut icon" href="/css/favicon.ico">
        <link rel="stylesheet" href="/css/vendor.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" type=text/css href="/css/layerslider.css">
        {{-- <script src="/js/modernizr.js"></script> --}}
        <style>

            /* mouse over link */
            a:hover {
              color: hotpink;
            }
        </style>
    </head>
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
                                            src="images/logo.png" alt=image style="width:154px;" class="logo-img"></a></h1>
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
                                                            >Home
                                                            <span></span> <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </a>
                                                    </li>
                                                    <li><a href="{{ url('/terms-condition') }}" >Terms &&
                                                            Conditions
                                                            <span></span> <span></span>
                                                            <span></span>
                                                            <span></span></a></li>
                                                    <li><a href="{{ url('/privacy-policy') }}">Privacy
                                                            Policy<span></span>
                                                            <span></span>
                                                            <span></span> <span></span></a></li>
                                                    <li><a href="{{ url('/download') }}" class=active> Download
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

    <div class="container" style="margin-top: 154px;">
        <a href="{{ url('/download/apk') }}"><h2> CLick Here To Download Directly</h2></a>
        <br>
        <br>
        <h2><strong>Another Download Links</strong></h2>
        <br>
        <br>
        <h4>Google Drive</h4>
        <a class="downloadLink" href="https://drive.google.com/file/d/1Zbz1m3l_4GhO3_St_XyR-3nogzBaMoMT/view?usp=share_link" target="_blank"
            >Click Here To Download
        </a>
        <br>
        <br>
        <h4>DropBox</h4>
        <a class="downloadLink" href="https://www.dropbox.com/s/2m34v1mwkp1i5i8/GoldenGoal.apk?dl=0" target="_blank"
            >Click Here To Download
        </a>
        <br>
        <br>
        <h4>PCloud</h4>
        <a class="downloadLink" href="https://u.pcloud.link/publink/show?code=XZJD1gVZuidNk0nGBBXwJYdT3vLLpksJxqAV" target="_blank"
            >Click Here To Download
        </a>
        <br>
        <br>
        <h4>Megaup</h4>
        <a class="downloadLink" href="https://megaup.net/1SDbo/GoldenGoal.apk" target="_blank"
            >Click Here To Download
        </a>
        <br>
        <br>
        <br>
        <br>



    </div>
@endsection
