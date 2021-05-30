

<!DOCTYPE html>
<head>
	<title>ECE MarketPlace_compte</title>
	<link href="style.css" rel="stylesheet" type="text/css" /> 
	<meta charset="utf-8" />
</head>
<body>
	<div id="header">
		<p>Bienvenue sur votre compte</p>
	</div>
	<div id="navigation1">
		<table>
			<tr>
				<td><img id="center" src="images/fond/ecemarket.png" alt="logo principal" width= "150" height="100" /></td>
				<td align="center"><a class="onglet" href="pageclient.php"><strong>Accueil</strong></a></td>
				<td align="center"><a class="onglet" href="parcourirClient.php"><strong>Tout parcourir</strong></a></td>
				<td align="center"><a class="onglet" href="notifClient.php"><strong>Notifications</strong></a></td>
				<td align="center"><a class="onglet" href="panierclient.php"><img src="images/fond/panierimg.jpg" alt="panier" width=40 height="40"/><strong>Panier</a></strong></td>
				<td align="center"><a class="onglet" href="compteClient.php"><strong>Mon compte</a></strong></td>
			</tr>
		</table>
	</div>
	<div id="navigation">
		<h4><u>Votre panier</u></h4>
	</div>
	<div id="wrapper">
		<form action="" method="post" enctype="multipart/form-data">
			<table width="99%" border="1" cellpadding = "5" cellspacing="5">
				<?php
					$id ="";
					$nom ="xxxxxx";
					$prix ="";
					$categorie ="";
					$image="";
					$video="";
					$description="";
					$type_achat="";
					$email_admin="";
					$email_vendeur="";


					$database = "projet";
					//connectez-vous dans votre BDD
					//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
					$db_handle = mysqli_connect('localhost', 'root', 'root');
					$db_found = mysqli_select_db($db_handle, $database);
					// afficher les articles séléctionnés par le client avec l'email saisi lors de sa connexion au site
					$sql = "SELECT * FROM Panier JOIN Item ON (Panier.Email_client LIKE '%client1@ece.fr%' AND Panier.ID_item = Item.ID_item)";
					$result = mysqli_query($db_handle, $sql);
					while($data = mysqli_fetch_array($result)){
						
						$id =$data['ID_item'];
				        $nom =$data['Nom'];
				        $prix =$data['Prix'];
				        $type_achat =$data['Type_achat'];
				        $categorie =$data['Categorie'];
						$image=$data['Image'];
						$video=$data['Video'];
						$description=$data['Description'];
						$email_admin=$data['Email_admin'];
						$email_vendeur=$data['Email_vendeur'];
						?>

						<tr>
							
							<td>
								<br><u>ID de l'Item:</u>
									<?php
										echo $id;
									?>	
								<br><br>
								<u>Nom:</u>
									<?php
										echo $nom;
									?>
								<br><br>
								<u>Prix:</u>
									<?php
										echo $prix." €";
									?>	
								<br><br>
								<u>Type d'achat:</u>
									<?php
										echo $type_achat;
									?>	
								<br><br>
								<u>Categorie de l'Item:</u>
									<?php
										echo $categorie;
									?>	
								<br><br>
								<u>Image:</u><br>
									<?php
										//echo $image;
										echo '<img src="data:image;base64,'.base64_encode($data['Image']).'"alt="" style="width: 200px; height: 200px;" >';
									?>
								<br><br>
								<u>Description de l'article:</u>
									<?php
										echo $description;
									?>	
								<br><br>
								<u>Email de l'admin:</u>
									<?php
										echo $email_admin;
									?>	
								<br><br>
								<u>Email du vendeur:</u>
									<?php
										echo $email_vendeur;
									?>
								<br><br>
							</td>
							<td align="center"><input type="submit" name="payer" value="Rertirer"/></td>
						</tr><br>
						<?php
					}
				?>
				
			</table>
		</form>
	</div>
	<div>
		<div id="navigation">
			<table align="center">
				<tr>
					<td>
						<h4><u>Total</u> : 
							<?php 
								$total=0;
								$prix ="";

								$database = "projet";
								// Connexion à la BDD
								$db_handle = mysqli_connect('localhost', 'root', 'root');
								$db_found = mysqli_select_db($db_handle, $database);
								// calcul du total des prix des articles du client (voir requête précédente)
								$sql = "SELECT * FROM Panier JOIN Item ON (Panier.Email_client LIKE '%client1@ece.fr%' AND Panier.ID_item = Item.ID_item)";
								//$sql2 = "SELECT SUM($sql) FROM table"
								$result = mysqli_query($db_handle, $sql);
								while($data = mysqli_fetch_array($result)){
							        $prix =$data['Prix'];
							        $total = $total+$prix;
								}
								echo $total;
								?> €
						</h4>
					</td>
					<td>
						<input type="submit" name="payer" value="Finaliser le payement"/>
					</td>
				</tr>
			</table>
		</div>
		<br>
	<div id="footer">
			<h6>Copyright &copy; 2021, ECE MarketPlace</h6>
			<h6>Contacts: </h6>
			<h6>Email: <u>admin@ece.fr</u></h6>
			<h6><img src="images/fond/tel.jpg" height="15" width="auto"/><u>+33 (0) 1 64 57 22 11</u></h6>
	</div>
	<?php
		mysqli_close($db_handle);
	?>
</body>
</html>