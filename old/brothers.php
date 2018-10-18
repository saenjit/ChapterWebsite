<!DOCTYPE html>
<html lang="en">
		<head>
		<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>NJ Iota Tau | Brothers | Sigma Alpha Epsilon</title>
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
					<li><a href="brothers.php" class="active">Meet the Brothers</a></li>
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
				<img src="images/brotherPage2.jpeg" class="coverBrother">
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
				<div class="col_8"> <!--Big div for List-->
					<p><br></p>
					<h4 class="script">
						<div class="inescutcheon">&nbsp;</div>
						Active Brothers
					</h4>
                    <div class="col_2 last"><div style="housingbutton">&nbsp;
                    <!-- <a href="http://nyepsilon.com/housing.php">UPDATE:<br>The Future of new member education </a> -->
                    </div></div>
                <hr>
                    
<!-------------------------------------------------------Brothers Start------------------------------------------------->
                    
                    
                <div style = "display: inline-block;">
                    <img src = "/brothers/stevenG2.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Steven Granados</h4><p class = "brotherDescription"><br><br><br>What can I say? I'm a happy guy.</p>
                </div>
            <!--
                <hr>
                <div style = "display: inline-block;">
                    <img src = "/brothers/brendanC.jpg" class = "tablePic" style = "max-width:25%;"><h4 class = brotherName align = right>Brendan Cassagnol</h4><p class = "brotherDescription"><br><br><br>What can I say? I'm a happy guy.</p>
                </div>
            -->
                <hr>
                <div style = "display: inline-block;">
                    <img src = "/brothers/shreyasR.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Shreyas Ramanujam</h4><p class = "brotherDescription"><br><br><br>My name is Shreyas Ramanujam. I am a junior studying Computer Science. I like to play sports especially tennis and also like to code.</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "/brothers/alexM.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Aleksandr Markenzon</h4><p class = "brotherDescription"><br><br><br>Alex is a transfer student from Bergen Community College studying Information Technology. He was originally born in Russia, but now commutes from his home town of Fair Lawn, NJ where he has been living for over 10 years. When he is not at school or at the fraternity house, he is either at work, working out at the gym, playing soccer, or catching up on his favorite shows.<br><br>"I am a Russian fire cracker"</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "brothers/ardianD.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Ardian Djombalic</h4><p class = "brotherDescription"><br><br><br>My name is Ardian Djombalic, and I am a Junior studying mechanical engineering at NJIT. My interests include playing soccer, and making pizzas. I am from Frenchtown, NJ.<br><br>"I want to make pizza on the sun"</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "brothers/idilioG.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Idilio Gomez</h4><p class = "brotherDescription"><br><br><br>Currently a student at NJIT studying mechanical engineering technology. Works as a real estate agent that serves all of northern New Jersey. Lives in Wayne NJ and anticipated graduation date is may 2018.<br><br>"I like to ride donkeys into the sunset"</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "images/stevenG.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Pawel Piszczatowski</h4><p class = "brotherDescription"><br><br><br>My name is Pawel and I am a Civil Engineering major and I like to play football. </p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "brothers/toddM4.jpeg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Todd Murphy</h4><p class = "brotherDescription"><br><br><br>My name is Todd Murphy. I am currently studying Information Technology with a focus on Network Security at NJIT. I hope to be a Cybersecurity major at the end of my college career in 2020. I am from Washington Township, NJ (the South Jersey one). My whole family is from South Philly so you know I got that accent. My interests include coding, hacking, playing PS4 and eating Italian food.<br><br>“Your hair looks a little bouffant. Did you comb it with a rake?”</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "brothers/aleksaP.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Aleksa Petrovic</h4><p class = "brotherDescription"><br><br><br>Hey my name is Aleksa Petrovic. I am from Belgrade, Serbia. My major is Computer Science. I am a sophomore and I play tennis for NJIT. I like playing video games and sports. I want to live in NYC when I graduate.</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "brothers/parthT.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Parth Thakker</h4><p class = "brotherDescription"><br><br><br>My name is Parth Thakker and I am a part of NJIT's class of 2020. I was born in Princeton, New Jersey and have lived in the United States my entire life. I did not enjoy my first semester at NJIT primarily because of my lack of involvement with other people and more importantly in the community. Joining SAE fulfill both of these things I was lacking in my first semester.</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "images/stevenG.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Arthur Orlowski</h4><p class = "brotherDescription"><br><br><br>What can I say? I'm a happy guy.</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "brothers/nickR.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Nick Rotondi</h4><p class = "brotherDescription"><br><br><br>My name is Nick Rotondi. I am from Long Island, NY. I am currently studying Mechanical Engineering. In my free time I enjoy playing sports, hanging out with friends, and watching movies.</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "brothers/alexA.jpg" class = "tablePic" style = "max-width:32%;"><h4 class = brotherName align = right>Alex Anton</h4><p class = "brotherDescription"><br><br><br>My name is Alexander Anton, preferably Alex. I am a Junior Mechanical Engineering Major at NJIT. I love being outside playing sports or going on adventures and I love to cook. I consider music to be one of the most important things.<br><br>"Give 'em the business"</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "brothers/davidK2.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>David Kveton</h4><p class = "brotherDescription"><br><br><br>My name is David Kveton and I am majoring in mechanical engineering. I am from Marlboro, New Jersey and I like to play baseball.</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "brothers/prashantB.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Prashant Baliga</h4><p class = "brotherDescription"><br><br><br>I was born in Long Island, New York. When I was 5 years old, my family and I moved to Princeton Junction, New Jersey, and I began my education. I soon realized that I wanted to be an environmental engineer but njit doesn't have anything interesting like that so I somehow started studying computer engineering.<br><br>"All play, no work."</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "brothers/helderQ2.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Helder Quental</h4><p class = "brotherDescription"><br><br><br>My name is Helder Quental, and I am Brazilian and South African. I have lived most my life in Harrison NJ. I am currently a Sophomore at NJIT majoring in Information Technology. I enjoy meeting new people and going to the gym.<br><br>"Milk is for babies. When you grow up you have to drink beer."</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "brothers/vovaC.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Vova Chibukhchyan</h4><p class = "brotherDescription"><br><br><br>Hi, my name is Vova Chibukhchyan. I am a sophomore studying Civil Engineering. I enjoy wrestling and playing soccer. My hobbies include freshwater fishing and hanging out with friends. I am the assistant pool manager at Englewood town pools.<br><br>"The only disability in life is a bad attitude"</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "brothers/ananyaS.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Ananya Singh</h4><p class = "brotherDescription"><br><br><br>My name is Ananya and I am from Highland Park, NJ. I am currently a sophomore right now failing in Applied Math and Computer Science. I have played soccer my whole life and I am also a diehard Manchester United fan. I also enjoy watching other sports, going out with friends, napping, and drinking water.<br><br>"You look like a bullfrog..." - Ardian Ahmetaj Djombalic</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "images/stevenG.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Randy Azzam</h4><p class = "brotherDescription"><br><br><br>What can I say? I'm a happy guy.</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "/brothers/karlG.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Karl Giannouglou</h4><p class = "brotherDescription"><br><br><br>What can I say? I'm a happy guy.</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "/brothers/dhanushS.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Dhanush Sureshbabu</h4><p class = "brotherDescription"><br><br><br>My name is Dhanush Sureshbabu. However, everyone calls me Danish or Danybabs. My major is Computer Science and Applied Physics. I like skiing (the normal skiing) and long walks in parks. I am currently a Co-OP at UPS.<br><br>"My fake plants died because I did not pretend to water them"</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "/images/stevenG.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Gabe Giovanello</h4><p class = "brotherDescription"><br><br><br>What can I say, I'm a happy guy.<br><br>"Put a quote here."</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "/images/stevenG.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Andre Pugliese</h4><p class = "brotherDescription"><br><br><br>What can I say, I'm a happy guy.<br><br>"Put a quote here."</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "/images/stevenG.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Tony Maniera</h4><p class = "brotherDescription"><br><br><br>What can I say, I'm a happy guy.<br><br>"Put a quote here."</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "/images/stevenG.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Madison Miatke</h4><p class = "brotherDescription"><br><br><br>What can I say, I'm a happy guy.<br><br>"Put a quote here."</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "/images/stevenG.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Kareem Talaat</h4><p class = "brotherDescription"><br><br><br>What can I say, I'm a happy guy.<br><br>"Put a quote here."</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "/images/stevenG.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>John Greenwold</h4><p class = "brotherDescription"><br><br><br>What can I say, I'm a happy guy.<br><br>"Put a quote here."</p>
                </div>
                <hr>
                <div style = "display: inline-block;">
                    <img src = "/images/stevenG.jpg" class = "tablePic" style = "max-width:30%;"><h4 class = brotherName align = right>Dan Arif</h4><p class = "brotherDescription"><br><br><br>What can I say, I'm a happy guy.<br><br>"Put a quote here."</p>
                </div>
                
                
<!-------------------------------------------------------Brothers End--------------------------------------------------->
                    <hr>
                </div> <!--End Big Section-->
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


