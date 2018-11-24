<!------------------------------AUTHENTICATION----------------------->
        <?php
            session_set_cookie_params(600);
            session_start();
            error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
            ini_set('display_errors' , 1);
            
            include ("sqlaccount.php") ;

            $db = mysqli_connect($hostname, $username, $password, $project);

            mysqli_select_db($db, $project); 
 
            //check if authenticated
            if (!$_SESSION['login']){
                echo"
                <script>
                    alert(\"Not logged in...\");
                    window.location.replace(\"http://saenjit.com/memberlogin.html\");
                </script>";
                exit();
            }
            //creates datetime object, then record in it database
            date_default_timezone_set('America/New_York');
            $dateTime = date("Y-m-d H:i:s");
            $email = $_SESSION['email'];
            $name = $_SESSION["name"];
            
            $s = "UPDATE LoginTable SET LastLogin='$dateTime' WHERE Email = '$email'"; 
            $t = mysqli_query($db,$s);

            //Positions
            $EA = false;
            $EDA = false;
            $Warden = false;
            $MemberEd = false;
            $Recorder = false;
            $Treasurer = false;
            $Herald = false;
            $Health = false;
            $Recruitment = false;
            $Scholarship = false;

            //End Positions
            
            /*if ($permissions == "S") {
                $Scholarship = true;
            }
            if ($permissions == "T") {
                $Treasurer = true;
                $_SESSION['treasurer'] = true;
            }*/
        ?>
<!------------------------------------------------------------------->

<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ΣAE - NJIT | Members Only</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="/images/inescutcheon.png" rel="icon">
  <link href="/images/inescutcheon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                  <h1><span style="color: #7851a9;">ΣAE</span><span style="color: #cfb53b;"> NJIT</span></h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="changepassword.php">Change Password</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="memberlogout.php">Logout</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Phi Alpha, <?php echo $name ?>. </h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Welcome to the Members-only section</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              
            </div>
            <div class="single-blog-page">
             
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                  
<!--Documents and Links Section-->
                <h4>Documents/Links</h4>
                <ul>
                  <li>
                    <a href="<?php $_SESSION['document'] = 'budget';
                                    echo "/documents/BudgetF18";?>">Budget</a>
                  </li>
                  <li>
                    <a href="/documents/FundraisingF18.pdf">Fundraising</a>
                  </li>
                  <li>
                    <a href="/documents/PhilanthropyF18.pdf">Philanthropy</a>
                  </li>
                  <li>
                    <a href="/documents/SlushF18.pdf">Slush</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- single-blog start -->
              <div class="clear"></div>
                <!-- begin wwww.htmlcommentbox.com -->
                 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Form</a> is loading comments...</div>
                 <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
                 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24TLObCwU.tyGOo6t.hUc1u1"+"&opts=16862&num=50&ts=1540953263416");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
                <!-- end www.htmlcommentbox.com -->
                
              <!-- single-blog end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->
  <div class="clearfix"></div>

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>Our</span><span style="color: #cfb53b;"> Creed</span></h2>
                </div>

                  <p style="font-size: 10px;">The <span style="color:#7851A9;">True</span> <span style="color: #cfb53b;">Gentleman</span> is the man whose conduct proceeds from good will and an acute sense of propriety, and whose self-control is equal to all emergencies; who does not make the poor man conscious of his poverty, the obscure man of his obscurity, or any man of his inferiority or deformity; who is himself humbled if necessity compels him to humble another; who does not flatter wealth, cringe before power, or boast of his own possessions or achievements; who speaks with frankness but always with sincerity and sympathy; whose deed follows his word; who thinks of the rights and feelings of others, rather than his own; and who appears well in any company, a man with whom honor is sacred and virtue safe.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/SAE.NJIT/"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="https://twitter.com/SAE_NJIT"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/sae_njit/"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Feel free to contact us.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> We'll Call You</p>
                  <p><span>Email:</span> saenjiotatau@gmail.com</p>
                  <p><span>Address:</span> 15 Greek Way</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>ΣAE - NJIT</strong>. All Rights Reserved.
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              Designed by <a href="http://toddamurphy.me/">Todd Murphy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>

</html>
