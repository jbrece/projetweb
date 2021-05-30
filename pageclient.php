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
				<td><img id="center" src="images/fond/ecemarket.png" alt="logo principal" width= "150" height="100" /></td>
				<td align="center"><a class="onglet" href="pageclient.php"><strong>Accueil</strong></a></td>
				<td align="center"><a class="onglet" href="parcourirClient.php"><strong>Tout parcourir</strong></a></td>
				<td align="center"><a class="onglet" href="notifClient.php"><strong>Notifications</strong></a></td>
				<td align="center"><a class="onglet" href="panierclient.php"><img src="images/fond/panierimg.jpg" alt="panier" width="40" height="40"/><strong>Panier</a></strong></td>
				<td align="center"><a class="onglet" href="compteClient.php"><strong>Mon compte</a></strong></td>
			</tr>
		</table>
	</div>
	<div id="navigation">
		<h4><u>Accueil</u></h4>
	</div>
	<div id="flash">
	</div>
	<div id="accueil">
		<div id="jour">
		</div>
		<div id="flash">
		</div>
		<table align="center">	
				<tr>
					<td colspan="2" align="center"><br><h3 class="bouton1">Nouvel Article</h3><br></td>
					<td colspan="2" align="center"><br><h3 class="bouton2">Coup de coeur</h3><br></td>
				</tr>
				<tr>
					<td><img src="images/meubleArt/snk.png" alt="dessin" height="300" width="auto" border="4px" /></td>
					<td><video src="images/meubleArt/snk.mp4" height="300" width="auto" controls></video></td>
					<td>Prix : 18,00€ <br><br>
						<input type="submit" name="button1" value="Ajouter au Panier"/></td>
					<td><img src="images/vip/switchMonster.jpg" alt="nitendo switch" height="300" width="auto"/></td>
					<td>Prix : 429,00€ <br><br>
						<input type="submit" name="button1" value="Ajouter au Panier"/>
					</td>
				</tr>
		</table>
		<br><br>
		<div id="navigation">
		</div>
		<div id="bord">
			<p align="center"><br><img src="images/fond/venteFlash.gif" alt="vente flash" height="auto" width="600px"/></p>
		</div>
		<table align="center">
			<tr>
				<td align="center"><br><h3 class="bouton2">Promotion 15 %</h3><br></td>
			</tr>
			<tr>
				<td><img src="images/vip/ps5.jpg" alt="ps5" height="300" width="auto"/></td>
				<td>Prix : 594,15€ <br><br>
							<input type="submit" name="button1" value="Ajouter au Panier"/>
				</td>	
			</tr>
		</table>
	</div>
	<div id="footer">
			<h6>Copyright &copy; 2021, ECE MarketPlace</h6>
			<h6>Contacts: </h6>
			<h6>Email: <u>admin@ece.fr</u></h6>
			<h6><img src="images/fond/tel.jpg" height="15" width="auto"/><u>+33 (0) 1 64 57 22 11</u></h6>
	</div>
</body>
</html>