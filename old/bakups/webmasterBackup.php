<!DOCTYPE html>
<html lang="en">
		<head>
		<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>NJ Iota Tau | Webmaster | Sigma Alpha Epsilon</title>
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
				<img src="images/brotherPic.JPG" class="coverWebmaster">
			</div>
		</section>
		<section class="content" style="padding-top:20px;">
<!--End Default Page stuff-->
<!------------------------------AUTHENTICATION----------------------->
            <?php
                $bad = false;
                $pass = $_GET['pass'];
                $webmasterPass = 'webpass';
            
                if (!isset ($pass)){
                    $bad = true;
                }
                if ($pass == ""){
                    $bad = true;
                }

                if ($bad){
                    echo "
                    <script>
                        alert(\"Bad User/Password Character.\");
                        window.location.replace(\"http://saenjit.com/memberlogin.php\");
                    </script>
                    ";
                    exit();
                }
            
                if ($pass != $webmasterPass){
                    echo "
                    <script>
                        alert(\"Nice try...\");
                        window.location.replace(\"http://saenjit.com/memberlogin.php\");
                    </script>
                    ";
                    exit();
                }
            ?>
<!------------------------------------------------------------------->
            
<!-------------------------------Edit Texts------------------------------------>
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
					<h4 class="script" align = center>
						<div class="inescutcheon">&nbsp;</div>
						Welcome Webmaster!
                        <div class="inescutcheon">&nbsp;</div>
					</h4>
                    <hr>
                    
                    <style>
                        #updatesWebmaster {display: none;}
                        #homeWebmaster {display: none;}
                        #rushWebmaster {display: none;}
                        #historyWebmaster {display: none;}
                        #positionsWebmaster {display: none;}
                        #footerWebmaster {display: none;}
                        #usefulDocumentsWebmaster {display: none;}
                    </style>
                    
                    <script>
                        function appear(){
                            updates = document.getElementById("updatesWebmaster");
                            usefulDocuments = document.getElementById("usefulDocumentsWebmaster");
                            home = document.getElementById("homeWebmaster");
                            rush = document.getElementById("rushWebmaster");
                            history = document.getElementById("historyWebmaster");
                            positions = document.getElementById("positionsWebmaster");
                            footers = document.getElementById("footerWebmaster");
                            
                            pointer2 = document.getElementById("choice");
                            $menuvalue = pointer2.value;

                            if ($menuvalue == "Update"){
                                updates.style.display = "block";
                                usefulDocuments.style.display = "none";
                                home.style.display = "none";
                                rush.style.display = "none";
                                history.style.display = "none";
                                positions.style.display = "none";
                                footer.style.display = "none";
                            }
                            if ($menuvalue == "UsefulDocuments"){
                                updates.style.display = "none";
                                usefulDocuments.style.display = "block";
                                home.style.display = "none";
                                rush.style.display = "none";
                                history.style.display = "none";
                                positions.style.display = "none";
                                footer.style.display = "none";
                                
                            }
                            if ($menuvalue == "Home"){
                                updates.style.display = "none";
                                usefulDocuments.style.display = "none";
                                home.style.display = "block";
                                rush.style.display = "none";
                                history.style.display = "none";
                                positions.style.display = "none";
                                footer.style.display = "none";
                            }
                            if ($menuvalue == "Rush"){
                                updates.style.display = "none";
                                usefulDocuments.style.display = "none";
                                home.style.display = "none";
                                rush.style.display = "block";
                                history.style.display = "none";
                                positions.style.display = "none";
                                footer.style.display = "none";
                            }
                            if ($menuvalue == "History"){
                                updates.style.display = "none";
                                usefulDocuments.style.display = "none";
                                home.style.display = "none";
                                rush.style.display = "none";
                                history.style.display = "block";
                                positions.style.display = "none";
                                footer.style.display = "none";
                            }
                            if ($menuvalue == "Positions"){
                                updates.style.display = "none";
                                usefulDocuments.style.display = "none";
                                home.style.display = "none";
                                rush.style.display = "none";
                                history.style.display = "none";
                                positions.style.display = "block";
                                footer.style.display = "none";
                            }
                            if ($menuvalue == "Footer"){
                                updates.style.display = "none";
                                usefulDocuments.style.display = "none";
                                home.style.display = "none";
                                rush.style.display = "none";
                                history.style.display = "none";
                                positions.style.display = "none";
                                footer.style.display = "block";
                                
                            }
                            if ($menuvalue == "choose"){
                                updates.style.display = "none";
                                usefulDocuments.style.display = "none";
                                home.style.display = "none";
                                rush.style.display = "none";
                                history.style.display = "none";
                                positions.style.display = "none";
                                footer.style.display = "none";
                                
                            }
                        }
                    </script>
                    
                    <!------------------------------------------------>
                    <div align = center>
                        <p><u>Choose what you need to edit from the drop-down menu:</u></p>
                        <select id = choice onchange = "appear()">
                            <option value = "choose">Choose</option>
                            <option value = "Update">Updates</option>
                            <option value = "UsefulDocuments">Useful Documents</option>
                            <option value = "Home">Home</option>
                            <option value = "Rush">Rush</option>
                            <option value = "History">History</option>
                            <option value = "Positions">Positions</option>
                            <option value = "Footer">Footer</option>
                        </select>
                    </div>
                    <div id = updatesWebmaster>
					<p>
						This will edit the <b>Updates</b> Section on every page:
                    </p>
                        <p>
                        <?php
                            if($_POST['updateSubmit']){ 
                            $open = fopen("motd.txt","w+"); 
                            $text = $_POST['update']; 
                            fwrite($open, $text); 
                            fclose($open); 
                            echo "Updates Section updated to:<br />";
                            $file = file("motd.txt"); 
                            foreach($file as $text) { 
                            echo $text."<br />"; 
                            } 
                            }else{ 
                            $file = file("motd.txt"); 
                            echo "<form action=\"".$PHP_SELF."\" method=\"post\">"; 
                            echo "<textarea Name=\"update\" cols=\"50\" rows=\"15\">"; 
                            foreach($file as $text) { 
                            echo $text; 
                            }  
                            echo "</textarea>"; 
                            echo "<input name=\"updateSubmit\" type=\"submit\" value=\"Update\" />\n 
                            </form>"; 
                            } 
                        ?>
                        </p>
                    </div>
                    <div id = usefulDocumentsWebmaster>
					<p>
						This will edit the <b>Useful Documents</b> Section on every page:
                    </p>
                        <p>
                        <?php
                            if($_POST['usefulDocumentsSubmit']){ 
                            $open = fopen("usefulDocuments.txt","w+"); 
                            $text = $_POST['usefulDocuments']; 
                            fwrite($open, $text); 
                            fclose($open); 
                            echo "Updates Section updated to:<br />";
                            $file = file("usefulDocuments.txt"); 
                            foreach($file as $text) { 
                            echo $text."<br />"; 
                            } 
                            }else{ 
                            $file = file("usefulDocuments.txt"); 
                            echo "<form action=\"".$PHP_SELF."\" method=\"post\">"; 
                            echo "<textarea Name=\"usefulDocuments\" cols=\"50\" rows=\"15\">"; 
                            foreach($file as $text) { 
                            echo $text; 
                            }  
                            echo "</textarea>"; 
                            echo "<input name=\"usefulDocumentsSubmit\" type=\"submit\" value=\"Update\" />\n 
                            </form>"; 
                            } 
                        ?>
                        </p>
                    </div>
                    
                    <div id = homeWebmaster>
                    <p>
                        This will edit the text on the <b>Home</b> Page:
                    </p>
                        <p>
                        <?php
                            if($_POST['homeSubmit']){ 
                            $open = fopen("home.txt","w+"); 
                            $text = $_POST['home']; 
                            fwrite($open, $text); 
                            fclose($open); 
                            echo "Home Page Text updated to:<br />";
                            $file = file("home.txt"); 
                            foreach($file as $text) { 
                            echo $text."<br />"; 
                            } 
                            }else{ 
                            $file = file("home.txt"); 
                            echo "<form action=\"".$PHP_SELF."\" method=\"post\">"; 
                            echo "<textarea Name=\"home\" cols=\"50\" rows=\"15\">"; 
                            foreach($file as $text) { 
                            echo $text; 
                            }  
                            echo "</textarea>"; 
                            echo "<input name=\"homeSubmit\" type=\"submit\" value=\"Update\" />\n 
                            </form>"; 
                            } 
                        ?>
                        </p>
                    </div>
                    
                    <div id = rushWebmaster>
					<p>
						This will edit the text on the <b>Rush</b> Page:
                    </p>
                        <p>
                        <?php
                            if($_POST['rushSubmit']){ 
                            $open = fopen("rush.txt","w+"); 
                            $text = $_POST['rush']; 
                            fwrite($open, $text); 
                            fclose($open); 
                            echo "Rush Page text updated to:<br />";
                            $file = file("rush.txt"); 
                            foreach($file as $text) { 
                            echo $text."<br />"; 
                            } 
                            }else{ 
                            $file = file("rush.txt"); 
                            echo "<form action=\"".$PHP_SELF."\" method=\"post\">"; 
                            echo "<textarea Name=\"rush\" cols=\"50\" rows=\"15\">"; 
                            foreach($file as $text) { 
                            echo $text; 
                            }  
                            echo "</textarea>"; 
                            echo "<input name=\"rushSubmit\" type=\"submit\" value=\"Update\" />\n 
                            </form>"; 
                            } 
                        ?>
                        </p>
                    </div>
                    
                    <div id = historyWebmaster>
                    <p>
						This will edit the text on the <b>History</b> Page:
                    </p>
                        <p>
                        <?php
                            if($_POST['historySubmit']){ 
                            $open = fopen("history.txt","w+"); 
                            $text = $_POST['history']; 
                            fwrite($open, $text); 
                            fclose($open); 
                            echo "History Page text updated to:<br />";
                            $file = file("history.txt"); 
                            foreach($file as $text) { 
                            echo $text."<br />"; 
                            } 
                            }else{ 
                            $file = file("history.txt"); 
                            echo "<form action=\"".$PHP_SELF."\" method=\"post\">"; 
                            echo "<textarea Name=\"history\" cols=\"50\" rows=\"15\">"; 
                            foreach($file as $text) { 
                            echo $text; 
                            }  
                            echo "</textarea>"; 
                            echo "<input name=\"historySubmit\" type=\"submit\" value=\"Update\" />\n 
                            </form>"; 
                            } 
                        ?>
                        </p>
                    </div>
                    
                    <div id = positionsWebmaster>
					<p>
						This will edit all of the Positions on the <b>Positions</b> Page:
                        <br>
                        (Just look through the code and you'll find the people to replace.)
                    </p>
                        <p>
                        <?php
                            if($_POST['positionsSubmit']){ 
                            $open = fopen("positions.txt","w+"); 
                            $text = $_POST['positions']; 
                            fwrite($open, $text); 
                            fclose($open); 
                            echo "Positions Page text updated to:<br />";
                            $file = file("positions.txt"); 
                            foreach($file as $text) { 
                            echo $text."<br />"; 
                            } 
                            }else{ 
                            $file = file("positions.txt"); 
                            echo "<form action=\"".$PHP_SELF."\" method=\"post\">"; 
                            echo "<textarea Name=\"positions\" cols=\"50\" rows=\"15\">"; 
                            foreach($file as $text) { 
                            echo $text; 
                            }  
                            echo "</textarea>"; 
                            echo "<input name=\"positionsSubmit\" type=\"submit\" value=\"Update\" />\n 
                            </form>"; 
                            } 
                        ?>
                        </p>
                    </div>
                    
                    <div id = footerWebmaster>
                    <p>
						This will edit the <b>Footer</b> at the bottom of the page:
                        <br>
                        (EA & EDA)
                        
                    </p>
                        <p>
                        <?php
                            if($_POST['footerSubmit']){ 
                            $open = fopen("footer.txt","w+"); 
                            $text = $_POST['footer']; 
                            fwrite($open, $text);
                            fclose($open); 
                            echo "Footer Section updated to:<br />";
                            $file = file("footer.txt");
                            foreach($file as $text) { 
                            echo $text."<br />"; 
                            } 
                            }else{ 
                            $file = file("footer.txt"); 
                            echo "<form action=\"".$PHP_SELF."\" method=\"post\">"; 
                            echo "<textarea Name=\"footer\" cols=\"50\" rows=\"15\">"; 
                            foreach($file as $text) { 
                            echo $text; 
                            }  
                            echo "</textarea>"; 
                            echo "<input name=\"footerSubmit\" type=\"submit\" value=\"Update\" />\n 
                            </form>"; 
                            } 
                        ?>
                        </p>
                    </div>
                    <hr>
                    
                    
                    
                    
<!-----------------------------End Edit Texts-------------------------------------->  
                <div id = "memberLinks" align = center>
                    <h5><u>Useful Information:</u></h5>
                    <p>
                        <?php
                        echo "The website is hosted with <a href=\"https://www.hostinger.com\" target = \"_blank\">Hostinger</a>";
                        ?>
                        <br>
                        <?php
                        echo "The domain is registered with <a href=\"https://namecheap.com\" target = \"_blank\">NameCheap</a>";
                        ?>
                    </p>
                </div>   
                <hr>
                
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


