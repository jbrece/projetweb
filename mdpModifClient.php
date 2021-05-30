<?php
$code= isset($_POST["mdp"])? $_POST["mdp"] : "";
$modif="";
//identification de BDD
$database = "projet";
//connexion a la BDD
$db_handle = mysqli_connect('localhost', 'root', 'root');
$db_found = mysqli_select_db($db_handle, $database);

if (isset($_POST["boutton"])) {
  if ($db_found) {
    if ($code != "") {
    //on cherche si le client a deja un compte avec les paramètres email et code
      $sql .= "UPDATE client SET Mdp = '$code' WHERE Email_client = 'client1@ece.fr'";
      $result = mysqli_query($db_handle, $sql);
      $modif ="Mot de passe modifié.";
      include("compteClient.php");
    }else {
      $modif="Saisissez le nouveau mot de passe.";
      include("compteClient.php");
    }
  }
}
//fermer la connexion
mysqli_close($db_handle);
?>