<!DOCTYPE html>

<html lang="de">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <title>Datenparty - Ihr Nachrichtendienst</title>
        <style>
            html,body{
                margin: 0;
                border: 0;
                width: 100%;
                font-family: 'Roboto';
            }
            
            h1{
                color: white;
            }

            .header {
                color: white;
                font-size: 48px;
                background-color: black;
                text-align: center;
            }

            nav img.icon {
                width: 25px;
                height: 25px;
            }

            nav{
    
                width: 450px;
                margin: 0 auto;
    
            }
    
            .nav {
                background-color: darkblue;
                height: 70px;
                line-height: 70px;
            }

            .link{
                color: white;
                text-decoration: none;
                margin-left: 15px;
                font-size: 24px;
            }

            .image {
                padding: 20px 50px;
            }

            .content a {
                color: black;
                text-decoration: none;
            }

            .content a:hover {
                text-decoration: underline;
            }

            

        </style>
    </head>	
    <body>
    <div class="header">
        <img src="../logo_white.png" alt="Datenparty" height="50">
        <span class="center">Datenparty</span>
    </div>
    <div class="nav">
        <nav>
            <a class="link" href="themenübersicht.html">Themen</a>
            <a class="link" href="aktuelles.html">Aktuell</a>
            <a class="link" href="datenparty-forum.html">Forum</a>
            <a class="link" href="kontakt.html">Kontakt</a>
            <img class="link icon" src="search.png"/>
        </nav>
    </div>

    <?php
        $json = file_get_contents( "http://maschini.de:5001/alt");
        $file = json_decode($json, true);
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
    ?>
    </body>
</html>  