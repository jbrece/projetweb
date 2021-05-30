<?php
	$email ="";
	$code ="xxxxxx";

	$database = "projet";
	//connectez-vous dans votre BDD
	//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
	$db_handle = mysqli_connect('localhost', 'root', 'root');
	$db_found = mysqli_select_db($db_handle, $database);
	$sql = "SELECT * FROM administrateur WHERE Email_admin LIKE '%admin@ece.fr%'";
	$result = mysqli_query($db_handle, $sql);
	while($data = mysqli_fetch_assoc($result)){
		$email =$data['Email_admin'];
	}
?>
<!DOCTYPE html>
<head>
	<title>ECE MarketPlace_compte</title>
	<link href="style.css" rel="stylesheet" type="text/css" /> 
	<meta charset="utf-8" />
</head>
<body>
	<div id="header">
		<p>Bienvenue sur votre compte Administrateur <mark><a href="pageweb.php">Déconnexion</a></mark></p>
	</div>
	<div id="navigation1">
		<table>
			<tr>
				<td><img id="center" src="images/fond/ecemarket.png" alt="logo principal" width= "150" height="100"/></td>
				<td align="center"><a class="onglet" href="pageadmin.php"><strong>Accueil</strong></a></td>
				<td align="center"><a class="onglet" href="parcourirAdmin.php"><strong>Tout parcourir</strong></a></td>
				<td align="center"><a class="onglet" href="notifAdmin.php"><strong>Notifications</strong></a></td>
				<td align="center"><a class="onglet" href="compteAdmin.php"><strong>Mon compte</a></strong></td>
			</tr>
		</table>
	</div>
	<div id="navigation">
		<h4><u>Informations du compte</u></h4>
	</div>
	<div id="wrapper">
		<form action="mdpModifAdmin.php" method="post">
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
					<td><input type="password" name="mdp"/></td>
					<td><input type="submit" name="boutton" value="Modifier"/></td>
					<td><h6><?= $modif?></h6></td>
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
			<form enctype="multipart/form-data" action="itemAdmin.php" method="post">
				<p><mark><?= $mes3?></mark></p>
				<p><mark><?= $mes2?></mark></p>
				<table align="center">
					<tr>
						<td>ID de l'item:</td>
						<td><input type="text" name="ID"/></td>
						<td><?= $mes?></td>
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
		<div id="navigation">
			<h4><u>Actions</u></h4>
		</div>
		<br>
		<table align="center">
			<tr>
				<td>
					<h4><a class="bouton1" href="logVendeur.php">Ajouter Vendeur</a></h4>
				</td>
				<td>
					<h4><a class="bouton1" href="supprVendeur.php">Supprimer Vendeur</a></h4>
				</td>
			</tr>
		</table>	
		<br>
	</div>
	<div id="footer">
			<h6>Copyright &copy; 2021, ECE MarketPlace</h6>
			<h6>Contacts: </h6>
			<h6>Email: <u>admin@ece.fr</u></h6>
			<h6><img src="images/fond/tel.jpg" height="15" width="auto"/><u>+33 (0) 1 64 57 22 11</u></h6>
	</div>
</body>
</html>