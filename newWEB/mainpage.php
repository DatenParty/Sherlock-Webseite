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
            margin: 0px;
            border: 0px;
            width: 100%;
            font-family: 'Roboto';
        }
        .left{
            float: left;
        }
        .img{
            width: 38%;
            height: auto;
            padding-left: 4%;
            padding-right: 2%;
        }
        .colorr{
            background-color: orange;
        }
        .right{
            float: right;
            width: 55%;
        }
        h1{
            color: white;
        }
        .header{
            color: white;
            font-size: 48px;
            background-color: black;
            text-align: center;
        }
        nav{
            background-color: darkblue;
            margin-top: 2px;
        }
        .center{
            margin-bottom: 50%;
        }
        .link{
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-size: 24px;
        }
        :visited{
            text-decoration: none;
        }
        :link{
            text-decoration: none;
        }
        .icon{
            height: 20px;
        }
        .post{
            margin-top: 3px;   
        }
        .right{
        }
        
        .container {
            background-color: orange;
            height: 100%;
            box-sizing: border-box;
            padding: 20px;
            display: block;
        }
        
        .container img {
            width: 50%;
            height: 50%;
            float: left;
            padding-right: 10vw;
            
        }
    </style>
  </head>	
  <body>
    <div class="header">
        <img src="../logo_white.png" alt="Datenparty" height="50">
        <span class="center">Datenparty</span>
    </div>
    <div class="nav">
        <center>
            <nav>
                <a class="link" href="themenübersicht.html">Themen</a>
                <a class="link" href="aktuelles.html">Aktuell</a>
                <a class="link" href="datenparty-forum.html">Forum</a>
                <a class="link" href="kontakt.html">Kontakt</a>
                <img class="link icon" src="search.png"/>
            </nav>
        </center>
    </div>
      <?php
            $json=file_get_contents( "http://maschini.de:5001/"); 
            $test=json_decode($json, true);
            foreach($test as $testt){
                if($testt["imglink"] == ""){
                    echo "<div class='container'><img allign='left' src='https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg'/><h2>".$testt["heading"]."</h2> Stand".$testt["date"]."<br>".$testt["article"]."</div>";
                }
                else{
                    echo "<div class='container'> <img allign='left' src='".$testt["imglink"]."'/><h2>".$testt["heading"]."</h2> Stand".$testt["date"]."<br>".$testt["article"]."</div>";
                }
            }
        ?>
      <div class="container">
          <img src="img.jpg" align="left">
          <h2>Trump zu Aussage unter Eid bereit</h2>
            Stand 10.06.2017 06:51 Uhr<br>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
      </div>
      <br><br>
      <div class="container">
          <h2>Trump zu Aussage unter Eid bereit</h2>
            Stand 10.06.2017 06:51 Uhr<br>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
      </div>
  </body>
</html>  