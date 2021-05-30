<?php
//recuperer les données venant de la page HTML
$email = isset($_POST["email"])? $_POST["email"] : "";
$code = isset($_POST["code"])? $_POST["code"] : "";
$confirm = isset($_POST["confirm"])? $_POST["confirm"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$telephone = isset($_POST["telephone"])? $_POST["telephone"] : "";
$adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
$clause = isset($_POST["clause"])? $_POST["clause"] : "";
$compte ="";
$mes ="";
$mes2 ="";
$mes3 ="";

//identification de BDD
$database = "projet";
//connexion a la BDD

$db_handle = mysqli_connect('localhost', 'root', 'root');
$db_found = mysqli_select_db($db_handle, $database);

//Ajouter un client 
//*****************************
if (isset($_POST["boutton"])) {
  if ($db_found) {
    if($email!= "" && $code != "" && $confirm != "" && $nom != "" && $prenom != "" && $telephone != ""&& $adresse != "" && $clause != ""){
        $sql = "SELECT * FROM client";
      if ($email != "") {
      //on cherche si le client a deja un compte avec les paramètres email et code
        $sql .= " WHERE Email_client LIKE '%$email%'";
        if ($code != "") {
          $sql .= " AND Mdp LIKE '%$code%'";
        } 
      }
      $result = mysqli_query($db_handle, $sql);
      //regarder s'il y a du résultat
      if (mysqli_num_rows($result) != 0) {
         //le compte existe deja
        //message a afficher 
      	$compte ="Le compte existe deja.";
        include("login.php");
      } elseif($code != $confirm){
          $mes="Confirmer votre mot de passe";
          include("login.php");
        } else {
            $sql = "INSERT INTO client(Email_client, Mdp, Nom, Prenom, Adresse, Type_paiement, Telephone, Num_card) VALUES('$email', '$code', '$nom', '$prenom', '$adresse', ' ', '$telephone', ' ')";
            $result = mysqli_query($db_handle, $sql);
            //message a afficher 
            $compte ="Création de compte réussie.";
            include("pageclient.php");
           } 
    }else {
      if($clause == ""){
        $mes3 = "Veuillez accepter la condition.";
      }
      $mes2 ="Veuillez remplir tous les champs. " . $mes3;
      include("login.php");
    }
  } 
}

//fermer la connexion
mysqli_close($db_handle);
?>