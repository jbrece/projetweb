<?php
	//recuperer les données venant de la page HTML
	$email = isset($_POST["email"])? $_POST["email"] : "";
	$compte ="";

	//identification de BDD
	$database = "projet";
	//connexion a la BDD

	$db_handle = mysqli_connect('localhost', 'root', 'root');
	$db_found = mysqli_select_db($db_handle, $database);

	//Supprimer un vendeur
	//*****************************
	if (isset($_POST["boutton"])) {
	    $sql = "SELECT * FROM vendeur";
	    if ($email != "") {
	    //on cherche si le vendeur est dans notre BDD
		    $sql .= " WHERE Email_vendeur LIKE '%$email%'";
		    $result1 = mysqli_query($db_handle, $sql);
	    	//regarder s'il y a du résultat
	    	if (mysqli_num_rows($result1) != 0) {
	        //suppression du compte
	    		$sql = "DELETE FROM vendeur WHERE Email_vendeur = '$email'";
	    		$result2 = mysqli_query($db_handle, $sql);
	    		$compte ="Le vendeur a bien été retiré.";
	    		include("supprVendeur.php");
	      	}else{
	   			$mes ="Ce vendeur n'a aucun compte.";
	   			include("supprVendeur.php");
	   		}	
		}else{
			$compte="Veuillez saisir l'email du compte du vendeur que vous voulez retirer.";
			include("supprVendeur.php");
	     }
	}
	//fermer la connexion
	 mysqli_close($db_handle);
?>
	

