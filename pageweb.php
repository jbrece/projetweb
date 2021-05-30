<!DOCTYPE html>
<head>
	<title>ECE MarketPlace</title>
	<link href="style.css" rel="stylesheet" type="text/css" /> 
	<meta charset="utf-8" />
</head>
<body>
	<div id="navigation">
	</div>
	<div id="header">
		<h2 align="center">Bienvenue sur ECE MarketPlace</h2>
	</div>
	<div id="wrapper">
		<table>
			<tr>
				<td>
					<img src="images/fond/ecemarket.png" alt="logo principal" width= "auto" height="100" />
				</td>
				<td><?= $connexion ?><?= $mes ?></td>
		</table>		
	</div>
	<div id="wrapper">
		<div id="navigation1">
			<h4>Connexion</h4>
		</div>
		<br>
		<div>
			<form action="log.php" method="post">
				<table align="center">
					<tr align="center">
						<td>Email:</td>
						<td><input type="text" name="email"/></td>
					</tr>
					<tr align="center">
						<td>Mot de passe:</td>
						<td><input type="password" name="code"/></td>
					</tr>
					<tr align="center">
						<td>
							<input type="submit" name="button1" value="Administrateur"/>
						</td>
						<td>
							<input type="submit" name="button2" value="Vendeur"/>
						</td>
						<td>
							<input type="submit" name="button3" value="Client"/>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="center">
							<a href="login.php"><h6>S'inscrire</h6></a>
						</td>
					</tr>
				</table>
			</form>
		</div>
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