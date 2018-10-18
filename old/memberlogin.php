<!DOCTYPE html>
<html lang="en">
		<head>
		<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>NJ Iota Tau | Member Login | Sigma Alpha Epsilon</title>
		<meta name="description" content="New Jersey Iota Tau Chapter of Sigma Alpha Epsilon at New Jersey Institute of Technology, Newark, New Jersey" />
		<meta name="author" content="SAE New Jersey Iota Tau" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<link rel="shortcut icon" href="images/elements/favicon.ico" />
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="columnal.css" type="text/css" media="screen" />
		<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
		<![endif]-->
		<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="mobile.css" />
		<link rel="stylesheet" type="text/css" href="common.css">
        <!--MY CSS-->
        <link href='styles.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js">

			$(document).ready(function(){
				
				$(".patterned").click(function(){
					$("ul.slider li").animate({left: "-100"},200);
				});
			});

		</script>
	</head>
	<body>
		<header class="row">
			<nav class="col_12">
				<ul class="horizontal">
					<li class="first"><a href="index.php">Home</a></li>
					<li><a href="rush.php">Rush</a></li>
					<li><a href="history.php">History</a></li>
					<!--<li><a href="chapter.php">Chapter House</a></li>-->
					<!-- <li><a href="becomesae.php">Become an SAE</a></li> -->
					<li><a href="brothers.php">Meet the Brothers</a></li>
                    <li><a href="positions.php">Positions</a></li>
					<li><a href="alumni.php">Alumni</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
					<li><a href="donate.php">Donate</a></li>

					<!-- <li><a href="philanthropy.php">Philanthropy</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="parents.php">Parents</a></li> -->

				</ul>
			</nav>
		</header>
		<section class="patterned">
			<div class="frame row">
        <!--<a class="rushbutton" href="RushCalendarFall2014_fixed.pdf">Download the 2014 Rush Calendar</a>-->
				<!-- <img src="images/RushCover2016.png" class="cover"> -->
				<img src="images/membersLoginPic.gif" class="coverMemberLogin">
			</div>
		</section>
		<section class="content" style="padding-top:20px;">
<!--End Default Page stuff-->          
            
			<div class="row">
                <div class="col_2">
                    <div class = "updateTable">
                        <h3 class = "script" align = center><u>Updates:</u></h3>
                        <p>
                            <?php
                                $homepage = file_get_contents("motd.txt");
                                echo $homepage;
                            ?>
                        </p>
                    </div>
				</div>
				<div class="col_8">
					<p><br></p>
					<h4 class="script">
						<div class="inescutcheon">&nbsp;</div>
						Brothers, please enter the password.
					</h4>
                    
                    <!--STATUS OFFLINE-->
                    <style>
                        #status{
                            background-color: #ea7816;
                                /*#2fb50f*/
                            /*background-color:#ea7816;*/
                            width: 115px;
                            color: white;
                            font-size: 7px;
                            text-align: center;
                            line-height: 1.5;
                            letter-spacing: 1px;
                            padding: 5px;
                            border-radius: 4px;
                        }
                    </style>
                    <div id = status>
                        <!--Online-->
                        Online, but Under Maintanence
                        <!--Offline
                        -->
                    </div>
					
                    <form action = "memberloginhandler.php" method = "post" name=loginForm>
                        <fieldset id="field"><legend>Sigma Alpha Epsilon</legend>
                            
                        <input type = hidden name = alpha id = alpha value = Member>
                        Password:  <input type=password name=truegentlemen id=pass autocomplete="off" placeholder="Password" required>
                        <br>
                            
                        <input type = submit value = "Log In">
                        </fieldset>
                    </form>
					
				</div>
				<div class="col_2 last"><div style="housingbutton">&nbsp;
				<!-- <a href="http://nyepsilon.com/housing.php">UPDATE:<br>The Future of new member education </a> -->
				</div></div>
			</div>
		</section>
        
<!--Start Footer-->
		<footer>
			<div class="row">
				<div class="col_2">
					<h4 class="gold bold">
						NAVIGATION
					</h4>
					<ul class="vertical footer">
						<li><a href="rush.php">Rush</a></li>
						<li><a href="history.php">History</a></li>
						<li><a href="brothers.php">Meet the Brothers</a></li>
                        <li><a href="positions.php">Positions</a></li>
						<li><a href="alumni.php">Alumni</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="donate.php">Donate</a></li>
					</ul>
				</div>
				<div class="col_2 contacts">
					<?php
                        $homepage = file_get_contents("footer.txt");
                        echo $homepage;
                    ?>
				</div>
				<div class="col_2 socialfooter">
					<h4 class="gold bold">
						GET IN TOUCH
					</h4>
                    <div class = "socialMediaIcons">
                        <a href="https://www.facebook.com/SAE.NJIT/"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/SAE_NJIT"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/sae_njit/"><i class="fa fa-instagram"></i></a>
                        </div>
                    
                        <a href="memberlogin.php">
                        <div class="activesBtn">
                            MEMBER LOGIN
                        </div>
                    </a>
				</div>
				<div class="col_6 last">
					<h4 class="gold bold">
						THE TRUE GENTLEMAN
					</h4>
					<p style="line-height: 1.5;">
                        The True Gentleman is the man whose conduct proceeds from good will and an acute sense of propriety, and whose self-control is equal to all emergencies; who does not make the poor man conscious of his poverty, the obscure man of his obscurity, or any man of his inferiority or deformity; who is himself humbled if necessity compels him to humble another; who does not flatter wealth, cringe before power, or boast of his own possessions or achievements; who speaks with frankness but always with sincerity and sympathy; whose deed follows his word; who thinks of the rights and feelings of others, rather than his own; and who appears well in any company, a man with whom honor is sacred and virtue safe.					</p>
				</div>
			</div>
		</footer>

		<section class="infobar">
			<div class="row">
				<div class="col_12" style="text-align:center;">
					<span class="info">
						NEW JERSEY IOTA TAU CHAPTER &nbsp;&nbsp; | &nbsp;&nbsp; NEW JERSEY INSTITUTE of TECHNOLOGY&nbsp;&nbsp; | &nbsp;&nbsp; THE TRUE GENTLEMAN &nbsp;&nbsp; | &nbsp;&nbsp;BE TRUE
					</span>
				</div>
			</div>
		</section>

	</body>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38684257-2', 'auto');
  ga('send', 'pageview');

</script>
</html>


