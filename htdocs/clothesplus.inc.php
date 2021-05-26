<?php include "header.php" ?>
<?php include "mainPHP.php";?>
<main>
	<?php
	$ordner = "Clothes/";
	$bild_file = $ordner . basename($_FILES["upload_img"]["name"]);
	$upload_pic = $_FILES["upload_img"]["name"];
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($bild_file,PATHINFO_EXTENSION));

	if(isset($_POST['submit'])){
		$connect = verbindung_Datenbank();
		
		$marke = $_POST['marke'];
		$sex = $_POST['sex'];
		$collection = $_POST['collection'];
		$groesse = $_POST['groesse'];
        $preis = $_POST['preis'];
        $farbe = $_POST['farbe'];

		$user = $_SESSION['user'];


		/* Säubert den String vor Hackerangriffen*/
		$collection = mysqli_real_escape_string($connect, $collection);
		$preis = mysqli_real_escape_string($connect, $preis);
		$groesse = mysqli_real_escape_string($connect, $groesse);
        $farbe = mysqli_real_escape_string($connect, $farbe);


		// Überprüft ob Zeichenkette andere Werte als Zahlen enthält
		
		if(!ctype_digit($preis)){
			echo"<div class='alert'>";
			echo "Bitte einen Wert für den Preis eingeben<br>";
			echo"<a href='clothesplus.php'>Zur&uuml;ck zu Clothes +</a>";
			echo"</div>";
		}else{

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
					echo "Nur JPG, JPEG, PNG & GIF Formate erlaubt.";
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
					echo "Das Bild Wurde hochgeladen.";
					echo"</div>";
				} else {

					echo"<div class='alert'>";
					echo "Es gab einen Fehler beim hochladen.";
					echo"</div>";
				}
			}

			if(empty($collection)|| empty($preis)|| empty($groesse)|| empty($sex) || empty($farbe)|| empty($upload_pic)){
				/*Zurück zur Registration*/
				header("Location: clothesplus.php");
			}else{


				$sqlab = "INSERT INTO clothes (clothes_bild, clothes_marke, clothes_collection,  clothes_preis, clothes_groesse, clothes_sex, clothes_farbe, clothes_user)";
				$sqlab .= " VALUES ('$upload_pic', '$marke', '$collection', '$preis', '$groesse', '$sex', '$farbe', '$user')";

				$result = mysqli_query($connect, $sqlab);

				if(!$result){
					die("FEHLER ".mysqli_error($connect));
				}
			}
		}
	}
		//ende Submit
}

?>
</main>
<?php include "footer.php" ?>
