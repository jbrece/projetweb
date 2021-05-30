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
//Ajouter un client 
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
include("pageclient.php");
//fermer la connexion
mysqli_close($db_handle);
?>
