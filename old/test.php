<!DOCTYPE html>
<html lang="en">
    
        <style>
            #updatesWebmaster{display:none;}
        </style>
    
		<body>
           <select id = "choice" onChange = "balls()">
                    <option value = "">Choose</option>
                    <option value = "Update">Updates</option>
                    <option value = "Home">Home</option>
                    <option value = "Rush">Rush</option>
                    <option value = "History">History</option>
                    <option value = "Positions">Positions</option>
                    <option value = "Footer">Footer</option>
                </select>
            
            
            <script>
                function balls(){
                    alert("hi");
                    updates = document.getElementById("updatesWebmaster");
                    home = document.getElementById("homeWebmaster");
                    rush = document.getElementById("rushWebmaster");
                    history = document.getElementById("historyWebmaster");
                    positions = document.getElementById("positionsWebmaster");
                    footer = document.getElementById("footerWebmaster");

                    pointer2 = document.getElementById("choice");
                    $menuvalue = pointer2.value;
                    
                }
            </script>
            
            
            
            </body>
</html>


