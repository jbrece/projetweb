<?php
	//recuperer les données venant de la page HTML
	//le parametre de $_POST = "name" de <input> de votre page HTML 
	//$id_item = isset($_POST["id_item"])? $_POST["id_item"] : "";
	$ID = isset($_POST["ID"])? $_POST["ID"] : "";
	$nom = isset($_POST["nom"])? $_POST["nom"] : "";
	$prix = isset($_POST["prix"])? $_POST["prix"] : "";
	$categorie = isset($_POST["categorie"])? $_POST["categorie"] : "";
	$image = "";
	$video = "video";
	$description = isset($_POST["description"])? $_POST["description"] : "";;
	$type_achat = isset($_POST["type"])? $_POST["type"] : "";
	$email_admin = "admin@ece.fr";
	$email_vendeur = " ";
	$mes1 = "";
	$mes2 = "";
	$trans= false;
	//identifier votre BDD
	$database = "projet";
	//connectez-vous dans votre BDD
	//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
	$db_handle = mysqli_connect('localhost', 'root', 'root');
	$db_found = mysqli_select_db($db_handle, $database);

	//Ajouter un objet 
	//*****************************
	if (isset($_POST["boutton3"])) {
		$trans = is_uploaded_file($_FILES['fic']['tmp_name']);
		if($nom!= "" && $prix != "" && $categorie != "" && $description!= "" && $type_achat != "" && $trans){
	    	//Le fichier a bien été reçu
	    	$image = file_get_contents($_FILES['fic']['tmp_name']);
	    	$sql = "INSERT INTO Item(ID_item, Nom, Prix, Type_achat, Categorie, Image, Video, Description, Email_admin, Email_vendeur) VALUES('$ID', '$nom', '$prix', '$type_achat', '$categorie', '".addslashes($image)."', '$video', '$description', '$email_admin', '$email_vendeur')";
	    	$result = mysqli_query($db_handle, $sql);
	    	$mes2 = "Article ajouté.";
	    	include("compteAdmin.php");
	   	}else{
	   		if(!$trans){
	   			$mes1 = "Probleme de transfert.";
	   		}
			$mes2 = "Veuillez remplir tous les champs (video facultative).";
			include("compteAdmin.php");
		}
	}       
	//fermer la connexion
	mysqli_close($db_handle);
?>