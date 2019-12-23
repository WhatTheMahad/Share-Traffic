<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Share Traffic - Store your files</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')   }}">
    <link rel="stylesheet" href="{{ asset('css/style.css')   }}">
    <link rel="stylesheet" href="{{ asset('css/fixed.css')   }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/drive.css')   }}">


</head>

<body data-spy="scroll" data-target="#navbarResponsive">

<!--- start home section --->
<div id="home">

    <!--- nav --->
    @section('navbar')
    <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
 
    <!--- end nav --->
    <!--- land page -->
@show
@section('content')
    <div class="landing">
        <div class="home-wrap">
            <div class="home-inner" style="background-image: url('img/computers.png')">

            </div>
        </div>
    </div>

    <div class="caption text-center">
        <h1>Welcome to Share Traffic</h1>
        <h3> A safe place for all your files </h3>
        <a class="btn btn-outline-light btn-lg" href="/page">Get Started</a>
    </div>
    <!-- end land -->

</div>
<!---end home --->


<!--- div2 --->
<div id="div2" class="offset">
    <div class="row" align="right">
        <div class="col-md-6">
            <img src="img/files.jpg">
        </div>

        <div class="col-md-6 narrow text-center">
            <h1>Store any file</h1>
            <p class="lead">Keep photos, stories, designs, drawings,</br>
                recordings, videos, and more. Your first</br> 15 GB of storage
                are free with a Google</br> Account.</p>
        </div>
    </div>
</div>
<!---Div2 --->

<!--- div3 --->

<div id="div3" class="offset">
    <div class="row" align="right">
        <img src="img/div3.jpg" style="width: 100% ">
    </div>
</div>
<!---div3 --->


<!--- div4 --->

<div id="div4" class="offset">
    <div class="row" align="right">
        <div class="col-md-6 narrow text-center">
            <h1>Store any file</h1>
            <p class="lead">Keep photos, stories, designs, drawings,</br>
                recordings, videos, and more. Your first</br> 15 GB of storage
                are free with a Google</br> Account.</p>
        </div>

        <div class="col-md-6">
            <img src="img/div4.png">
        </div>
    </div>
</div>

<!---div4 --->


<!--- div5--->

<div id="div5" class="offset">

    <div class="row">
        <img src="img/divv55.jpeg">
    </div>
</div>
<!---div5 --->




<!--- div6 --->
<div id="div6" class="offset">
    <div class="col-12 narrow text-center" style="padding-top: 100px; padding-bottom: 100px">
        <p>    <img src="img/log.png"></p>

        <p class="apple">Get started with Drive for free</p>
        <a class="btn btn-outline-dark btn-md text-white"  target="_blank" href="/signup">Go To Share Traffic</a>
    </div>
</div>
<!---div6 --->

<!--- footer --->
<div id="div7" class="offset">
    <footer>
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <h4> Share Traffic </h4>
                    </div>
                    <div class="col-lg-3 col-sm-2 col-xs-3">
                        <h3> Contact </h3>
                        <ul>
                            <li><a class="email"href="#"> Insert Email Here </a></li>
                            <br/>
                            <li> <p> Address Line One </p> </li>
                            <li> <p> Address Line Two </p> </li>
                        </ul>
                    </div>


                    <!--/.row-->
                </div>
                <!--/.container
                -->
            </div>
            <!--/.footer-->

            <div class="footer-bottom">
                <div class="container">
                    <p class="pull-left copyright"> Copyright © Share Traffic. All rights reserved. </p>

                </div>
            </div>
            <!--/.footer-bottom-->

    </footer>
</div>
<!---footer--->

<!--- Script Source Files -->
<script src="{{ asset('js/style.js')   }}"></script>


<script src="{{ asset('js/bootstrap-4.1.3-dist/js/bootstrap.min.js')   }}"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<!--- End of Script Source Files -->
@show
</body>
</html>