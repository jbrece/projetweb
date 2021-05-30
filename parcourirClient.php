<!DOCTYPE html>
<head>
	<title>ECE MarketPlace_compte</title>
	<link href="style.css" rel="stylesheet" type="text/css" /> 
	<meta charset="utf-8" />
</head>
<body>
	<div id="header">
		<p>Bienvenue sur la plateforme de recherche<mark></p>
	</div>
	<div id="navigation1">
		<table>
			<tr>
				<td><img id="center" src="images/fond/ecemarket.png" alt="logo principal" width= "150" height="100" /></td>
				<td align="center"><a class="onglet" href="pageclient.php"><strong>Accueil</strong></a></td>
				<td align="center"><a class="onglet" href="parcourirClient.php"><strong>Tout parcourir</strong></a></td>
				<td align="center"><a class="onglet" href="notifClient.php"><strong>Notifications</strong></a></td>
				<td align="center"><a class="onglet" href="panierclient.php"><img src="images/fond/panierimg.jpg" alt="panier" width=40 height="40"/><strong>Panier</a></strong></td>
				<td align="center"><a class="onglet" href="compteClient.php"><strong>Mon compte</a></strong></td>
			</tr>
		</table>
	</div>
	<div id="accueil">
		<form enctype="multipart/form-data" action="parcourir.php" method="post">
			<table align="center">
				<tr>
					<td colspan="3" align="center"><h4><u>Catégories des articles recherchés</u></h4></td>
				</tr>
				<tr>
					<td id="taille"><input type="radio" name="categorie" value="vip">Accéssoire VIP</td>
					<td id="taille"><input type="radio" name="categorie" value="scolaire">Matériel scolaire</td>
					<td id="taille"><input type="radio" name="categorie" value="meuble">Meuble ou Objet d'art</td>
				</tr>
				<tr>
					<td><p><br></p></td>
				</tr>
				<tr>
					<td colspan="3" align="center"><h4><u>Type de vente des articles recherchés</u></h4></td>
				</tr>
				<tr>
					<td id="taille"><input type="radio" name="type" value="immediat">Achat immédiat</td>
					<td id="taille"><input type="radio" name="type" value="offre">Meilleure offre</td>
					<td id="taille"><input type="radio" name="type" value="transaction">Transaction Vendeur-Client</td>
				</tr>
				<tr>
					<td><p><br></p></td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" name="boutton" value="Parcourir">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="footer">
			<h6>Copyright &copy; 2021, ECE MarketPlace</h6>
			<h6>Contacts: </h6>
			<h6>Email: <u>admin@ece.fr</u></h6>
			<h6><img src="images/fond/tel.jpg" height="15" width="auto"/><u>+33 (0) 1 64 57 22 11</u></h6>
	</div>
</body>
</html>