<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/mainCSS.css">
	<link rel="stylesheet" type="text/css" href="CSS/index.css">
	<link rel="stylesheet" type="text/css" href="CSS/clothesbestand.css">
	<link rel="stylesheet" type="text/css" href="CSS/registrieren.css">
	<link rel="stylesheet" type="text/css" href="CSS/clothesplus.css">
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
	<link rel="stylesheet" type="text/css" href="CSS/profil.css">
	<link rel="stylesheet" type="text/css" href="CSS/myclothes.css">
	<title>Clothes-Shopify</title>
</head>
<body>
	<header>
		<?php if(isset($_SESSION['user'])){ ?>
		<nav>
			<ul>
				<li><a href="index.php"><img src="Logos/homebutton.png" alt="LOGO"></a></li>
				<li><a href="clothesbestand.php">Clothes</a></li>
				<li><a href="clothesplus.php">Clothes +</a></li>
				<li class="dropdown"><img src="User/<?php echo $_SESSION['user_img']; ?> ">
					<ul class="dropdown-content">
						<li><a href="myclothes.php">My Clothes</a></li>
						<li><a href="profil.php">Profil</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<?php }else{ ?>
			<nav>
			<ul>
				<li><a href="index.php"><img src="Logos/homebutton.png" alt="LOGO"></a></li>
				<li><a href="clothesbestand.php">Clothesbestand</a></li>
				<li><a href="registrieren.php">Registrieren</a></li>
				<li class="dropdown"><a href="login.php">Login</a>
				</li>
			</ul>
			</nav>
		<?php }?>
		

<?php ?>
	</header>

	
