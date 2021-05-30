<!DOCTYPE html>
<head>
	<title>ECE MarketPlace_compte</title>
	<link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
	<meta charset="utf-8" />
</head>
<body>
	<div id="header">
		<p>Bienvenue sur la plateforme de recherche<mark></p>
	</div>
	<div id="navigation1">
		<table>
			<tr>
				<td><img id="center" src="images/fond/ecemarket.png" alt="logo principal" width= "150" height="100"/></td>
				<td align="center"><a class="onglet" href="pageadmin.php"><strong>Accueil</strong></a></td>
				<td align="center"><a class="onglet" href="parcourirAdmin.php"><strong>Tout parcourir</strong></a></td>
				<td align="center"><a class="onglet" href="notificationadmin.php"><strong>Notifications</strong></a></td>
				<td align="center"><a class="onglet" href="compteAdmin.php"><strong>Mon compte</a></strong></td>
			</tr>
		</table>
	</div>
	<div id="navigation">
		<h4><u>Catégories des articles recherchés</u></h4>
	</div>
	<div id="wrapper2">
		<form action="traitement.php" method="post">
			<table align="center">
				<td id="taille"><input type="radio" name="categorie" value="vip">Accéssoire VIP</td>
				<td id="taille"><input type="radio" name="categorie" value="scolaire">Matériel scolaire</td>
				<td id="taille"><input type="radio" name="categorie" value="meuble">Meuble ou Objet d'art</td>
			</table>
		</form>
	</div>
	<div id="navigation">
		<h4><u>Type de vente des articles recherchés</u></h4>
	</div>
	<div id="wrapper2">
		<form action="traitement.php" method="post">
			<table align="center">
				<tr>
					<td id="taille"><input type="radio" name="type" value="immediat">Achat immédiat</td>
					<td id="taille"><input type="radio" name="type" value="offre">Meilleure offre</td>
					<td id="taille"><input type="radio" name="type" value="transaction">Transaction Vendeur-Client</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="footer">
			<p>Copyright &copy; 2021, ECE MarketPlace</p>
	</div>
</body>
</html>