 <?php include "header.php" ?>
 <?php include "mainPHP.php"; ?>
<main>
	<?php
	if(isset($_POST['submit'])){
		$connect = verbindung_Datenbank();
		$collection = $_POST['collection'];
		$groesse = $_POST['groesse'];
		$sex = $_POST['Sex'];
		$farbe = $_POST['farbe'];
        $preis_von = $_POST['preis'];
        $preis_bis = $_POST['preis_bis'];
        $marke = $_POST['Marke'];

		if(($preis_von > $preis_bis) /* ||($collection = $collection) ||($groesse = $groesse) ||($sex = $sex) ||($farbe = $farbe) */){
			echo"<div class='alert'>";
			echo"Überprüfen Sie die Eingabe<br>";
			echo"<a href='index.php'>Zurück zur Startseite</a>";
			echo"</div>";
		}else if(empty($_POST['Marke'])){
			echo"<div class='alert'>";
			echo"Keine vollständige Eingabe<br>";
			echo"<a href='index.php'>Zurück zur Startseite</a>";
			echo"</div>";
		}else{
			?>
			<div class="treffer">
			</div>
			<div class="allClothes">
				<table >
					<tr>
						<td>Bild</td>
						<td>Marke</td>
						<td>Collection</td>
						<td>Groesse</td>
						<td>Sex</td>
						<td>Farbe</td>
                        <td>Preis</td>
					</tr>
					<?php 



                                /* Ausgabe */
                                $sqlab = " SELECT * FROM clothes WHERE clothes_preis >='$preis_von' AND clothes_preis <='$preis_bis'  ";
                                $sqlab.= " AND clothes_groesse = '$groesse'";
                                $sqlab.= " AND clothes_sex = '$sex'";
                                $sqlab.= " AND clothes_farbe = '$farbe' ";
                                $sqlab.= " AND clothes_marke = '$marke'";
                                $sqlab.= " AND clothes_collection = '$collection'";
                                //echo $sqlab;
                                $result = mysqli_query($connect, $sqlab);
                                $num = mysqli_num_rows($result);
                                if($num<1){
                                    echo"<div class='alert'>";
                                    echo"Die Suche ergab keine Treffer für $marke $collection in $farbe und Größe $groesse <br>";
                                    echo"<a href='index.php'>Zur&uuml;ck zur Startseite</a>";
                                    echo"</div>";
                                }else{
                                    while($dsatz = mysqli_fetch_assoc($result)){
                                        $clothes_bild =	$dsatz['clothes_bild'];
                                        $clothes_marke =	$dsatz['clothes_marke'];
                                        $clothes_collection =	$dsatz['clothes_collection'];
                                        $clothes_preis =	$dsatz['clothes_preis'];
                                        $clothes_groesse =		$dsatz['clothes_groesse'];
                                        $clothes_sex =	$dsatz['clothes_sex'];
                                        $clothes_farbe =	$dsatz['clothes_farbe'];
                                        echo "<div id='allClothesIn'>";
                                        echo"<tr>";
                                        ?>
                                        <td><img src="Clothes/<?php echo $clothes_bild ?> "></td>
                                        <?php
                                        echo"
                                        <td>$clothes_marke</td> 
                                        <td>$clothes_collection</td>
                                        <td>$clothes_groesse </td> 
                                        <td>$clothes_sex </td> 
                                        <td>$clothes_farbe</td>
                                        <td>$clothes_preis &euro;</td>";
                                        echo "</tr>";
                                        echo "</div>";
                                    //ende while
                                    }
                                }
                            //ende foreach


					?>
				</table>
			<?php } ?>
		</div>
		<?php
		//ende isset
	}

	?>
</main>
 <?php include "footer.php" ?>

