<?php
echo file_get_contents("header.inc.php");
?>
	<center>
		<div>
			<h2>Wenn sie Fragen, Probleme oder Anmerkungen zu dieser Web Seite haben, schreiben sie uns eine E-Mail</h2>
			<h3>An: webmaster@dummy-host2.example.com</h3>
			<form
				action="webmaster@dummy-host2.example.com"
				method="post" enctype="text/plain">
				Name:<br>
				<input type="text" name="name"><br>
				E-Mail:<br>
				<input type="text" name="mail"><br>
				Kommentar:<br>
				<input type="text" name="comment" size="50"><br><br>
				<input type="submit" value="Senden">
				<input type="reset" value="Zurücksetzen">
				</form>
		</div>
	</center>
</body>

</html>