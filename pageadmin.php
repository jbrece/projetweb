<!DOCTYPE html>
<head>
	<title>ECE MarketPlace</title>
	<link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
	<meta charset="utf-8" />
</head>
<body>
	<div id="header">
		<p><?php echo $compte; ?><mark>Bienvenue sur ECE MarketPlace <?php echo $prenom; ?> <?= $nom ?>.</mark></p>
	</div>
	<div id="navigation1">
		<table>
			<tr>
				<td><img id="center" src="ecemarket.png" alt="logo principal" width= "150" height="100" /></td>
				<td align="center"><a class="onglet" href="pageadmin.php"><strong>Accueil</strong></a></td>
				<td align="center"><a class="onglet" href="parcourirAdmin.php"><strong>Tout parcourir</strong></a></td>
				<td align="center"><a class="onglet" href="notificationadmin.php"><strong>Notifications</strong></a></td>
				<td align="center"><a class="onglet" href="compteAdmin.php"><strong>Mon compte</a></strong></td>
			</tr>
		</table>
	</div>
	<div id="section">
	</div>
	<div id="footer">
		<p>Copyright &copy; 2021, ECE MarketPlace</p>
	</div>
</body>
</html>