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
<head>
	<title>ECE MarketPlace_compte</title>
	<link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
	<meta charset="utf-8" />
</head>
<body>
	<div id="header">
		<p>Bienvenue sur votre compte Client<mark><a href="deconnexion.html">Déconnexion</a></mark></p>
	</div>
	<div id="navigation1">
		<table>
			<tr>
				<td><img id="center" src="ecemarket.png" alt="logo principal" width= "150" height="100" /></td>
				<td align="center"><a class="onglet" href="pageclient.php"><strong>Accueil</strong></a></td>
				<td align="center"><a class="onglet" href="parcourirclient.php"><strong>Tout parcourir</strong></a></td>
				<td align="center"><a class="onglet" href="notification.php"><strong>Notifications</strong></a></td>
				<td align="center"><a class="onglet" href="panierclient.php"><img src="panierimg.jpg" alt="panierclient" width=40 height="40"/><strong>Panier</a></strong></td>
				<td align="center"><a class="onglet" href="compteClient.php"><strong>Mon compte</a></strong></td>
			</tr>
		</table>
	</div>
	<div id="navigation">
		<h4><u>Informations du compte Client</u></h4>
	</div>
	<div id="wrapper">
		<form action="mdpModifClient.php" method="post">
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
					<td><h6><?php echo $modif; ?></h6></td>
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
				<tr>
					<td>Téléphone:</td>
					<td>
						<?php
							echo $telephone;
						?>
					</td>
				</tr>
				<tr>
					<td>Adresse:</td>
					<td>
						<?php
							echo $adresse;
						?>
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div>
		<div id="navigation">
			<h4><u>Informations de paiement</u></h4>
		</div>
		<br>
		<div>
			<form action="traitement2.php" method="post">
				<table align="center">
					<tr>
						<td>Carte:</td>
						<td><output type="text" name="num_id"></output></td>
						<td>xxxx5134</td>
						<td><input type="submit" name="boutton1" value="Modifier"/></td>
					</tr>
					<tr>
						<td>Adresse de facturation:</td>
						<td><output type="text" name="facture"></output></td>
					</tr>
				</table>
				<br>
			</form>
		</div>
	<div id="footer">
			<p>Copyright &copy; 2021, ECE MarketPlace</p>
	</div>
	<?php
		mysqli_close($db_handle);
	?>
</body>
</html>