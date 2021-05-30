<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML 
$email = isset($_POST["email"])? $_POST["email"] : "";
$code = isset($_POST["code"])? $_POST["code"] : "";
$connexion ="";
$nom ="";
$prenom ="";
$telephone="";
$adresse="";
$compte ="";
//identification de votre BDD
$database = "projet";
//connexion a la BDD
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

//Partie 1:Connexion administrateur 
//*****************************
if (isset($_POST["button1"])) {
  if ($db_found) {
    $sql = "SELECT * FROM administrateur";
    if ($email != "") {
    //on cherche si l'admin a deja un compte avec les paramètres email et code
      $sql .= " WHERE Email_admin LIKE '%$email%'";
      if ($code != "") {
        $sql .= " AND Mdp LIKE '%$code%'";
      } 
    }
    $result1 = mysqli_query($db_handle, $sql);
    //regarder s'il y a de résultat
    if (mysqli_num_rows($result1) != 0) {
      $compte ="Connection réussie.";
      while($data = mysqli_fetch_assoc($result1)){
        $nom =$data['Nom'];
        $prenom =$data['Prenom'];
      }
      include("pageadmin.php");
      //Le compte existe deja. Veuillez vous connectez en retournant sur la page du site";
    } else {
        $connexion ="Email invalide ou code erroné.";
        include("pageweb.php");
      } 
    } 
}
//Partie 2:Connexion vendeur 
//*****************************
elseif (isset($_POST["button2"])) {
  if ($db_found) {
    $sql = "SELECT * FROM vendeur";
    if ($email != "") {
    //on cherche si le vendeur a deja un compte avec les paramètres email et code
      $sql .= " WHERE Email_vendeur LIKE '%$email%'";
      if ($code != "") {
        $sql .= " AND Mdp LIKE '%$code%'";
      } 
    }
    $result2 = mysqli_query($db_handle, $sql);
    //regarder s'il y a de résultat
    if (mysqli_num_rows($result2) != 0) {
      $compte ="Connection réussie.";
      while($data = mysqli_fetch_assoc($result2)){
        $nom =$data['Nom'];
        $prenom =$data['Prenom'];
      }
      include("pagevendeur.php");
      //Le compte existe deja. Veuillez vous connectez en retournant sur la page du site";
    } else {
        $connexion ="Email invalide ou code erroné.";
        include("pageweb.php");
      } 
    } 
}
//Partie 3:Connexion client 
//*****************************
else {
  if ($db_found) {
    $sql = "SELECT * FROM client";
    if ($email != "") {
    //on cherche si le client a deja un compte avec les paramètres email et code
      $sql .= " WHERE Email_client LIKE '%$email%'";
      if ($code != "") {
        $sql .= " AND Mdp LIKE '%$code%'";
      } 
    }
    $result3 = mysqli_query($db_handle, $sql);
    //regarder s'il y a de résultat
    if (mysqli_num_rows($result3) != 0) {
      $compte ="Connection réussie.";
      while($data = mysqli_fetch_assoc($result3)){
        $email =$data['Email_client'];
        $code =$data['Mdp'];
        $nom =$data['Nom'];
        $prenom =$data['Prenom'];
        $adresse =$data['Adresse'];
        $telephone =$data['Telephone'];
      }
      include("pageclient.php");
      //Le compte existe deja. Veuillez vous connectez en retournant sur la page du site";
    } else {
        $connexion ="Email invalide ou code erroné.";
        include("pageweb.php");
      } 
    } 

}
//fermer la connexion
mysqli_close($db_handle);
?>