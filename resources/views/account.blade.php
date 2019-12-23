<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/acc.css')   }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title>Title</title>
</head>
<body>


<header role="banner">
    <nav class="navbar navbar-expand-lg  bg-light">
        <div class="container-fluid">
            <div class = "gfg">
                <p style="text-align: center" ><a href="/index"><img src="img/log.png"></a></p>
            </div>

            <div class="navbar-nav ml-auto">
                <form method="post" class="search-form">
                    <span class="icon ion ion-search"></span>
                    <input type="text" class="form-control" placeholder="Search...">
                </form>
            </div>

            <div class="collapse navbar-collapse" id="navbarsExample05" style="padding-left: 800px " >
                <ul class="navbar-nav pl-md-5 mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Signout</a>
                    </li>
                    <li class="nav-item" style="text-align: right">
                        <a class="nav-link" href="/account">Account</a>
                    </li>
                </ul>



            </div>
        </div>
    </nav>
</header>
<!-- END header -->


<div class="page-wrapper">
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3" >
                        <div class="widget">
                            <div class="user-photo">
                                <a href="#">
                                    <img src="agent-2.jpg" alt="User Photo">
                                    <span class="user-photo-action">Click here to reupload</span>
                                </a>
                            </div><!-- /.user-photo -->
                        </div><!-- /.widget -->


                        <div class="widget">

                            <ul class="menu-advanced">
                                <li class="list-group-item list-group-item-light"><a href="/pass">Password</a></li>
                            </ul>
                        </div><!-- /.widget -->

                    </div><!-- /.col-* -->

                    <div class=" col-lg-9">
                        <div class="content">
                            <div class="page-title">
                                <h1>Edit Profile</h1>
                            </div><!-- /.page-title -->

                            <div class="background-white p20 mb30" style="    background-color: #f7f8f9;
">
                                <h3 class="page-title">
                                    Contact Information

                                    <a href="#" class="btn btn-primary btn-xs pull-right">Save</a>
                                </h3>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>Name</label>
                                        <input type="text" class="form-control" value="John">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-6">
                                        <label>Surname</label>
                                        <input type="text" class="form-control" value="Doe">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-6">
                                        <label>E-mail</label>
                                        <input type="text" class="form-control" value="sample@example.com">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-6">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" value="123-456-789">
                                    </div><!-- /.form-group -->
                                </div><!-- /.row -->
                            </div>

                            <div class="background-white p20 mb30" style="    background-color: #f7f8f9;">
                                <h3 class="page-title">
                                    Social Connections

                                    <a href="#" class="btn btn-primary btn-xs pull-right">Save</a>
                                </h3>

                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Facebook</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="http://facebook.com/">
                                        </div><!-- /.col-* -->
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Twitter</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="http://twitter.com/">
                                        </div><!-- /.col-* -->
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Linkedin</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="http://linkedin.com/">
                                        </div><!-- /.col-* -->
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Dribbble</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="http://dribbble.com/">
                                        </div><!-- /.col-* -->
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Instagram</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="http://instagram.com/">
                                        </div><!-- /.col-* -->
                                    </div><!-- /.form-group -->
                                </div><!-- /.form-inline -->
                            </div><!-- /.background-white -->

                            <div class="background-white p20 mb30" style="    background-color: #f7f8f9;">
                                <h3 class="page-title">
                                    Address

                                    <a href="#" class="btn btn-primary btn-xs pull-right">Save</a>
                                </h3>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>State</label>
                                        <input type="text" class="form-control" value="New York">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-6">
                                        <label>City</label>
                                        <input type="text" class="form-control" value="New York City">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-6">
                                        <label>Street</label>
                                        <input type="text" class="form-control" value="Everton Eve">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-3">
                                        <label>House Number</label>
                                        <input type="text" class="form-control" value="123">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-3">
                                        <label>ZIP</label>
                                        <input type="text" class="form-control" value="12345">
                                    </div><!-- /.form-group -->
                                </div><!-- /.row -->
                            </div>

                            <
                        </div><!-- /.content -->
                    </div><!-- /.col-* -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->


</div>

</div>

</body>
</html>
