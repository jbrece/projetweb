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
      $sql .= "UPDATE administrateur SET Mdp = '$code' WHERE Email_admin = 'admin@ece.fr'";
      $result = mysqli_query($db_handle, $sql);
      $modif ="Mot de passe modifié.";
      include("compteAdmin.php");
    }else {
      $modif="Saisissez le nouveau mot de passe.";
      include("compteAdmin.php");
    }
  }
}
//fermer la connexion
mysqli_close($db_handle);
?>