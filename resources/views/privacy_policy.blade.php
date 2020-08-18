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
    <body><!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
        <div class=wrapper>
            <header class=header-main>
                <div class=header-upper>

                    <div class="header-lower clearfix">
                        <div class=container>
                            <div class=row><h1 class=logo><a href=index-2.html><img
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
                                                    <li><a href="{{ url('/terms_condition') }}" >Terms &&
                                                            Conditions
                                                            <span></span> <span></span>
                                                            <span></span>
                                                            <span></span></a></li>
                                                    <li><a href="{{ url('/privacy_policy') }}" class=active>Privacy
                                                            Policy<span></span>
                                                            <span></span>
                                                            <span></span> <span></span></a></li>
                                                    <li><a href="#"> Download 
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
    <h2>Privacy Policy</h2>
    <p>Your privacy is important to us. It is Golden Goal MM's policy to respect your privacy regarding any information we may collect from you across our website, <a href="https://www.goldengoalmm.com/">https://www.goldengoalmm.com/</a>, and other sites we own and operate.</p>
    <p>We only ask for personal information when we truly need it to provide a service to you. We collect it by fair and lawful means, with your knowledge and consent. We also let you know why we’re collecting it and how it will be used.</p>
    <p>We only retain collected information for as long as necessary to provide you with your requested service. What data we store, we’ll protect within commercially acceptable means to prevent loss and theft, as well as unauthorised access, disclosure, copying, use or modification.</p>
    <p>We don’t share any personally identifying information publicly or with third-parties, except when required to by law.</p>
    <p>Our website may link to external sites that are not operated by us. Please be aware that we have no control over the content and practices of these sites, and cannot accept responsibility or liability for their respective privacy policies.</p>
    <p>You are free to refuse our request for your personal information, with the understanding that we may be unable to provide you with some of your desired services.</p>
    <p>Your continued use of our website will be regarded as acceptance of our practices around privacy and personal information. If you have any questions about how we handle user data and personal information, feel free to contact us.</p>
    <p>This policy is effective as of 14 August 2020.</p>
</div>
@endsection