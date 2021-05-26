 <?php include "header.php" ?>
 <?php include "mainPHP.php"; ?>
 <main>
 	<?php 
 	if(isset($_POST['update'])){

 		$connect = verbindung_Datenbank();
 		$sqlab =" SELECT * FROM clothes WHERE clothes_user ='".$_SESSION["user"]."' AND clothes_id = '".$_POST['myclothes_update']."'";
 		$result = mysqli_query($connect, $sqlab);
 		$dsatz = mysqli_fetch_assoc($result);


 		echo"<p>Clothes &auml;ndern.....</p>";
 		echo"<form action='myclothesC.inc.php' method='post'>";
 		echo"<p><input type='hidden' name='id' value='".$_POST['myclothes_update']."'";
 		echo"<p><input type='text' name='am' value='" .$dsatz['clothes_marke']."' > Marke</p>";
 		echo"<p><input type='text' name='amm' value='" .$dsatz['clothes_collection']."' > Collection</p>";
 		echo"<p><input type='text' name='ap' value='" .$dsatz['clothes_preis']."' > Preis</p>";
 		echo"<p><input type='text' name='ak' value='".$dsatz['clothes_groesse']."'> Groesse</p>" ;
 		echo"<p><input type='text' name='al' value='".$dsatz['clothes_sex']."'> Sex</p>"; ?>
        echo"<p><input type='text' name='al' value='".$dsatz['clothes_farbe']."'> Farbe</p>"; ?>

 		<?php
 		echo"<p><input type='submit' name='submit' value='OK' class='button'></p>";
 		echo"</form>";
 	}


 	?>

 	<?php 
 	if(isset($_POST['delete'])){
 		$connect = verbindung_Datenbank();

 		$sqlab =" SELECT * FROM clothes WHERE clothes_user ='".$_SESSION["user"]."' AND clothes_id = '".$_POST['myclothes_update']."'";
 		$result = mysqli_query($connect, $sqlab);
 		$dsatz = mysqli_fetch_assoc($result);

 		$clothes_bild = $dsatz['clothes_bild'];
 		$id = $_POST['myclothes_update'];

		// Löschen
 		$sqlab = "DELETE FROM clothes WHERE clothes_id = $id";
 		$result = mysqli_query($connect, $sqlab);

 		$num = mysqli_affected_rows($connect);

 		if($num>0){
 			unlink("Clothes/$clothes_bild");
 			echo"Der Datensatz wurde gel&ouml;scht";
 		}else{
 			echo"Der Datensatz wurde nicht gel&ouml;scht";
 		}

 	}
 	?>
 </main>
 <?php include "footer.php" ?>