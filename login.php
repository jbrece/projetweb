<!DOCTYPE html>
<head>
	<title>ECE MarketPlace_Connexion</title>
	<link href="style.css" rel="stylesheet" type="text/css" /> 
	<meta charset="utf-8" />
</head>
<body>
	<div id="wrapper">
		<div id="navigation1">
			<h4>Création du compte client</h4>
		</div>
		<br>
		<div>
			<form action="ajoutClient.php" method="post">
				<p><mark><?= $mes2?></mark></p>
				<table align="center">
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email"/></td>
						<td><?= $compte?></td>
					</tr>
					<tr>
						<td>Mot de passe:</td>
						<td><input type="password" name="code"/></td>
					</tr>
					<tr>
						<td>Confirmer:</td>
						<td><input type="text" name="confirm"/></td>
						<td><?= $mes?></td>
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
						<td>Téléphone:</td>
						<td><input type="text" name="telephone"/></td>
					</tr>
					<tr>
						<td>Adresse:</td>
						<td><input type="text" name="adresse"/></td>
					</tr>
					<tr>
						<td><input type="radio" name="clause" value="Accepter"/></td>
						<td>
							<h6>En faisant une enchère sur un article, vous acceptez la clause stipulant votre soumission à un contrat légal pour accepter le paiement de l'article en question.</h6>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="center">
							<input type="submit" name="boutton" value="Créer"/>
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