<?php include "header.php" ?>
<main>
	<div id="registration">
		<form action="reg.inc.php" method="post">
			<ul>
				<li><input type="text" name="vorname" placeholder="z.B. Max"> Vorname</li>
				<li><input type="text" name="nachname"placeholder="z.B. Mustermann"> Nachname</li>
				<li><input type="text" name="strasse"placeholder="z.B. Musterstrasse 12"> Strasse</li>
				<li><input type="text" name="plz"placeholder="z.B. 12345"> Postleitzahl</li>
				<li><input type="text" name="stadt"placeholder="z.B. Musterstadt"> Stadt</li>
				<li><input type="text" name="benutzername"placeholder="z.B. maximusti12"> Benutzername</li>
				<li><input type="text" name="email"placeholder="z.B. max@email.de"> Email</li>
				<li><input type="password" name="password"> Passwort</li>
				<li><input type="password" name="password_check"> Passwort Wiederholen</li>
			</ul>
			<input type="submit" name="submit" value="Absenden" class="button">
		</form>

	</div>
	
</main>
<?php include "footer.php" ?>