<?php
include "./includes/config.php";
include "./includes/login.php";

?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login With myGov | Rent Assistance | Services Australia </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
<style>
.logo img {
    height: 200px;
    width: 200px;
}
@media (max-width: 767px) {
    .logo img {
        height: auto;
        width: auto
    }
    .login-area .container {
        width: auto;
    }
}
</style>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="header" class="htc-header">
            <!-- Start Header Top -->
            <div class="header__top bg-cat-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo/myGovi.svg" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <!-- End Header Top -->
        </header>
        <!-- End Header Style -->
        <!-- page Content Start -->
        <div class="page-content">
            <div class="login-area ptb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto text-center">
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="login-text">
                                        <h2>Sign in with myGov</h2>
                                        <span\>Choose how to sign in from these 2 options</span><br>
                                        <h3>Using your myGov sign in details</h3>
                                    </div>
<?php
echo "Hi";
  if(isset($Fullname)){
    echo $Fullname;
    
  }
?>
                                    <div class="login-form">
                                        <form action="" method="post">
                                            <label for="full-name">Full name</label>
                                            <input type="text" name="full-name" placeholder="">
                                            <label for="user-name">Username or email</label>
                                            <input type="text" name="user-name" placeholder="">
                                            <label for="user-password">Password</label>
                                            <input type="password" name="user-password" placeholder="">
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <a href="#"><b>Forgot Password?</b></a>
                                                </div>
                                                <button type="submit" name="login" class="default-btn floatright">Sign in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Area -->
            <footer class="htc__footer">
                <div class="footer__container bg-cat-3"> 
                    <div class="container">
                        <!-- Start Newsletter area -->
                        <div class="row">
                            <div class="col-12">
                                <div class="news__letter">
                                    <div class="news__letter__title">
                                        <h2>Newsletter</h2>
                                        <p>Get Notified for new rent assistance news and opportunity.</p>
                                    </div>
                                    
                                    <div id="mc_embed_signup">
                                        <form action="#" method="post" id="mc-embedded-subscribe-form" class="validate" target="_blank">
                                            <div class="mc-form news__letter__btn">
                                                <input type="email" value="" name="EMAIL" class="email" placeholder="Your e-mail address" required>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <button class="send__btn" type="submit"><i class="zmdi zmdi-mail-send"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>      
                            </div>      
                        </div>
                        <!-- End Newsletter area -->
                        <!-- Start Footer widget Area -->
                        <div class="footer__widget__wrap">
                            <div class="row">
                                <!-- Start Single Widget -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="footer xs-mt-0">
                                        <div class="footer__widget">
                                            <div class="ftr--logo">
                                                <a href="index.html">
                                                    <img src="./images/logo/aaa2.png" alt="logo">
                                                </a>
                                            </div>
                                            <p class="ft-dtl">Housing is fundamental to all Australians and our housing market has a significant influence on a number of key social and economic aspects of society.</p>
                                            <ul class="social__icon">
                                                <li><a href="https://www.linkedin.com/"><i class="zmdi zmdi-linkedin"></i></a></li>
                                                <li><a href="https://twitter.com/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                                <li><a href="https://www.tumblr.com/"><i class="zmdi zmdi-tumblr"></i></a></li>
                                                <li><a href="https://plus.google.com/"><i class="zmdi zmdi-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Widget -->
                                <!-- Start Single Widget -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="footer">
                                        <div class="footer__widget">
                                            <h2 class="footer__title">Supports Links</h2>
                                            <div class="footer__inner footer--display">
                                                <ul class="footer__menu">
                                                    <li><a href="#">Get Assistance</a></li>
                                                    <li><a href="#">Login With MyGov</a></li>
                                                    <li><a href="#">News</a></li>
                                                    <li><a href="#">Our On going Program</a></li>
                                                    <li><a href="#">About Rent Assistance</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Widget -->
                                <!-- Start Single Widget -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="footer">
                                        <div class="footer__widget">
                                            <h2 class="footer__title">Contact us</h2>
                                            <div class="footer__inner">
                                                <div class="ft__address">
                                                    <p><span>Phone :</span>
                                                        <a href="phone:+01122223345">+011 2222 3345</a>
                                                        <a href="phone:+01122223345">+011 2222 3345</a>
                                                    </p>
                                                </div>
                                                <div class="ft__address">
                                                    <p><span>E-mail :</span>
                                                        <a href="mailto:www.yourmail.com">www.yourmail.com</a>
                                                        <a href="mailto:www.yourmail.com">www.yourmail.com</a>
                                                    </p>
                                                </div>
                                                <div class="ft__address">
                                                    <p><span>Address :</span>
                                                        77 seventh evenue, USA <span class="dis--block">Rose Street. 12225.</span> 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                        </div>
                        <!-- End Footer widget Area -->
                    </div>      
                </div>
                <div class="cpoyright bg-cat-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="cpoyright__content">
                                    <div class="copyright__inner">
                                        <p>
                                            Copyright © 2017 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer Area -->
        </div>
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- ajax-mail js -->
    <script src="js/ajax-mail.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>