<?php
echo file_get_contents("header.inc.php");
?>

        <?php
        $displayedposts = 0;
        $json = file_get_contents( "http://maschini.de:5001/api");
        $file = json_decode($json, true);
        if(isset($_GET["category"])){
        $category = $_GET["category"];
        $category = htmlspecialchars($category);
        }
        else{
            $category = "";
        }
        if($category != ""){
            foreach ($file as $entry) {
                    if($_GET["category"] == $entry["category"]){
                        echo "<table align=\"center\" width=\"1000px\" style='padding: 50px 0'>";
                        echo "<tr>";
						echo "<td class=\"rating\" style=\"backround-color:rgb(255,". floor(rnd(0,255)).");\"></td>";
                        echo "<td class=\"image\"><img src=\"" . ($entry["imglink"] == "" || $entry["author"] == "FAZ" ? "../black.jpeg" : $entry["imglink"]) . "\" width=\"300px\" height=\"200px\"></td>";
                        echo "<td class=\"content\">";
                        echo "<h2><a href=\"" . $entry["link"] . "\" target='blank'>" . $entry["heading"] . "</a></h2>";
                        echo "<span>" . $entry["date"] . " " . $entry["author"] . "</span><br>";
                        echo "<div class=\"text\">" . $entry["article"] . "</div>";
                        echo "</td>";
                        echo "</tr>";
                        echo "</table>";
                        $displayposts ++;
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
        if($displayedposts < 1){
            echo "<h1 class='black'>In dieser Kategorie gibt es aktuell leider keine Neuigkeiten</h1>";
        }
        ?>
  </body>
</html>  