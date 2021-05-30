<!DOCTYPE html>
<head>
	<title>ECE MarketPlace</title>
	<link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
	<meta charset="utf-8" />
</head>
<body>
	<div id="header">
		<p><?php //echo $compte; ?><mark>Bienvenue sur ECE MarketPlace <?php //echo $prenom; ?> <?php //echo $nom; ?>.</mark></p>
	</div>
	<div id="navigation1">
		<table>
			<tr>
				<td><img id="center" src="ecemarket.png" alt="logo principal" width= "150" height="100" /></td>
				<td align="center"><a class="onglet" href="pageclient.php"><strong>Accueil</strong></a></td>
				<td align="center"><a class="onglet" href="parcourirClient.php"><strong>Tout parcourir</strong></a></td>
				<td align="center"><a class="onglet" href="notificationclient.php"><strong>Notifications</strong></a></td>
				<td align="center"><a class="onglet" href="panierclient.php"><img src="panierimg.jpg" alt="panierclient" width=40 height="40"/><strong>Panier</a></strong></td>
				<td align="center"><a class="onglet" href="compteClient.php"><strong>Mon compte</a></strong></td>
			</tr>
		</table>
	</div>
	<div id="navigation">
		<h4><u>Accueil</u></h4>
	</div>

	<table>	
				<tr>
					<td><br><br><p class = "onglet2" align="center">Sélection du Jour :</p><br>
					<br><u>Nouveaux Articles :</u><br></td>
				</tr>
				<tr>
					<td><img src="image1.jpg" alt="image" width="500" height="333"></td>
					<td>Prix : ???€ <br><br>
						<input type="submit" name="button1" value="Ajouter au Panier"/>
					</td>
				</tr>
			
				<tr>
					<td><br><br><p class = "onglet2" align="center">Ventes Flash :</p><br>
					<br><u>Best Sellers :</u></td>
				</tr>
				<tr>
					<td><img src="image2.jpg" alt="image" width="500" height="333"></td>
					<td>Prix : ???€ <br><br>
						<input type="submit" name="button2" value="Ajouter au Panier"/>
					</td>
				</tr>
		</table>
	<div id="footer">
		<p>Copyright &copy; 2021, ECE MarketPlace</p>
	</div>
</body>
</html>