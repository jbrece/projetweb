
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
	<link rel="stylesheet" type="text/css" href="stylecompte.css"/>
	<meta charset="utf-8" />
</head>
<body>

	<div id="header">
		<p><mark>Bienvenue sur ECE MarketPlace</mark></p>
	</div>
	<div id="navigation1">
		<table align="center">
			<tr>
				<td><img id="center" src="ecemarket.png" alt="logo principal" width= "150" height="100" /></td>
				<td align="center"><a class="onglet" href="pageweb.php"><strong>Accueil</strong></a></td>
				<td align="center"><a class="onglet" href="parcourirclient.php"><strong>Tout parcourir</strong></a></td>
				<td align="center"><a class="onglet" href="notification.php"><strong>Notifications</strong></a></td>
				<td align="center"><a class="onglet" href="panierclient.php"><img src="panierimg.jpg" alt="panierclient" width="50" height="50"/><strong>Panier</a></strong></td>
				<td align="center"><a class="onglet" href="compteclient.php"><strong>Mon compte</a></strong></td>
			</tr>
		</table>
	</div>
	<div id = "navigation">	<h3><u>Notifications</u></h3> </div>
	<form action="1traitement.php" method="post">
	
		<div id ="navigation2">
			<p><input type="checkbox" name="parametre" value="Activer_la_fontion_d_alerte">Activer la fontion d'alerte (Si la fonction d'alerte est activée, vous serez averti lorsqu'un article de votre choix devient disponible)</p><br>
		
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
</body>
</html>