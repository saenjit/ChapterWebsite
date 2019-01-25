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
            if (!$_SESSION['webmaster']){
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
            $s = "UPDATE LoginTable SET LastLogin='$dateTime' WHERE Email = '$email'"; 
            $t = mysqli_query($db,$s);

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
                <h1 class="title2">Welcome Webmaster. </h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Scroll down for all webmaster tools.</h2>
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
                  <!--Redirects to documentredirect.php, which with get with post which document and then redirect to appropriate document-->
                <form action = "/documentredirect.php" method = "post" name=documentForm id=documentForm>
                    <?php
                        $s = "SELECT * FROM FilesForWebsite";
                        $t = mysqli_query($db,$s);
                        echo "<select name='documentsSelect' id='documentsSelect'>";
                        echo "<option value='none'>(select a document to view)</option>";
                        while ( $r = mysqli_fetch_array($t,MYSQLI_ASSOC) ) {
                            $name                   = $r[ "Filename" ];
                            echo "<option value='";
                            echo $name."'>";
                            echo $name."</option>";
                        }
                        echo "</select>";
                    ?>
                    <input type = submit value = "View">
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!--Main Body-->
<!-------------------------------------------------------------Drop down menu Javascript/CSS------------------------------------------------------------->
                
                <style>
                    #addMember {display: none;}
                    #checkLastLogin {display: none;}
                    #resetPassword {display: none;}
                    #disableAccount {display: none;}
                    #checkActiveAccounts {display: none;}
                    #deleteMember {display: none;}
                    #enableAccount {display: none;}
                    #changeContactEmail {display: none;}
                    #enableSmashAccess {display: none;}
                    #disableSmashAccess {display: none;}
                </style> 

                <script>
                    function appear(){
                        addMemberPointer = document.getElementById("addMember")
                        checkLastLoginPointer = document.getElementById("checkLastLogin")
                        resetPasswordPointer = document.getElementById("resetPassword")
                        disableAccountPointer = document.getElementById("disableAccount")
                        checkActiveAccountsPointer = document.getElementById("checkActiveAccounts")
                        deleteMemberPointer = document.getElementById("deleteMember")
                        enableAccountPointer = document.getElementById("enableAccount")
                        changeContactEmailPointer = document.getElementById("changeContactEmail")
                        enableSmashAccessPointer = document.getElementById("enableSmashAccess")
                        disableSmashAccessPointer = document.getElementById("disableSmashAccess")
                        dropDownMenu = document.getElementById("webmasterTools")
                        $toolChoice = dropDownMenu.value


                        switch($toolChoice){
                            case "1":
                                addMemberPointer.style.display = "block"
                                checkLastLoginPointer.style.display = "none"
                                resetPasswordPointer.style.display = "none"
                                disableAccountPointer.style.display = "none"
                                checkActiveAccountsPointer.style.display = "none"
                                deleteMemberPointer.style.display = "none"
                                enableAccountPointer.style.display = "none"
                                changeContactEmailPointer.style.display = "none"
                                enableSmashAccessPointer.style.display = "none"
                                disableSmashAccessPointer.style.display = "none"
                                break;
                            case "2":
                                addMemberPointer.style.display = "none"
                                checkLastLoginPointer.style.display = "block"
                                resetPasswordPointer.style.display = "none"
                                disableAccountPointer.style.display = "none"
                                checkActiveAccountsPointer.style.display = "none"
                                deleteMemberPointer.style.display = "none"
                                enableAccountPointer.style.display = "none"
                                changeContactEmailPointer.style.display = "none"
                                enableSmashAccessPointer.style.display = "none"
                                disableSmashAccessPointer.style.display = "none"
                                break;
                            case "3":
                                addMemberPointer.style.display = "none"
                                checkLastLoginPointer.style.display = "none"
                                resetPasswordPointer.style.display = "block"
                                disableAccountPointer.style.display = "none"
                                checkActiveAccountsPointer.style.display = "none"
                                deleteMemberPointer.style.display = "none"
                                enableAccountPointer.style.display = "none"
                                changeContactEmailPointer.style.display = "none"
                                enableSmashAccessPointer.style.display = "none"
                                disableSmashAccessPointer.style.display = "none"
                                break;
                            case "4":
                                addMemberPointer.style.display = "none"
                                checkLastLoginPointer.style.display = "none"
                                resetPasswordPointer.style.display = "none"
                                disableAccountPointer.style.display = "block"
                                checkActiveAccountsPointer.style.display = "none"
                                deleteMemberPointer.style.display = "none"
                                enableAccountPointer.style.display = "none"
                                changeContactEmailPointer.style.display = "none"
                                enableSmashAccessPointer.style.display = "none"
                                disableSmashAccessPointer.style.display = "none"
                                break;
                            case "5":
                                addMemberPointer.style.display = "none"
                                checkLastLoginPointer.style.display = "none"
                                resetPasswordPointer.style.display = "none"
                                disableAccountPointer.style.display = "none"
                                checkActiveAccountsPointer.style.display = "block"
                                deleteMemberPointer.style.display = "none"
                                enableAccountPointer.style.display = "none"
                                changeContactEmailPointer.style.display = "none"
                                enableSmashAccessPointer.style.display = "none"
                                disableSmashAccessPointer.style.display = "none"
                                break;
                            case "6":
                                addMemberPointer.style.display = "none"
                                checkLastLoginPointer.style.display = "none"
                                resetPasswordPointer.style.display = "none"
                                disableAccountPointer.style.display = "none"
                                checkActiveAccountsPointer.style.display = "none"
                                deleteMemberPointer.style.display = "block"
                                enableAccountPointer.style.display = "none"
                                changeContactEmailPointer.style.display = "none"
                                enableSmashAccessPointer.style.display = "none"
                                disableSmashAccessPointer.style.display = "none"
                                break;
                            case "7":
                                addMemberPointer.style.display = "none"
                                checkLastLoginPointer.style.display = "none"
                                resetPasswordPointer.style.display = "none"
                                disableAccountPointer.style.display = "none"
                                checkActiveAccountsPointer.style.display = "none"
                                deleteMemberPointer.style.display = "none"
                                enableAccountPointer.style.display = "block"
                                changeContactEmailPointer.style.display = "none"
                                enableSmashAccessPointer.style.display = "none"
                                disableSmashAccessPointer.style.display = "none"
                                break;
                            case "8":
                                addMemberPointer.style.display = "none"
                                checkLastLoginPointer.style.display = "none"
                                resetPasswordPointer.style.display = "none"
                                disableAccountPointer.style.display = "none"
                                checkActiveAccountsPointer.style.display = "none"
                                deleteMemberPointer.style.display = "none"
                                enableAccountPointer.style.display = "none"
                                changeContactEmailPointer.style.display = "block"
                                enableSmashAccessPointer.style.display = "none"
                                disableSmashAccessPointer.style.display = "none"
                                break;
                            case "9":
                                addMemberPointer.style.display = "none"
                                checkLastLoginPointer.style.display = "none"
                                resetPasswordPointer.style.display = "none"
                                disableAccountPointer.style.display = "none"
                                checkActiveAccountsPointer.style.display = "none"
                                deleteMemberPointer.style.display = "none"
                                enableAccountPointer.style.display = "none"
                                changeContactEmailPointer.style.display = "none"
                                enableSmashAccessPointer.style.display = "block"
                                disableSmashAccessPointer.style.display = "none"
                                break;
                            case "10":
                                addMemberPointer.style.display = "none"
                                checkLastLoginPointer.style.display = "none"
                                resetPasswordPointer.style.display = "none"
                                disableAccountPointer.style.display = "none"
                                checkActiveAccountsPointer.style.display = "none"
                                deleteMemberPointer.style.display = "none"
                                enableAccountPointer.style.display = "none"
                                changeContactEmailPointer.style.display = "none"
                                enableSmashAccessPointer.style.display = "none"
                                disableSmashAccessPointer.style.display = "block"
                                break;
                            default:
                                addMemberPointer.style.display = "none"
                                checkLastLoginPointer.style.display = "none"
                                resetPasswordPointer.style.display = "none"
                                disableAccountPointer.style.display = "none"
                                checkActiveAccountsPointer.style.display = "none"
                                deleteMemberPointer.style.display = "none"
                                enableAccountPointer.style.display = "none"
                                changeContactEmailPointer.style.display = "none"
                                enableSmashAccessPointer.style.display = "none"
                                disableSmashAccessPointer.style.display = "none"
                        }
                    }
                </script>
                
<!-------------------------------------------------------------Drop down menu Javascript/CSS------------------------------------------------------------->
             <div id=tools>     
                 <br>
                <h1>Webmaster Tools</h1>
                    <form>
                       <fieldset>
                          <legend>Select a tool</legend>
                          <p>
                             <label>Tool</label>
                             <select name = "webmasterTools" id = "webmasterTools" onchange="appear()">
                               <option value = "0">(select a tool)</option>
                               <option value = "5">Check Active Accounts</option>
                               <option value = "1">Add a Member</option>
                               <option value = "6">Delete a Member</option>
                               <option value = "2">Check Last Login Date</option>
                               <option value = "3">Reset a Password</option>
                               <option value = "4">Disable an Account</option>
                               <option value = "7">Enable an Account</option>
                               <option value = "9">Enable Smash Access</option>
                               <option value = "10">Disable Smash Access</option>
                               <option value = "8">Change Contact Form Email</option>
                             </select>
                          </p>
                       </fieldset>
                    </form>
              </div>
                <!--Add a Member-->
                    <div id = "addMember">
                        <form action = "/webmastertools/addmember.php" method = "post" name=addMemberForm>
                            <fieldset id="field"><legend>Please enter the new account information.</legend>
                            <!--Account Info-->
                            Full Name:&nbsp;<input name=name id=name autocomplete="off" placeholder="Ananya Singh" required><br><br>
                            NJIT Email:     <input name=email id=email autocomplete="off" placeholder="ananya@singh.com" required><br>
                            <br><br>

                            <input type = submit value = "Add User">
                            </fieldset>
                        </form>
                    </div>
    
                <!--Check Last Login-->
                    <div id = "checkLastLogin">
                        Last Logins:
                        <?php
                            echo "<table border=2 cellpadding=10>";
                            $s = "SELECT * FROM LoginTable";
                            $t = mysqli_query($db,$s) or die("Error loading SQL Table.");

                            while ( $r = mysqli_fetch_array($t,MYSQLI_ASSOC) ) {
                                $name                   = $r[ "Name" ];
                                $lastLogin				= $r[ "LastLogin" ];
                                echo "<tr>";
                                echo "<td>". $name. "</td>";
                                echo "<td>". $lastLogin. "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        ?>
                    </div>
                
                <!--Reset a Password-->
                    <div id = "resetPassword">
                        Select an account to reset their password.
                        <form action = "/webmastertools/resetpassword.php" method = "post" name=resetPasswordForm id=resetPasswordForm>
                            <?php
                                $s = "SELECT * FROM LoginTable";
                                $t = mysqli_query($db,$s);
                                echo "<select name='resetPasswordSelect' id='resetPasswordSelect'>";
                                echo "<option>(select an account)</option>";
                                while ( $r = mysqli_fetch_array($t,MYSQLI_ASSOC) ) {
                                    $name                   = $r[ "Name" ];
                                    echo "<option value='";
                                    echo $name."'>";
                                    echo $name."</option>";
                                }
                                echo "</select>";
                            ?>
                            <input type = submit value = "Reset Password">
                        </form>
                    </div>
                
                <!--Disable an Account-->
                    <div id = "disableAccount">
                        Select an account to disable it.
                        <form action = "/webmastertools/disableaccount.php" method = "post" name=disableAccountForm id=disableAccountForm>
                            <?php
                                $s = "SELECT * FROM LoginTable";
                                $t = mysqli_query($db,$s);
                                echo "<select name='disableAccountSelect' id='disableAccountSelect'>";
                                echo "<option>(select an account)</option>";
                                while ( $r = mysqli_fetch_array($t,MYSQLI_ASSOC) ) {
                                    $name                   = $r[ "Name" ];
                                    echo "<option value='";
                                    echo $name."'>";
                                    echo $name."</option>";
                                }
                                echo "</select>";
                            ?>
                            <input type = submit value = "Disable Account">
                        </form>
                    </div>
                
                <!--Check Active Accounts-->
                    <div id = "checkActiveAccounts">
                        Account Status:
                        <?php
                            echo "<table border=2 cellpadding=10>";
                            $s = "SELECT * FROM LoginTable";
                            $t = mysqli_query($db,$s) or die("Error loading SQL Table.");

                            while ( $r = mysqli_fetch_array($t,MYSQLI_ASSOC) ) {
                                $name                   = $r[ "Name" ];
                                $email                  = $r[ "Email" ];
                                $active				    = $r[ "Active" ];
                                echo "<tr>";
                                echo "<td>". $name. "</td>";
                                echo "<td>". $email. "</td>";
                                echo "<td>". $active. "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        ?>
                    </div>
                <!--Delete a Member-->
                    <div id = "deleteMember">
                        Select a member to delete.
                        <form action = "/webmastertools/deletemember.php" method = "post" name=deleteMemberForm id=deleteMemberForm>
                            <?php
                                $s = "SELECT * FROM LoginTable";
                                $t = mysqli_query($db,$s);
                                echo "<select name='deleteMemberSelect' id='deleteMemberSelect'>";
                                echo "<option>(select an account)</option>";
                                while ( $r = mysqli_fetch_array($t,MYSQLI_ASSOC) ) {
                                    $name                   = $r[ "Name" ];
                                    echo "<option value='";
                                    echo $name."'>";
                                    echo $name."</option>";
                                }
                                echo "</select>";
                            ?>
                            <input type = submit value = "Delete Member">
                        </form>
                    </div>
                <!--Enable an Account-->
                    <div id = "enableAccount">
                        Select an account to re-enable it.
                        <form action = "/webmastertools/enableaccount.php" method = "post" name=enableAccountForm id=enableAccountForm>
                            <?php
                                $s = "SELECT * FROM LoginTable";
                                $t = mysqli_query($db,$s);
                                echo "<select name='enableAccountSelect' id='enableAccountSelect'>";
                                echo "<option>(select an account)</option>";
                                while ( $r = mysqli_fetch_array($t,MYSQLI_ASSOC) ) {
                                    $name                   = $r[ "Name" ];
                                    echo "<option value='";
                                    echo $name."'>";
                                    echo $name."</option>";
                                }
                                echo "</select>";
                            ?>
                            <input type = submit value = "Enable Account">
                        </form>
                    </div>
                <!--Change Contact Email-->
                    <div id = "changeContactEmail">
                        Select an account to make the contact form point it to.
                        <form action = "/webmastertools/changecontactemail.php" method = "post" name=chanceContactEmailForm id=chanceContactEmailForm>
                            <?php
                                $s = "SELECT * FROM LoginTable";
                                $t = mysqli_query($db,$s);
                                echo "<select name='changeContactEmailSelect' id='changeContactEmailSelect'>";
                                echo "<option>(select an account)</option>";
                                while ( $r = mysqli_fetch_array($t,MYSQLI_ASSOC) ) {
                                    $name                   = $r[ "Name" ];
                                    echo "<option value='";
                                    echo $name."'>";
                                    echo $name."</option>";
                                }
                                echo "</select>";
                            ?>
                            <input type = submit value = "Select this Account">
                        </form>
                    </div>
                <!--Enable Smash Access-->
                    <div id = "enableSmashAccess">
                        Select an account to enable smash access.
                        <form action = "/webmastertools/enablesmashaccess.php" method = "post" name=enableSmashAccess id=enableSmashAccess>
                            <?php
                                $s = "SELECT * FROM LoginTable";
                                $t = mysqli_query($db,$s);
                                echo "<select name='enableSmashAccessSelect' id='enableSmashAccessSelect'>";
                                echo "<option>(select an account)</option>";
                                while ( $r = mysqli_fetch_array($t,MYSQLI_ASSOC) ) {
                                    $name                   = $r[ "Name" ];
                                    echo "<option value='";
                                    echo $name."'>";
                                    echo $name."</option>";
                                }
                                echo "</select>";
                            ?>
                            <input type = submit value = "Enable Smash Access">
                        </form>
                    </div>
                <!--Disable Smash Access-->
                    <div id = "disableSmashAccess">
                        Select an account to disable smash access.
                        <form action = "/webmastertools/disablesmashaccess.php" method = "post" name=disableSmashAccess id=disableSmashAccess>
                            <?php
                                $s = "SELECT * FROM LoginTable";
                                $t = mysqli_query($db,$s);
                                echo "<select name='disableSmashAccessSelect' id='disableSmashAccessSelect'>";
                                echo "<option>(select an account)</option>";
                                while ( $r = mysqli_fetch_array($t,MYSQLI_ASSOC) ) {
                                    $name                   = $r[ "Name" ];
                                    echo "<option value='";
                                    echo $name."'>";
                                    echo $name."</option>";
                                }
                                echo "</select>";
                            ?>
                            <input type = submit value = "Disable Smash Access">
                        </form>
                    </div>
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
