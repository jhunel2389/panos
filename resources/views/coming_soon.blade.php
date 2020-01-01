<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Panos Security</title>

        <!-- Bootstrap -->
        <link href="{{ asset('resources/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- custom css -->
        <link href="{{ asset('resources/css/style.css')}}" rel="stylesheet" type="text/css" media="screen">
        <!-- font awesome for icons -->
        <link href="{{ asset('resources/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

        <!-- animated css  -->
        <link href="{{ asset('resources/css/animate.css')}}" rel="stylesheet" type="text/css" media="screen">
        <!--web fonts-->      
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,900,500' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="soon-logo">Panos Security</h1>
                    <div class="soon-info-text">
                        <h2>Coming soon</h2>
                        <p class="lead">We are working hard on this website and launch as soon as possible</p>
                    </div>
                </div>
            </div><!--intro text row-->
            <!-- <div class="row">
                <div class="col-md-12 text-center">
                    <div id="defaultCountdown"></div>
                </div>
            </div> -->
            <!--countdown row-->         
        </div><!--.container-->
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center animated fadeInLeft">
                  
                    <!-- <form class="form-inline soon-form" role="form">
                          <h4>Notify me When Website Launch</h4>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email">
                        </div>
                        <a href="index-2.html" class="btn-white-border btn btn-lg">Notify me</a>
                    </form> -->
                </div>
            </div>
        </div>
        <footer id="footer">
            <!-- <ul class="list-inline soon-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul> -->
            <span>&copy;2020 | Panos Security</span>
        </footer><!--footer-->
        <!--scripts and plugins -->
        <!--must need plugin jquery-->
        <script src="{{ asset('resources/js/jquery.min.js')}}"></script>        
        <!--bootstrap js plugin-->
        <script src="{{ asset('resources/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <!--easing plugin for smooth scroll-->
        <script src="{{ asset('resources/js/jquery.easing.1.3.min.js')}}" type="text/javascript"></script>        
        <script src="{{ asset('resources/js/jquery.backstretch.min.js')}}" type="text/javascript"></script>
        <!--customizable plugin edit according to your needs-->
        <script src="{{ asset('resources/js/custom.js')}}" type="text/javascript"></script>
        <!--countdown coming soon-->
        <script src="{{ asset('resources/js/jquery.countdown.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                var austDay = new Date();
                austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
                $('#defaultCountdown').countdown({until: austDay});
                $('#year').text(austDay.getFullYear());
            });
        </script>

    </body>

</html>
