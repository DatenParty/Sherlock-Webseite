<?php
echo file_get_contents("header.inc.php");
?>

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