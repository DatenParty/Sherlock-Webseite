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
        .containerr {
            background-color: orange;
            height: 100%;
            box-sizing: border-box;
            padding: 20px;
            width: 100%;
            display: block;
        }
        
        .container img {
            float: left;
            padding-right: 10vw;
            max-height: 15vw;
        }
        .comp{
            width: 100vw;
            height: 10px;
            background-color: orange;
        }
        .comp2{
            width: 100vw;
            height: 20px;
            background-color: orange;
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
                <a class="link" href="mainpage.php">Aktuell</a>
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
                if($testt["imglink"] == "" && strlen($testt["article"]) < 200){
                    echo "<div class='containerr'><h2>".$testt["heading"]."</h2> Stand ".$testt["date"]."<br>".$testt["article"]."</div><div class='comp'></div>";
                }
                else if($testt["imglink"] != "" && strlen($testt["article"]) < 200){
                    echo "<div class='container'> <img allign='left' src='".$testt["imglink"]."'/><h2>".$testt["heading"]."</h2> Stand ".$testt["date"]."<br>".$testt["article"]."</div><div class='comp2'></div>";
                }
                else{
                    echo "<div class='container'> <img allign='left' src='".$testt["imglink"]."'/><h2>".$testt["heading"]."</h2> Stand ".$testt["date"]."<br>".$testt["article"]."</div><div class='comp'></div>";
                }
            }
        ?>
      <div class="container"> <img allign="left" src="http://img.zeit.de/politik/deutschland/2017-06/de-maiziere-gesichtserkennung/wide__822x462"><h2>De Maizière will Überwachung ausweiten</h2> Stand16:49<br>Automatische Gesichtserkennung an Bahnhöfen, das Knacken von WhatsApp-Nachrichten - Innenminister Thomas de Maizière (CDU) fordert mehr Überwachungsmöglichkeiten.</div>
      <div class="comp"></div>
      <br><br>
      <div class="containerr"><h2>Darum rügt Macron „Monsieur Trömp“ auf Englisch</h2> Stand09.06.2017<br>Französische Politiker müssen eigentlich Französisch sprechen. Doch Emmanuel Macron experimentiert derzeit mit englischen Tweets und Reden. Kritiker werfen ihm Verrat vor. Aber Macron hat einen Plan.</div>
  </body>
</html>  