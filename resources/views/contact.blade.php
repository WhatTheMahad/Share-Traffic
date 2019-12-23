<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Share Traffic - Store your files</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')   }}">

    <link rel="stylesheet" href="{{ asset('css/style.css')   }}">
    <link rel="stylesheet" href="{{ asset('css/fixed.css')   }}">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">

<!--- start home section --->
<div id="home">

    <!--- nav --->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

        <div class = "gfg">
            <p style="text-align: right" ><a href="/index"><img src="img/log.png"></a></p>
        </div>
        <div class="site-logo">
            <h4 style=" color: white; font-size: 1.1rem; font-weight: 700; letter-spacing: .3rem;">Share Traffic</h4>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/index">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/signup">Signup</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--- end nav --->
    <!--- land page -->


    <div class="landing">
        <div class="home-wrap">
            <div class="home-inner" style="background-image: url('computers.png')">

            </div>
        </div>
    </div>

    <div class="caption text-center">
        <h1>Contact Us</h1>
        <h3>Contact Us Anytime </h3>
    </div>
    <!-- end land -->

</div>
<!---end home --->


<!--- div2 --->
<div id="div2" class="offset">
    <div class="row" align="right">

        <div class="container-contact100">

            <div class="wrap-contact100">
                <form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

                    <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                        <input class="input100" type="text" name="name" placeholder="Full Name">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
                        <input class="input100" type="text" name="email" placeholder="E-mail">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
                        <input class="input100" type="text" name="phone" placeholder="Phone">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Please enter your message">
                        <textarea class="input100" name="message" placeholder="Your Message"></textarea>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Send
						</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>



        <div id="dropDownSelect1"></div>


    </div>
</div>
<!---Div2 --->


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
                            <li><a class="email"href="#"> insert email here </a></li>
                            <br/>
                            <li> <p> address line one </p> </li>
                            <li> <p> address line two </p> </li>
                        </ul>
                    </div>


                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
            <!--/.footer-->

            <div class="footer-bottom">
                <div class="container">
                    <p class="pull-left copyright"> Copyright © Footer 2014. All right reserved. </p>

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

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<!--- End of Script Source Files -->

</body>
</html>
