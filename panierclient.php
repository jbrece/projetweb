	

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
				<td align="center"><a class="onglet" href="parcourirClient.php"><strong>Tout parcourir</strong></a></td>
				<td align="center"><a class="onglet" href="notificationclient.php"><strong>Notifications</strong></a></td>
				<td align="center"><a class="onglet" href="panierclient.php"><img src="panierimg.jpg" alt="panier" width=40 height="40"/><strong>Panier</a></strong></td>
				<td align="center"><a class="onglet" href="compteClient.php"><strong>Mon compte</a></strong></td>
			</tr>
		</table>
	</div>
	<div id="navigation">
		<h4><u>Panier du Client</u></h4>
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
					$db_handle = mysqli_connect('localhost', 'root', '');
					$db_found = mysqli_select_db($db_handle, $database);
					// afficher les articles séléctionnés par le client avec l'email saisi lors de sa connexion au site
					$sql = "SELECT * FROM panier JOIN item ON (panier.Email_client LIKE '%client1%' AND panier.ID_item = item.ID_item)";
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
										echo $prix;
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
								<u>Video:</u>
									<?php
										echo $video;
									?>
								<br><br>
								<u>description de l'article:</u>
									<?php
										echo $description;
									?>	
								<br><br>
								<u>email de l'admin:</u>
									<?php
										echo $email_admin;
									?>	
								<br><br>
								<u>email du vendeur:</u>
									<?php
										echo $email_vendeur;
									?>
								<br><br>
							</td>
						</tr><br>
						
						<?php
					}
				?>
				
			</table>
		</form>
	</div>
	<div>
		<div id="navigation">
			<h4><u>Total</u> : 
				<?php 
					$total=0;
					$prix ="";

					$database = "projet";
					// Connexion à la BDD
					$db_handle = mysqli_connect('localhost', 'root', '');
					$db_found = mysqli_select_db($db_handle, $database);
					// calcul du total des prix des articles du client (voir requête précédente)
					$sql = "SELECT * FROM panier JOIN item ON (panier.Email_client LIKE '%client1%' AND panier.ID_item = item.ID_item)";
					//$sql2 = "SELECT SUM($sql) FROM table"
					$result = mysqli_query($db_handle, $sql);
					while($data = mysqli_fetch_array($result)){
				        $prix =$data['Prix'];
				        $total = $total+$prix;
					}
					echo $total;
					?> €
			</h4><br>
			<input style="height:50px; width:250px;" type="submit" name="payer" value="Finaliser le payement"/>
		</div>
		<br>
	<div id="footer">
			<p>Copyright &copy; 2021, ECE MarketPlace</p>
	</div>
	<?php
		mysqli_close($db_handle);
	?>
</body>
</html>