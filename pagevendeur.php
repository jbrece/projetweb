<!DOCTYPE html>
<head>
	<title>ECE MarketPlace</title>
	<link href="style.css" rel="stylesheet" type="text/css" /> 
	<meta charset="utf-8" />
</head>
<body>
	<div id="header">
		<p><?= $compte ?><mark>Bienvenue sur ECE MarketPlace <?= $prenom ?> <?= $nom ?>.</mark></p>
	</div>
	<div id="navigation1">
		<table>
			<tr>
				<td><img id="center" src="images/fond/ecemarket.png" alt="logo principal" width= "150" height="100"/></td>
				<td align="center"><a class="onglet" href="pagevendeur.php"><strong>Accueil</strong></a></td>
				<td align="center"><a class="onglet" href="parcourirVendeur.php"><strong>Tout parcourir</strong></a></td>
				<td align="center"><a class="onglet" href="notifVendeur.php"><strong>Notifications</strong></a></td>
				<td align="center"><a class="onglet" href="compteVendeur.php"><strong>Mon compte</a></strong></td>
			</tr>
		</table>
	</div>
	<div id="ID">
	</div>
	<div id="home">
	</div>
	<div id="footer">
		<h6>Copyright &copy; 2021, ECE MarketPlace</h6>
		<h6>Contacts: </h6>
		<h6>Email: <u>admin@ece.fr</u></h6>
		<h6><img src="images/fond/tel.jpg" height="15" width="auto"/><u>+33 (0) 1 64 57 22 11</u></h6>
	</div>
</body>
</html>