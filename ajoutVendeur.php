<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML 
$email = isset($_POST["email"])? $_POST["email"] : "";
$code = isset($_POST["code"])? $_POST["code"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$telephone = isset($_POST["telephone"])? $_POST["telephone"] : "";
$adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
$compte ="";
//identifier votre BDD
$database = "projet";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
//Ajouter un vendeur 
//*****************************
if (isset($_POST["boutton"])) {
  if ($db_found) {
    $sql = "SELECT * FROM client";
    if ($email != "") {
    //on cherche si le client a deja un compte avec les paramètres email et code
      $sql .= " WHERE Email_client LIKE '%$email%'";
      if ($code != "") {
        $sql .= " AND Mdp LIKE '%$code%'";
      } 
    }
    $result = mysqli_query($db_handle, $sql);
    //regarder s'il y a de résultat
    if (mysqli_num_rows($result) != 0) {
       //le compte existe deja
    	$compte ="Le compte existe deja.";
       //echo "Le compte existe deja. Veuillez vous connectez en retournant sur la page du site";
    } else {
        $sql = "INSERT INTO client(Email_client, Mdp, Nom, Prenom, Adresse, Type_paiement, Telephone, Num_card, ID_item, ID_echange, ID_enchere) VALUES('$email', '$code', '$nom', '$prenom', '$adresse', ' ', '$telephone', ' ', '0', '0', '0')";
        $result = mysqli_query($db_handle, $sql);
        $compte ="Création de compte réussie.";
        
      } 
    } 
}
//fermer la connexion
mysqli_close($db_handle);
?>
<!DOCTYPE html>
<head>
	<title>ECE MarketPlace</title>
	<link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
	<meta charset="utf-8" />
</head>
<body>
	<div id="header">
		<p><?= $compte ?><mark>Bienvenue sur ECE MarketPlace <?= $nom ?>.</mark></p>
	</div>

	<div id="navigation1">
		<table align="center">
			<tr>
				<td align="center"><a href="accueil.html">Accueil</a></td>
				<td align="center"><a href="parcourir.html">Tout parcourir</a></td>
				<td align="center"><a href="notification.html">Notifications</a></td>
				<td align="center"><a href="panier.html"><img src="panierimg.jpg" alt="panier" width="50" height="50"/>Panier</a></td>
				<td align="center"><a href="compte.html">Mon compte</a></td>
			</tr>
		</table>
	</div>
	<div id="section">
		<img id="center" src="ecemarket.png" alt="logo principal" width= "auto" height="500" />
	</div>
	<div id="footer">
		<p>Copyright &copy; 2021, ECE MarketPlace</p>
	</div>
</body>
</html>