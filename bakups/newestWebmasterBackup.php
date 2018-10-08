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