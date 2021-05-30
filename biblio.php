<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML 
$titre = isset($_POST["titre"])? $_POST["titre"] : "";
$auteur = isset($_POST["auteur"])? $_POST["auteur"] : "";
$annee = isset($_POST["annee"])? $_POST["annee"] : "";
$editeur = isset($_POST["editeur"])? $_POST["editeur"] : "";
//identifier votre BDD
$database = "livres2019";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', 'root');
$db_found = mysqli_select_db($db_handle, $database);
//Partie 1: Rechercher un livre 
//*****************************
if (isset($_POST["button1"])) {
  if ($db_found) {
    $sql = "SELECT * FROM books";
    if ($titre != "") {
    //on cherche le livre avec les paramètres titre et auteur 
      $sql .= " WHERE Titre LIKE '%$titre%'";
      if ($auteur != "") {
        $sql .= " AND Auteur LIKE '%$auteur%'";
      } 
    }
    $result = mysqli_query($db_handle, $sql);
    //regarder s'il y a de résultat
    if (mysqli_num_rows($result) == 0) {
       //le livre recherché n'existe pas
       echo "Book not found";
    } else {
       //on trouve le livre recherché
        while ($data = mysqli_fetch_assoc($result)) {
          echo "ID: " . $data['ID'] . "<br>";
          echo "Titre: " . $data['Titre'] . "<br>";
          echo "Auteur: " . $data['Auteur'] . "<br>";
          echo "Année: " . $data['Annee'] . "<br>";
          echo "Editeur: " . $data['Editeur'] . "<br>";
          echo "<br>";
        } 
      }
  } else {
      echo "Database not found";
    } 
}
//Partie 2: Ajouter un livre 
//*****************************
if (isset($_POST["button2"])) {
  if ($db_found) {
    $sql = "SELECT * FROM books";
    if ($titre != "") {
    //on cherche le livre avec les paramètres titre et auteur 
      $sql .= " WHERE Titre LIKE '%$titre%'";
      if ($auteur != "") {
        $sql .= " AND Auteur LIKE '%$auteur%'";
      } 
    }
    $result = mysqli_query($db_handle, $sql);
    //regarder s'il y a de résultat
    if (mysqli_num_rows($result) != 0) {
       //le livre est déjà dans la BDD
       echo "Book already exists. Duplicate of book of same title and author not allowed.";
    } else {
        $sql = "INSERT INTO books(Titre, Auteur, Annee, Editeur) VALUES('$titre', '$auteur', '$annee', '$editeur')";
        $result = mysqli_query($db_handle, $sql);
        echo "Add successful." . "<br>";
        //on affiche le livre ajouté
        $sql = "SELECT * FROM books";
        if ($titre != "") {
        //on cherche le livre avec les paramètres titre et auteur 
          $sql .= " WHERE Titre LIKE '%$titre%'";
          if ($auteur != "") {
              $sql .= " AND Auteur LIKE '%$auteur%'";
          }
        }
        $result = mysqli_query($db_handle, $sql);
        while ($data = mysqli_fetch_assoc($result)) {
          echo "Informations sur le livre ajouté:" . "<br>";
          echo "ID: " . $data['ID'] . "<br>";
          echo "Titre: " . $data['Titre'] . "<br>";
          echo "Auteur: " . $data['Auteur'] . "<br>";
          echo "Année: " . $data['Annee'] . "<br>";
          echo "Editeur: " . $data['Editeur'] . "<br>";
          echo "<br>";
        }
      } 
    } else {
              echo "Database not found";
      }
}
//Partie 3: Supprimer un livre 
//***************************** 
if (isset($_POST['button3'])) {
  if ($db_found) {
    $sql = "SELECT * FROM books";
    if ($titre != "") {
      $sql .= " WHERE Titre LIKE '%$titre%'"; 
      if ($auteur != "") {
        $sql .= " AND Auteur LIKE '%$auteur%'";
      }
    }
    $result = mysqli_query($db_handle, $sql);
    if (mysqli_num_rows($result) == 0) {
      //Livre inexistant
      echo "Cannot delete. Book not found. <br>"; 
    } else {
        while ($data = mysqli_fetch_assoc($result) ) { 
          $id = $data['ID'];
          echo "<br>"; 
        }
        $sql = "DELETE FROM books";
        $sql .= " WHERE ID = $id";
        $result = mysqli_query($db_handle, $sql); 
        echo "Delete successful. <br><br>";
        
        //on affiche les autres livres dans la BDD
        $sql = "SELECT * FROM books";
        $result = $result = mysqli_query($db_handle, $sql); 
        echo "Les livres dans notre bibliothèque: <br>"; 
        while ($data = mysqli_fetch_assoc($result)) {
          echo "ID: " . $data['ID'] . "<br>";
          echo "Titre: " . $data['Titre'] . "<br>"; 
          echo "Auteur: " . $data['Auteur'] . "<br>"; 
          echo "Année: " . $data['Annee'] . "<br>"; 
          echo "Editeur: " . $data['Editeur'] . "<br>"; 
          echo "<br>";
        } 
      }
  } else {
        echo "Database not found";
    }
}
//fermer la connexion
mysqli_close($db_handle);
?>