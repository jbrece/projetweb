
<?php
	$email ="";
	$code ="xxxxxx";
	$nom ="";
	$prenom ="";
	$telephone="";
	$adresse="";

	$database = "projet";
	//connectez-vous dans votre BDD
	//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);
	$sql = "SELECT * FROM client WHERE Email_client LIKE '%$client1%'";
	$result = mysqli_query($db_handle, $sql);
	while($data = mysqli_fetch_assoc($result)){
		$email =$data['Email_client'];
        $nom =$data['Nom'];
        $prenom =$data['Prenom'];
        $adresse =$data['Adresse'];
        $telephone =$data['Telephone'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ECE MarketPlace</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
</head>
<body>

	<div id="header">
		<p><mark>Bienvenue sur ECE MarketPlace</mark></p>
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
	<div id = "navigation">	<h3><u>Notifications</u></h3> </div>
	<form action="traitement.php" method="post">
		<div id ="home">
			<p><input type="checkbox" name="parametre" value="Activer_la_fontion_d_alerte"> Activer la fontion d'alerte (Si la fonction d'alerte est activée, vous serez averti lorsqu'un article de votre choix devient disponible)</p><br>
		
			<tr>
				<br><td><u id = "marge10">Critères de recherche:</u></td><br><br>		
			</tr>
		
		
		<tr>
			<td><input id="marge20" type="radio" name="classe" value="Meubles_et_Objets_d_art">Meubles et Objets d'art<br>
				<input id="marge20" type="radio" name="classe" value="Accessoires_VIP">Accessoires VIP<br>
				<input id="marge20" type="radio" name="classe" value="Matériel_Scolaire">Matériel Scolaire<br>
				<input id="marge20" type="checkbox" name="statut" value="Rabais">Rabais<br>
				<input id="marge20" type="checkbox" name="statut" value="Article_Récent">Article Récent<br>
			</td>
		</tr>
			<td colspan="2" align="center">
				<br><input type="submit" name="button1" value="Actualiser"/>
			</td>
		</tr>
		</div>
	</form>
	<div id="footer">
			<h6>Copyright &copy; 2021, ECE MarketPlace</h6>
			<h6>Contacts: </h6>
			<h6>Email: <u>admin@ece.fr</u></h6>
			<h6><img src="images/fond/tel.jpg" height="15" width="auto"/><u>+33 (0) 1 64 57 22 11</u></h6>
	</div>
</body>
</html>