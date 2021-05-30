
<!DOCTYPE html>
<head>
	<title>ECE MarketPlace_Connexion</title>
	<link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
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
						<td colspan="2" align="center">
							<input type="submit" name="boutton" value="Créer"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<br>
		<div id="footer">
			<h6>Copyright &copy; 2021, ECE MarketPlace</h6>
		</div>
	</div>
</body>
</html>