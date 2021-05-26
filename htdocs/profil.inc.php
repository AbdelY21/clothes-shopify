
<?php include "header.php" ?>

<main>
	<?php include "mainPHP.php"?>

	<?php
	if(isset($_POST['submit'])){

		$connect = verbindung_Datenbank();
		$sqlab =" SELECT * FROM user WHERE user_bnt ='".$_SESSION["user"]."'";
		$result = mysqli_query($connect, $sqlab);
		$dsatz = mysqli_fetch_assoc($result);


		echo"<p>&Auml;ndern Sie Ihre Daten und und klicken sie auf OK</p>";
		echo"<form action='profilC.inc.php' method='post'>";
		echo"<p><input type='text' name='vn' value='" .$dsatz['user_nn']."' > Nachname</p>";
		echo"<p><input type='text' name='nn' value='" .$dsatz['user_vn']."' > Vorname</p>"; 
		echo"<p><input type='text' name='str' value='".$dsatz['user_str']."'> Strasse</p>" ;
		echo"<p><input type='text' name='plz' value='".$dsatz['user_plz']."'> Postleitzahl</p>" ;
		echo"<p><input type='text' name='std' value='".$dsatz['use_std']."'> Stadt</p>" ;
		echo"<p><input type='text' name='email' value='".$dsatz['user_email']."'> Email</p>";
		echo"<p><input type='submit' name='submit' value='OK' class='button'></p>";
		echo"</form>";

	}
	?>

	<?php
	if(isset($_POST['andern_passwort'])){
		?>
		<form action="profilC.inc.php" method="post">
			<p><input type="password" name="alt_pw" >Altes Passwort eingeben</p> 
			<p><input type="password" name="neues_pw" >Neues Passwort eingeben</p> 
			<p><input type="password" name="neues_pw_check" >Neues Passwort best&auml;tigen</p> 

			<p><input type="submit" name="update_pw" class="button" value="&Auml;ndern"></p>
		</form>
		<?php	
	}

	?>

	<?php
	if(isset($_POST['profilbild'])){
		$ordner = "User/";
		$bild_file = $ordner . basename($_FILES["upload_img"]["name"]);
		$upload_pic = $_FILES["upload_img"]["name"];
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($bild_file,PATHINFO_EXTENSION));

	// Überprüft ob das Bild echt ist oder fake
		$check = getimagesize($_FILES["upload_img"]["tmp_name"]);
		if($check == false) {
			echo"<div class='alert'>";
			echo "Kein echtes Bild.";
			echo"</div>";
			$uploadOk = 0;
		} else{

			// Bild größe überprpüfen
			if ($_FILES["upload_img"]["size"] > 500000) {
				echo"<div class='alert'>";
				echo "Das Bild ist zu groß.";
				echo"</div>";
				$uploadOk = 0;
			}
			// Nur Bestimmte Bildformate erlauben
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				echo"<div class='alert'>";
			echo "Nur JPG, JPEG, PNG & GIF Formate erlaubt.";
			echo"</div>";
			$uploadOk = 0;
		}	


		// Falls das Bild schon existieren sollte

		if (file_exists($bild_file)) {
			echo"<div class='alert'>";
			echo "Ein Bild mit diesem Namen existiert bereits.";
			echo"</div>";
			$uploadOk = 0;

		}
		// Falls $uploadOK == 0 Bild wurde nicht hochgeladen
		if ($uploadOk == 0) {
			echo"<div class='alert'>";
			echo "Bild wurde nicht hochgeladen.";
			echo"</div>";
			exit();
		// Falls alles OK, lade Bild hoch
		} else {
			if (move_uploaded_file($_FILES["upload_img"]["tmp_name"], $bild_file)) {
				echo"<div class='alert'>";
				echo "Das Bild Wurde hochgeladen.<br>";
				echo"</div>";
			} else {
				echo"<div class='alert'>";
				echo "Es gab einen Fehler beim hochladen.<br>";
				echo"</div>";
			}
		}
	}
	//Bild updaten
	$connect = verbindung_Datenbank();
	$sqlab = "UPDATE user SET "
	." user_img = '$upload_pic'"
	." WHERE user_bnt = '".$_SESSION['user']."'";

	$result = mysqli_query($connect, $sqlab);
	$user_img = $_SESSION['user_img'];
}
?>
</main>
<?php include "footer.php" ?>

