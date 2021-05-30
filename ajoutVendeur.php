<?php
	//recuperer les données venant de la page HTML
	$email = isset($_POST["email"])? $_POST["email"] : "";
	$code = isset($_POST["code"])? $_POST["code"] : "";
	$confirm= isset($_POST["confirm"])? $_POST["confirm"] : "";
	$nom = isset($_POST["nom"])? $_POST["nom"] : "";
	$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
	$image ="";
	$photo="";
	$mes1 = "";
	$mes2 = "";
	$mes3="";
	$mes4="";
	$trans1= false;
	$trans2= false;
	$compte ="";


	//identification de  BDD
	$database = "projet";
	//connexion a la BDD

	$db_handle = mysqli_connect('localhost', 'root', 'root');
	$db_found = mysqli_select_db($db_handle, $database);

	//Ajouter un vendeur
	//*****************************
	if (isset($_POST["boutton"])) {
		$trans1 = is_uploaded_file($_FILES['fic1']['tmp_name']);
		$trans2 = is_uploaded_file($_FILES['fic2']['tmp_name']);
	    if($email!= "" && $code != "" && $nom != "" && $prenom != "" && $trans1 == true && $trans2 == true) {
	    	$sql = "SELECT * FROM vendeur";
	    	if ($email != "") {
			    //on cherche si le vendeur a deja un compte avec les paramètres email et code
			    $sql .= " WHERE Email_vendeur LIKE '%$email%'";
			    if ($code != "") {
			        $sql .= " AND Mdp LIKE '%$code%'";
			    } 
			}
			$result1 = mysqli_query($db_handle, $sql);
			//regarder s'il y a de résultat
			if(mysqli_num_rows($result1) != 0) {
			//le compte existe deja
			  	$compte ="Ce vendeur a deja un compte.";
			   	include("logVendeur.php");
			} elseif($code != $confirm){
			    $mes4="Confirmer votre mot de passe";
			    include("logVendeur.php");
				} else {
				    //Le fichier a bien été reçu
				    $photo = file_get_contents($_FILES['fic1']['tmp_name']);
				    $image = file_get_contents($_FILES['fic2']['tmp_name']);
				    $sql = "INSERT INTO vendeur(Email_vendeur, Mdp, Nom, Prenom, Photo, Image, ID_echange) VALUES('$email', '$code', '$nom', '$prenom', '".addslashes($photo)."', '".addslashes($image)."', '0')";
				    	$result = mysqli_query($db_handle, $sql);
				    $mes2 = "Le vendeur a été ajouté.";
				    include("logVendeur.php");
				   	} 
	    } else {
	    	$mes2 = "Veuillez remplir tous les champs.";
	    	if(!$trans1){
				$mes1 = "Probleme de transfert.";
			}
			if(!$trans2){
				$mes3 = "Probleme de transfert.";
			}
			include("logVendeur.php");
	    }  
	}
	//fermer la connexion
	 mysqli_close($db_handle);
?>
	

