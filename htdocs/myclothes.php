 <?php include "header.php" ?>
 <main>
 	<?php include "mainPHP.php" ?>
 	<?php
 	$connect = verbindung_Datenbank();

 	$sqlab =" SELECT * FROM clothes WHERE clothes_user ='".$_SESSION["user"]."'";
 	$result = mysqli_query($connect, $sqlab);
 	$num = mysqli_num_rows($result);
 	?>

 	<div class="allClothes_myClothes">
 		<form action="myclothes.inc.php" method="post" enctype="multipart/form-data">
 			<table >
 				<tr>
 					<td>Auswahl</td>
 					<td>Bild</td>
 					<td>Marke</td>
 					<td>Collection</td>
 					<td>Groesse</td>
 					<td>Farbe</td>
 					<td>Sex</td>
                    <td>Preis</td>
 				</tr>
 				<?php
 				while($dsatz = mysqli_fetch_assoc($result)){
 					$clothes_id =	$dsatz['clothes_id'];
 					$clothes_bild =	$dsatz['clothes_bild'];
 					$clothes_marke =	$dsatz['clothes_marke'];
 					$clothes_collection =	$dsatz['clothes_collection'];
 					$clothes_preis =	$dsatz['clothes_preis'];
 					$clothes_groesse =		$dsatz['clothes_groesse'];
 					$clothes_sex =	$dsatz['clothes_sex'];
 					$clothes_farbe =	$dsatz['clothes_farbe'];
 					echo "<div id='allClothesIn'>";
 					echo"<tr>";
 					echo"<td><input type='radio' name ='myclothes_update' value='".$dsatz['clothes_id']."'></td>";
 					?>
 					<td class="bild_clothes" ><img src="Clothes/<?php echo $clothes_bild ?> "></td>
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
 				}
 				?>
 				
 			</table>

 			<input type='submit' name='update' class='button' value='&Auml;ndern'>
 			<input type='submit' name='delete' class='button_delete' value='L&ouml;schen'>
 			<input type="submit" name="myclothes_img_update" class="button"value="Bild &auml;ndern">
 		</div>

 	</form>
 </div>
</main>
<?php include "footer.php" ?>	
