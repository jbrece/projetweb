<!DOCTYPE html>
<head>
	<title>ECE MarketPlace</title>
	<link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
	<meta charset="utf-8" />
</head>
<body>
	<div id="header">
		<p>Bienvenue sur ECE MarketPlace <?php //echo $prenom; ?> <?php //echo $nom; ?></p>
	</div>
	<div id="navigation">
	</div>
	<div id="section">
		<div id="wrapper">
			<table>
				<tr>
					<td>
						<img src="ecemarket.png" alt="logo principal" width= "auto" height="100" />
					</td>
					<td><?php //echo $connexion; ?></td>
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
	</div>
	<div id="footer">
		<h6>Copyright &copy; 2021, ECE MarketPlace</h6>
	</div>
</body>
</html>