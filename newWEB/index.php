<?php
echo file_get_contents("header.inc.php");
?>

        <?php
        $json = file_get_contents( "http://maschini.de:5001/alt");
        $file = json_decode($json, true);
        $category = $_GET["category"];
        if(isset($_GET["category"])){
            foreach ($file as $entry) {
                    if($_GET["category"] == $entry["category"]){
                        echo "<table align=\"center\" width=\"1000px\" style='padding: 50px 0'>";
                        echo "<tr>";
                        echo "<td class=\"image\"><img src=\"" . ($entry["imglink"] == "" || $entry["author"] == "FAZ" ? "../black.jpeg" : $entry["imglink"]) . "\" width=\"300px\" height=\"200px\"></td>";
                        echo "<td class=\"content\">";
                        echo "<h2><a href=\"" . $entry["link"] . "\" target='blank'>" . $entry["heading"] . "</a></h2>";
                        echo "<span>" . $entry["date"] . " " . $entry["author"] . "</span><br>";
                        echo "<div class=\"text\">" . $entry["article"] . "</div>";
                        echo "</td>";
                        echo "</tr>";
                        echo "</table>";
                    }
                else{
                    
                }
                
            }
        }
        else{
            foreach ($file as $entry) {
                echo "<table align=\"center\" width=\"1000px\" style='padding: 50px 0'>";
                echo "<tr>";
                echo "<td class=\"image\"><img src=\"" . ($entry["imglink"] == "" || $entry["author"] == "FAZ" ? "../black.jpeg" : $entry["imglink"]) . "\" width=\"300px\" height=\"200px\"></td>";
                echo "<td class=\"content\">";
                echo "<h2><a href=\"" . $entry["link"] . "\" target='blank'>" . $entry["heading"] . "</a></h2>";
                echo "<span>" . $entry["date"] . " " . $entry["author"] . "</span><br>";
                echo "<div class=\"text\">" . $entry["article"] . "</div>";
                echo "</td>";
                echo "</tr>";
                echo "</table>";
            }
        }
        ?>
	  <script>
		$( document ).ready(function() {
			$("nav li").click(function(){
				if($(this).children("ul").is(":visible") == true){
				$(this).children("ul").hide();	
				}else{ 
				$(this).children("ul").show();
				}
			});
		});	
	  </script>
  </body>
</html>  