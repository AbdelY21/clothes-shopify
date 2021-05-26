 <?php include "header.php" ?>
 <?php include "mainPHP.php"; ?>
 <main>
 	<?php 
 	if(isset($_POST['update'])){

 		$connect = verbindung_Datenbank();
 		$sqlab =" SELECT * FROM clothes WHERE clothes_user ='".$_SESSION["user"]."' AND clothes_id = '".$_POST['myclothes_update']."'";
 		$result = mysqli_query($connect, $sqlab);
 		$dsatz = mysqli_fetch_assoc($result);


 		echo"<div class='myclothes_container' style='text-align:center'>";
 		echo"<p>Daten ändern.....</p>";
 		echo"<form action='myclothesC.inc.php' method='post'>";
 		echo"<div class='myclothes_display'>";
 		echo"<p><input type='hidden' name='id' value='".$_POST['myclothes_update']."'";
 		echo "</p>";
 		//echo"<p><input type='text' name='am' value='" .$dsatz['clothes_marke']."' > Marke</p>";

        echo "Marke:";
        echo "<select name='marke'>";
        if($dsatz['clothes_marke'] == 'Nike'){
            echo "<option value='Nike' selected>Nike</option>";
            echo "<option value='Adidas'>Adidas</option>";
            echo "<option value='Reebok'>Reebok</option>";
            echo "<option value='Puma'>Puma</option>";
        }
        else if($dsatz['clothes_marke'] == 'Adidas'){
            echo "<option value='Nike'>Nike</option>";
            echo "<option value='Adidas' selected>Adidas</option>";
            echo "<option value='Reebok'>Reebok</option>";
            echo "<option value='Puma'>Puma</option>";
        }
        else if($dsatz['clothes_marke'] == 'Reebok'){
            echo "<option value='Nike'>Nike</option>";
            echo "<option value='Adidas'>Adidas</option>";
            echo "<option value='Reebok' selected>Reebok</option>";
            echo "<option value='Puma'>Puma</option>";
        }
        else if($dsatz['clothes_marke'] == 'Puma'){
            echo "<option value='Nike'>Nike</option>";
            echo "<option value='Adidas'>Adidas</option>";
            echo "<option value='Reebok'>Reebok</option>";
            echo "<option value='Puma' selected>Puma</option>";
        }
        echo "</select>";

        echo "Collection:";
        echo "<select name='collection'>";
        if($dsatz['clothes_collection'] == 'T-Shirts'){
            echo "<option value='T-Shirts' selected>T-Shirts</option>";
            echo "<option value='Pullover'>Pullover</option>";
            echo "<option value='Jacke'>Jacke</option>";
            echo "<option value='Hoodies - Sweatshirts'>Hoodies - Sweatshirts</option>";
        }
        else if($dsatz['clothes_collection'] == 'Pullover'){
            echo "<option value='T-Shirts'>T-Shirts</option>";
            echo "<option value='Pullover' selected>Pullover</option>";
            echo "<option value='Jacke'>Jacke</option>";
            echo "<option value='Hoodies - Sweatshirts'>Hoodies - Sweatshirts</option>";
        }
        else if($dsatz['clothes_collection'] == 'Jacke'){
            echo "<option value='T-Shirts'>T-Shirts</option>";
            echo "<option value='Pullover'>Pullover</option>";
            echo "<option value='Jacke' selected>Jacke</option>";
            echo "<option value='Hoodies - Sweatshirts'>Hoodies - Sweatshirts</option>";
        }
        else if($dsatz['clothes_collection'] == 'Hoodies - Sweatshirts'){
            echo "<option value='T-Shirts'>T-Shirts</option>";
            echo "<option value='Pullover'>Pullover</option>";
            echo "<option value='Jacke'>Jacke</option>";
            echo "<option value='Hoodies - Sweatshirts' selected>Hoodies - Sweatshirts</option>";
        }
        echo "</select>";

        //echo"<p><input type='text' name='amm' value='" .$dsatz['clothes_collection']."' > Collection </p>";
        echo "Preis:";
        echo"<input type='text' name='preis' value='" .$dsatz['clothes_preis']."' >";

        echo "Größe:";
        echo "<select name='groesse'>";
        if($dsatz['clothes_groesse'] == 'S'){
            echo "<option value='S' selected>S</option>";
            echo "<option value='M'>M</option>";
            echo "<option value='L'>L</option>";
            echo "<option value='XL'>XL</option>";
        }
        else if($dsatz['clothes_groesse'] == 'M'){
            echo "<option value='S' >S</option>";
            echo "<option value='M' selected>M</option>";
            echo "<option value='L'>L</option>";
            echo "<option value='XL'>XL</option>";
        }
        else if($dsatz['clothes_groesse'] == 'L'){
            echo "<option value='S' >S</option>";
            echo "<option value='M' >M</option>";
            echo "<option value='L' selected>L</option>";
            echo "<option value='XL'>XL</option>";
        }
        else if($dsatz['clothes_groesse'] == 'XL'){
            echo "<option value='S' >S</option>";
            echo "<option value='M' >M</option>";
            echo "<option value='L' >L</option>";
            echo "<option value='XL' selected>XL</option>";
        }
        echo "</select>";

        //echo"<p><input type='text' name='ak' value='".$dsatz['clothes_groesse']."'> Groesse</p>" ;

        echo "Farbe:";
        echo "<select name='farbe'>";
        if($dsatz['clothes_farbe'] == 'Weiss'){
            echo "<option value='Weiss' selected>Weiss</option>";
            echo "<option value='Schwarz'>Schwarz</option>";
            echo "<option value='Grau'>Grau</option>";
            echo "<option value='Blau'>Blau</option>";
        }
        else if($dsatz['clothes_farbe'] == 'Schwarz'){
            echo "<option value='Weiss' >Weiss</option>";
            echo "<option value='Schwarz' selected>Schwarz</option>";
            echo "<option value='Grau'>Grau</option>";
            echo "<option value='Blau'>Blau</option>";
        }
        else if($dsatz['clothes_farbe'] == 'Grau'){
            echo "<option value='Weiss' >Weiss</option>";
            echo "<option value='Schwarz' >Schwarz</option>";
            echo "<option value='Grau' selected>Grau</option>";
            echo "<option value='Blau'>Blau</option>";
        }
        else if($dsatz['clothes_farbe'] == 'Blau'){
            echo "<option value='Weiss' >Weiss</option>";
            echo "<option value='Schwarz' >Schwarz</option>";
            echo "<option value='Grau' >Grau</option>";
            echo "<option value='Blau' selected>Blau</option>";
        }
        echo "</select>";


        //echo"<p><input type='text' name='ae' value='".$dsatz['clothes_farbe']."'> Farbe</p>" ;
        echo "Geschlecht:";
        echo "<select name='sex'>";
        if($dsatz['clothes_sex'] == 'Men'){
            echo "<option value='Men' selected>Männer</option>";
            echo "<option value='Women'>Frauen</option>";

        }
        else if($dsatz['clothes_sex'] == 'Women'){
            echo "<option value='Men' >Männer</option>";
            echo "<option value='Women' selected>Frauen</option>";

        }
        echo "</select>";

        //echo"<p><input type='text' name='al' value='".$dsatz['clothes_sex']."'> Sex</p>";


        echo"</div>";
 		?>

 		<?php
 		echo"<p><input type='submit' name='submit' value='OK' class='button'></p>";		
 		echo"</form>";
 		echo"</div>";

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
 			echo"<div class='alert'>";
 			echo"Der Datensatz wurde gel&ouml;scht";
 			echo"</div>";
 		}else{
 			echo"<div class='alert'>";
 			echo"Der Datensatz wurde nicht gel&ouml;scht";
 			echo"</div>";
 		}

 	}
 	?>

 	<?php
 	if(isset($_POST['myclothes_img_update'])){

 		?>
 		<div class="alert">
 			<form action="myclothesC.inc.php" method="post" enctype="multipart/form-data">
 				<h3>Hier Bild einfügen</h3>
 				<?php echo"<input type='hidden' name='id' value='".$_POST['myclothes_update']."'>";?>
 				<input type="file" name="upload_img" id="upload_img">
 				<input class="button" type="submit" name="mycars_update_img" value="Hochladen">
 			</form>
 		</div>
 		<?php

 	}
 	?>
 </main>
 <?php include "footer.php" ?>