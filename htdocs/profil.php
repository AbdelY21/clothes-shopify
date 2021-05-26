<?php include "header.php" ?>
<?php include "mainPHP.php" ?>
<main>
	<?php

	$username = $_SESSION['user'];
	$connect = verbindung_Datenbank();
	$sqlab = "SELECT * FROM user WHERE user_bnt ='{$username}' ";
	$result = mysqli_query($connect, $sqlab); ?>
	<div class="profil">
		<form action="profil.inc.php" method="post" enctype="multipart/form-data">
			<table>
				<?php
				while ($dsatz = mysqli_fetch_assoc($result)) {
					echo"<tr>";
					echo"<th>Nachname:</th> <td>".$dsatz['user_nn']."</td></tr>";
					echo"<th>Vorname:</th><td> ".$dsatz['user_vn']."</td></tr>";
					echo"<th>Strasse:</th><td> ".$dsatz['user_str']."</td></tr>";
					echo"<th>Postleitzahl:</th><td> ".$dsatz['user_plz']."</td></tr>";
					echo"<th>Stadt:</th><td>".$dsatz['use_std']."</td></tr>";
					echo"<th>Benutzername:</th><td> ".$dsatz['user_bnt']."</td></tr>";
					echo"<th>Email:</th> <td>".$dsatz['user_email']."</td></tr>";
					echo"</tr>";
				}

				?>

				<tr>
				</table>
				<input type="submit" name="submit" class="button" value="&Auml;ndern">

			</div>
			<div class="profil">
				<h3>Passwort &auml;ndern</h3>

				<p><input class="button" type="submit" name="andern_passwort" value="&Auml;ndern"></p>
			</main>
			<div class="profil">
				<h3>Profilbild andern</h3>
				<input type="file" name="upload_img" id="upload_img">
				<input type="submit" value="Hochladen" name="profilbild" class="button">
			</form>
		</main>
		<?php include "footer.php" ?>