<!DOCTYPE html>
<head>
	<title>ECE MarketPlace_Connexion</title>
	<link href="style.css" rel="stylesheet" type="text/css" /> 
	<meta charset="utf-8" />
</head>
<body>
	<div id="navigation1">
		<table>
			<tr>
				<td><img id="center" src="images/fond/ecemarket.png" alt="logo principal" width= "150" height="100"/></td>
				<td align="center"><a class="onglet" href="pageadmin.php"><strong>Accueil</strong></a></td>
				<td align="center"><a class="onglet" href="parcourirAdmin.php"><strong>Tout parcourir</strong></a></td>
				<td align="center"><a class="onglet" href="notification.php"><strong>Notifications</strong></a></td>
				<td align="center"><a class="onglet" href="compteAdmin.php"><strong>Mon compte</a></strong></td>
			</tr>
		</table>
	</div>
	<div id="wrapper">
		<div id="navigation1">
			<h4>Création du compte Vendeur</h4>
		</div>
		<br>
		<div>
			<form enctype="multipart/form-data" action="ajoutVendeur.php" method="post">
				<p><mark><?= $compte?></mark></p>
				<p><mark><?= $mes2?></mark></p>
				<table align="center">
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email"/></td>
					</tr>
					<tr>
						<td>Mot de passe:</td>
						<td><input type="password" name="code"/></td>
					</tr>
					<tr>
						<td>Confirmer:</td>
						<td><input type="text" name="confirm"/></td>
						<td><?= $mes4?></td>
					</tr>
					<tr>
						<td>Nom:</td>
						<td><input type="text" name="nom"/></td>
					</tr>
					<tr>
						<td>Prénom:</td>
						<td><input type="text" name="prenom"/></td>
					</tr>
					<tr>
						<td>ID photo:</td>
						<td><input type="file" name="fic1"/></td>
						<td><?= $mes1?></td>
					</tr>
					<tr>
						<td>Image de fond:</td>
						<td><input type="file" name="fic2"/></td>
						<td><?= $mes3?></td>
					</tr>
					<tr>
						<td colspan="3" align="center">
							<input type="submit" name="boutton" value="Ajouter"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<br>
		<div id="footer">
			<h6>Copyright &copy; 2021, ECE MarketPlace</h6>
			<h6>Contacts: </h6>
			<h6>Email: <u>admin@ece.fr</u></h6>
			<h6><img src="images/fond/tel.jpg" height="15" width="auto"/><u>+33 (0) 1 64 57 22 11</u></h6>
	</div>
	</div>
</body>
</html>