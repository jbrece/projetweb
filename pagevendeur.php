<!DOCTYPE html>
<head>
	<title>ECE MarketPlace</title>
	<link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
	<meta charset="utf-8" />
</head>
<body>
	<div id="header">
		<p><?= $compte ?><mark>Bienvenue sur ECE MarketPlace <?= $prenom ?> <?= $nom ?>.</mark></p>
	</div>
	<div id="navigation1">
		<table align="center">
			<tr>
				<td><img id="center" src="ecemarket.png" alt="logo principal" width= "150" height="100" /></td>
				<td align="center"><a class="onglet" href="accueil.php"><strong>Accueil</strong></a></td>
				<td align="center"><a class="onglet" href="parcourir.php"><strong>Tout parcourir</strong></a></td>
				<td align="center"><a class="onglet" href="notification.php"><strong>Notifications</strong></a></td>
				<td align="center"><a class="onglet" href="panierclient.php"><img src="panierimg.jpg" alt="panierclient" width="50" height="50"/><strong>Panier</a></strong></td>
				<td align="center"><a class="onglet" href="compteVendeur.php"><strong>Mon compte</a></strong></td>
			</tr>
		</table>
	</div>
	<div id="section">
	</div>
	<div id="footer">
		<p>Copyright &copy; 2021, ECE MarketPlace</p>
	</div>
</body>
</html>