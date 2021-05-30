<?php
	$email ="";
	$code ="xxxxxx";
	$nom ="";
	$prenom ="";

	$database = "projet";
	//connectez-vous dans votre BDD
	//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
	$db_handle = mysqli_connect('localhost', 'root', 'root');
	$db_found = mysqli_select_db($db_handle, $database);
	$sql = "SELECT * FROM vendeur WHERE Email_vendeur LIKE '%vendeur@ece.fr%'";
	$result = mysqli_query($db_handle, $sql);
	while($data = mysqli_fetch_assoc($result)){
		$email =$data['Email_vendeur'];
		$nom =$data['Nom'];
		$prenom=$data['Prenom'];
	}
?>
<!DOCTYPE html>
<head>
	<title>ECE MarketPlace_compte</title>
	<link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
	<meta charset="utf-8" />
</head>
<body>
	<div id="header">
		<p>Bienvenue sur votre compte de Vendeur<mark><a href="deconnexion.html">Déconnexion</a></mark></p>
	</div>
	<div id="navigation1">
		<table>
			<tr>
				<td><img id="center" src="ecemarket.png" alt="logo principal" width= "150" height="100"/></td>
				<td align="center"><a class="onglet" href="pageweb.php"><strong>Accueil</strong></a></td>
				<td align="center"><a class="onglet" href="parcourirvendeur.php"><strong>Tout parcourir</strong></a></td>
				<td align="center"><a class="onglet" href="notification.php"><strong>Notifications</strong></a></td>
				<td align="center"><a class="onglet" href="paniervendeur.php"><img src="panierimg.jpg" alt="panierclient" width=40 height="40"/><strong>Panier</a></strong></td>
				<td align="center"><a class="onglet" href="compteVendeur.php"><strong>Mon compte</a></strong></td>
			</tr>
		</table>
	</div>
	<div id="navigation">
		<h4><u>Informations du compte</u></h4>
	</div>
	<div id="wrapper">
		<form action="mdpModifVendeur.php" method="post">
			<table>
				<tr>
					<td>Email:</td>
					<td>
						<?php
							echo $email;
						?>	
					</td>
				</tr>
				<tr>
					<td>Mot de passe:</td>
					<td>
						<?php
							echo $code;
						?>
					</td>
					<td><input type="text" name="mdp"/></td>
					<td><input type="submit" name="boutton" value="Modifier"/></td>
					<td><h6><?= $modif?></h6></td>
				</tr>
				<tr>
					<td>Nom:</td>
					<td>
						<?php
							echo $nom;
						?>
					</td>
				</tr>
				<tr>
					<td>Prénom:</td>
					<td>
						<?php
							echo $prenom;
						?>
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div>
		<div id="navigation">
			<h4><u>Ajouter un article</u></h4>
		</div>
		<br>
		<div>
			<form enctype="multipart/form-data" action="itemVendeur.php" method="post">
				<p><mark><?= $mes2?></mark></p>
				<table align="center">
					<tr>
						<td>ID de l'item:</td>
						<td><input type="text" name="ID"/></td>
					</tr>
					<tr>
						<td>Nom:</td>
						<td><input type="text" name="nom"/></td>
					</tr>
					<tr>
						<td>Description:</td>
						<td><input type="text" name="description"/></td>
					</tr>
					<tr>
						<td>Prix initial:</td>
						<td><input type="number" name="prix"/></td>
					</tr>
					</tr>
						<td>Image:</td>
						<td><input type="file" name="fic"/></td>
						<td><?= $mes1?></td>
					<tr>
						<td>Vidéo:</td>
						<td><input type="file" name="video"/></td>
					</tr>
					<tr>
						<td>Catégorie:</td>
						<td><br><input type="radio" name="categorie" value="vip">Accéssoire VIP<br>
							<input type="radio" name="categorie" value="scolaire">Matériel scolaire<br>
							<input type="radio" name="categorie" value="meuble">Meuble ou Objet d'art</td>
					</tr>
					<tr>
						<td>Type de vente:</td>
						<td><br><input type="radio" name="type" value="immediat">Achat immédiat<br>
							<input type="radio" name="type" value="offre">Meilleure offre<br>
							<input type="radio" name="type" value="transaction">Transaction Vendeur-Client
						</td>
					</tr>
					<tr>
						<td>
							<input colspan="3" aling="center" type="submit" name="boutton3" value="Ajouter l'item"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	<div id="footer">
			<p>Copyright &copy; 2021, ECE MarketPlace</p>
	</div>
</body>
</html>