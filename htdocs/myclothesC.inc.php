<?php include "header.php" ?>
<main>
	<?php include "mainPHP.php"?>
	<?php
	if(isset($_POST['submit'])){
		$connect = verbindung_Datenbank();

	//." clothes_bild ='".$_POST['clothes_bild']."', "
		$sqlab = "update clothes set"

		." clothes_marke ='".$_POST['marke']."',"
		." clothes_collection ='".$_POST['collection']."',"
		." clothes_preis ='".$_POST['preis']."', "
		." clothes_groesse ='".$_POST['groesse']."', "
		." clothes_sex ='".$_POST['sex']."',"
		." clothes_farbe ='".$_POST['farbe']."'"
		." WHERE clothes_user ='".$_SESSION["user"]."' AND clothes_id = '".$_POST['id']."'";

		$sql = mysqli_query($connect, $sqlab);
		$num = mysqli_affected_rows($connect);

		if($num>0){
			echo "<p>Der Datensatz wurde geändert </p>";
			header("Location:index.php");
		}else{
			echo"<div class='alert'>";
			echo "<p>Der Datensatz wurde nicht geändert</p>";
			echo"</div>";
		}
	}

	?>





	<?php 
	if(isset($_POST['myclothes_update_img'])){
		$ordner = "Clothes/";
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
			if (!move_uploaded_file($_FILES["upload_img"]["tmp_name"], $bild_file)) {
				echo"<div class='alert'>";
				echo "Es gab einen Fehler beim hochladen.<br>";
				echo"</div>";
			} else {
				
				echo"<div class='alert'>";
				echo "Das Bild Wurde hochgeladen.<br>";
				echo"</div>";
			}
		}
	}
	//Bild updaten
		$connect = verbindung_Datenbank();
		$sqlab = " UPDATE clothes SET clothes_bild = '$upload_pic' WHERE clothes_user = '".$_SESSION['user']."' AND clothes_id = '".$_POST['id']."'";
		$query = " SELECT * FROM clothes ";

		$result = mysqli_query($connect, $sqlab);
		$result2 = mysqli_query($connect, $query);

		if(!$result)
			die("Qurey Faild".mysqli_error($connect));

		$clothes_img = $_SESSION['clothes_img'];

}
		?>
	</main>
	<?php include "footer.php" ?>
