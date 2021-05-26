
<?php include "header.php"?>
<main>
	<div id="anmelden">
		<form action="login.inc.php" method="post">
			<ul>
				<li><input type="text" name="benutzer" class="login_field"> Benutzername</li>
				<li><input type="password" name="passwort" class="login_field"> Passwort</li>
				<li><input type="submit" name="submit" value="Einloggen" class="button" id="login_button"></li>
			</ul>

		</form>

	</main>
	<?php include "footer.php" ?>