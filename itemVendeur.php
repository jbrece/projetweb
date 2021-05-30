<?php
	//recuperer les données venant de la page HTML
	$ID = isset($_POST["ID"])? $_POST["ID"] : "";
	$nom = isset($_POST["nom"])? $_POST["nom"] : "";
	$prix = isset($_POST["prix"])? $_POST["prix"] : "";
	$categorie = isset($_POST["categorie"])? $_POST["categorie"] : "";
	$image = "";
	$video = "video";
	$description = isset($_POST["description"])? $_POST["description"] : "";;
	$type_achat = isset($_POST["type"])? $_POST["type"] : "";
	$email_admin = " ";
	$email_vendeur = "vendeur@ece.fr";
	$mes1 = "";
	$mes2 = "";
	$trans= false;
	//identification de BDD
	$database = "projet";
	//connexion a la BDD
	$db_handle = mysqli_connect('localhost', 'root', 'root');
	$db_found = mysqli_select_db($db_handle, $database);

	//Ajouter un article
	//*****************************
	if (isset($_POST["boutton3"])) {
		$trans = is_uploaded_file($_FILES['fic']['tmp_name']);
		if($ID!= "" && $nom != "" && $prix != "" && $categorie != "" && $description!= "" && $type_achat != "" && $trans == true){
	    //on cherche si le vendeur est dans notre BDD
	    	$sql = "SELECT * FROM Item";
		    $sql .= " WHERE ID_item LIKE '%$ID%'";
		    $result = mysqli_query($db_handle, $sql);
	    	//regarder s'il y a du résultat
	    	if (mysqli_num_rows($result) != 0) {
	      		$mes="Numéro d'identification déjà utilisé.";
	    		include("compteVendeur.php");
	      	}else{
		    	//Le fichier a bien été reçu
		    	$image = file_get_contents($_FILES['fic']['tmp_name']);
		    	$sql = "INSERT INTO Item(ID_item, Nom, Prix, Type_achat, Categorie, Image, Video, Description, Email_admin, Email_vendeur) VALUES('$ID', '$nom', '$prix', '$type_achat', '$categorie', '".addslashes($image)."', '$video', '$description', '$email_admin', '$email_vendeur')";
		    	$result2 = mysqli_query($db_handle, $sql);
		    	$mes2 = "Article ajouté.";
		    	include("compteVendeur.php");
	   		}
		} else{
	   		if(!$trans){
	   			$mes1 = "Probleme de transfert.";
	   		}
	   		$mes3="Veuillez remplir tous les champs.";
			include("compteVendeur.php");
		}
	}             
	//fermer la connexion
	mysqli_close($db_handle);
?>