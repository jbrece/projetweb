<?php
//recuperer les données venant de la page HTML
  $categorie = isset($_POST["categorie"])? $_POST["categorie"] : "";
  $type_achat = isset($_POST["type"])? $_POST["type"] : "";
  $valid = 0;

  $id = isset($_POST["ID"])? $_POST["ID"] : "";
  $nom = isset($_POST["nom"])? $_POST["nom"] : "";
  $prix = isset($_POST["prix"])? $_POST["prix"] : "";
  $categorie = isset($_POST["categorie"])? $_POST["categorie"] : "";
  $image = "";
  $video = "video";
  $description = isset($_POST["description"])? $_POST["description"] : "";;
  $type_achat = isset($_POST["type"])? $_POST["type"] : "";
  $email_admin = "admin@ece.fr";
  $email_vendeur = " ";

  $test = false;

  //identification de BDD
  $database = "projet";
  //connexion a la BDD
  $db_handle = mysqli_connect('localhost', 'root', '');
  $db_found = mysqli_select_db($db_handle, $database);

  if (isset($_POST["bouttonparcourir"])) {
    $valid = 0;
    if($categorie == 'scolaire' && $type_achat == 'immediat'){
      $sql = "SELECT * FROM item WHERE Categorie LIKE '%$categorie%' AND Type_achat LIKE '%$type_achat%'";
      $result1 = mysqli_query($db_handle, $sql);
      echo '<!DOCTYPE html>
                <head>
                  <title>ECE MarketPlace</title>
                  <link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
                  <meta charset="utf-8" />
                </head>
                <body>
                  <div id="header">
                    <p>Bienvenue sur ECE MarketPlace</p>
                  </div>
                    <?=>
                  <div id="navigation">
                    <p>Vos résultats de recherche selon les critères : Matériel scolaire et Achat immédiat.</p>
                  </div>
                  <div>';
      echo "<table border='1'>";
      echo "<tr>";
      echo "<th>"."ID"."</th>";
      echo "<th>"."Nom"."</th>";
      echo "<th>"."Description"."</th>";
      echo "<th>"."Catégorie"."</th>";
      echo "<th>"."Achat"."</th>";
      echo "<th>"."Image"."</th>";
      echo "<th>"."Prix"."</th>";
      echo "<th>"."Panier"."</th>";
      echo "</tr>";
      
      //affichage des resultats
      while($data = mysqli_fetch_assoc($result1)){
        echo "<tr>";
        echo "<td>".$data['ID_item']."</td>";
        echo "<td>".$data['Nom']."</td>";
        echo "<td>".$data['Description']."</td>";
        echo "<td>".$data['Categorie']."</td>";
        echo "<td>".$data['Type_achat']."</td>";
        echo '<td><img src="data:image;base64,'.base64_encode($data['Image']).'"alt="" style="width: auto; height: 125px;"/></td>';
        echo "<td>".$data['Prix']." €</td>";
        echo '<td align="center"><input type="submit" name="boutton" value="Ajouter"/></td>';
        if (isset($_POST["boutton"])) {
            $valid = 1;
            $id =$data['ID_item'];
            $nom =$data['Nom'];
            $prix =$data['Prix'];
            $type_achat =$data['Type_achat'];
            $categorie =$data['Categorie'];
            $image=$data['Image'];
            $video=$data['Video'];
            $description=$data['Description'];
            $email_admin=$data['Email_admin'];
            $email_vendeur=$data['Email_vendeur'];
            if ($valid == 1) {
                $sql = "INSERT INTO panier(`Email_client`, `ID_item`, `ID_echange`, `ID_enchere`) VALUES ('client1', '$id', '1', '1')";
                $res = mysqli_query($db_handle, $sql);
            }
            $valid = 0;
        }
        echo "</tr>";
            
      }//end while
      echo "</table>";
      echo '</div>
          <div id="footer">
            <h6>Copyright &copy; 2021, ECE MarketPlace</h6>
          </div>
        </body>
        </html>';
    }

    if($categorie == 'scolaire' && $type_achat == 'offre'){
      $sql = "SELECT * FROM item WHERE Categorie LIKE '%$categorie%' AND Type_achat LIKE '%$type_achat%'";
      $result1 = mysqli_query($db_handle, $sql);
      echo '<!DOCTYPE html>
                <head>
                  <title>ECE MarketPlace</title>
                  <link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
                  <meta charset="utf-8" />
                </head>
                <body>
                  <div id="header">
                    <p>Bienvenue sur ECE MarketPlace</p>
                  </div>
                    <?=>
                  <div id="navigation">
                    <p>Vos résultats de recherche selon les critères : Matériel scolaire et Meilleure offre.</p>
                  </div>
                  <div>';
      echo "<table border='1'>";
      echo "<tr>";
      echo "<th>"."ID"."</th>";
      echo "<th>"."Nom"."</th>";
      echo "<th>"."Description"."</th>";
      echo "<th>"."Catégorie"."</th>";
      echo "<th>"."Achat"."</th>";
      echo "<th>"."Image"."</th>";
      echo "<th>"."Prix"."</th>";
      echo "<th>"."Panier"."</th>";
      echo "</tr>";
      //affichage des resultats
      while($data = mysqli_fetch_assoc($result1)){
        echo "<tr>";
        echo "<td>".$data['ID_item']."</td>";
        echo "<td>".$data['Nom']."</td>";
        echo "<td>".$data['Description']."</td>";
        echo "<td>".$data['Categorie']."</td>";
        echo "<td>".$data['Type_achat']."</td>";
        echo '<td><img src="data:image;base64,'.base64_encode($data['Image']).'"alt="" style="width: auto; height: 125px;"/></td>';
        echo "<td>".$data['Prix']." €</td>";
        echo '<td align="center"><input type="submit" name="boutton" value="Ajouter"/></td>';
        if (isset($_POST["boutton"])) {
            $valid = 1;
            $id =$data['ID_item'];
            $nom =$data['Nom'];
            $prix =$data['Prix'];
            $type_achat =$data['Type_achat'];
            $categorie =$data['Categorie'];
            $image=$data['Image'];
            $video=$data['Video'];
            $description=$data['Description'];
            $email_admin=$data['Email_admin'];
            $email_vendeur=$data['Email_vendeur'];
            if ($valid == 1) {
                $sql = "INSERT INTO panier(`Email_client`, `ID_item`, `ID_echange`, `ID_enchere`) VALUES ('client1', '$id', '1', '1')";
                $res = mysqli_query($db_handle, $sql);
            }
            $valid = 0;
        }
        
        echo "</tr>";
      }//end while
      echo "</table>";
      echo '</div>
          <div id="footer">
            <h6>Copyright &copy; 2021, ECE MarketPlace</h6>
          </div>
        </body>
        </html>';
    } 

    if($categorie == 'scolaire' && $type_achat == 'transaction'){
      $sql = "SELECT * FROM item WHERE Categorie LIKE '%$categorie%' AND Type_achat LIKE '%$type_achat%'";
      $result1 = mysqli_query($db_handle, $sql);
      echo '<!DOCTYPE html>
                <head>
                  <title>ECE MarketPlace</title>
                  <link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
                  <meta charset="utf-8" />
                </head>
                <body>
                  <div id="header">
                    <p>Bienvenue sur ECE MarketPlace</p>
                  </div>
                    <?=>
                  <div id="navigation">
                    <p>Vos résultats de recherche selon les critères : Matériel scolaire et Transac Vendeur-Client.</p>
                  </div>
                  <div>';
      echo "<table border='1'>";
      echo "<tr>";
      echo "<th>"."ID"."</th>";
      echo "<th>"."Nom"."</th>";
      echo "<th>"."Description"."</th>";
      echo "<th>"."Catégorie"."</th>";
      echo "<th>"."Achat"."</th>";
      echo "<th>"."Image"."</th>";
      echo "<th>"."Prix"."</th>";
      echo "<th>"."Panier"."</th>";
      echo "</tr>";
      //affichage des resultats
      while($data = mysqli_fetch_assoc($result1)){
        echo "<tr>";
        echo "<td>".$data['ID_item']."</td>";
        echo "<td>".$data['Nom']."</td>";
        echo "<td>".$data['Description']."</td>";
        echo "<td>".$data['Categorie']."</td>";
        echo "<td>".$data['Type_achat']."</td>";
        echo '<td><img src="data:image;base64,'.base64_encode($data['Image']).'"alt="" style="width: auto; height: 125px;"/></td>';
        echo "<td>".$data['Prix']." €</td>";
        echo '<td align="center"><input type="submit" name="boutton" value="Ajouter"/></td>';
        if (isset($_POST["boutton"])) {
            $valid = 1;
            $id =$data['ID_item'];
            $nom =$data['Nom'];
            $prix =$data['Prix'];
            $type_achat =$data['Type_achat'];
            $categorie =$data['Categorie'];
            $image=$data['Image'];
            $video=$data['Video'];
            $description=$data['Description'];
            $email_admin=$data['Email_admin'];
            $email_vendeur=$data['Email_vendeur'];
            if ($valid == 1) {
                $sql = "INSERT INTO panier(`Email_client`, `ID_item`, `ID_echange`, `ID_enchere`) VALUES ('client1', '$id', '1', '1')";
                $res = mysqli_query($db_handle, $sql);
            }
            $valid = 0;
        }
        echo "</tr>";
      }//end while
      echo "</table>";
      echo '</div>
          <div id="footer">
            <h6>Copyright &copy; 2021, ECE MarketPlace</h6>
          </div>
        </body>
        </html>';
    } 

    if($categorie == 'vip' && $type_achat == 'immediat'){
      $sql = "SELECT * FROM item WHERE Categorie LIKE '%$categorie%' AND Type_achat LIKE '%$type_achat%'";
      $result1 = mysqli_query($db_handle, $sql);
      echo '<!DOCTYPE html>
                <head>
                  <title>ECE MarketPlace</title>
                  <link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
                  <meta charset="utf-8" />
                </head>
                <body>
                  <div id="header">
                    <p>Bienvenue sur ECE MarketPlace</p>
                  </div>
                    <?=>
                  <div id="navigation">
                    <p>Vos résultats de recherche selon les critères : Accéssoire VIP et Achat immédiat.</p>
                  </div>
                  <div>';
      echo "<table border='1'>";
      echo "<tr>";
      echo "<th>"."ID"."</th>";
      echo "<th>"."Nom"."</th>";
      echo "<th>"."Description"."</th>";
      echo "<th>"."Catégorie"."</th>";
      echo "<th>"."Achat"."</th>";
      echo "<th>"."Image"."</th>";
      echo "<th>"."Prix"."</th>";
      echo "<th>"."Panier"."</th>";
      echo "</tr>";
      //affichage des resultats
      while($data = mysqli_fetch_assoc($result1)){
        echo "<tr>";
        echo "<td>".$data['ID_item']."</td>";
        echo "<td>".$data['Nom']."</td>";
        echo "<td>".$data['Description']."</td>";
        echo "<td>".$data['Categorie']."</td>";
        echo "<td>".$data['Type_achat']."</td>";
        echo '<td><img src="data:image;base64,'.base64_encode($data['Image']).'"alt="" style="width: auto; height: 125px;"/></td>';
        echo "<td>".$data['Prix']." €</td>";
        echo '<td align="center"><input type="submit" name="boutton" value="Ajouter"/></td>';
        if (isset($_POST["boutton"])) {
            $valid = 1;
            $id =$data['ID_item'];
            $nom =$data['Nom'];
            $prix =$data['Prix'];
            $type_achat =$data['Type_achat'];
            $categorie =$data['Categorie'];
            $image=$data['Image'];
            $video=$data['Video'];
            $description=$data['Description'];
            $email_admin=$data['Email_admin'];
            $email_vendeur=$data['Email_vendeur'];
            if ($valid == 1) {
                $sql = "INSERT INTO panier(`Email_client`, `ID_item`, `ID_echange`, `ID_enchere`) VALUES ('client1', '$id', '1', '1')";
                $res = mysqli_query($db_handle, $sql);
            }
            $valid = 0;
        }
        echo "</tr>";
      }//end while
      echo "</table>";
      echo '</div>
          <div id="footer">
            <h6>Copyright &copy; 2021, ECE MarketPlace</h6>
          </div>
        </body>
        </html>';
    } 

    if($categorie == 'vip' && $type_achat == 'offre'){
      $sql = "SELECT * FROM item WHERE Categorie LIKE '%$categorie%' AND Type_achat LIKE '%$type_achat%'";
      $result1 = mysqli_query($db_handle, $sql);
      echo '<!DOCTYPE html>
                <head>
                  <title>ECE MarketPlace</title>
                  <link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
                  <meta charset="utf-8" />
                </head>
                <body>
                  <div id="header">
                    <p>Bienvenue sur ECE MarketPlace</p>
                  </div>
                    <?=>
                  <div id="navigation">
                    <p>Vos résultats de recherche selon les critères : Accéssoire VIP et Meilleure offre.</p>
                  </div>
                  <div>';
      echo "<table border='1'>";
      echo "<tr>";
      echo "<th>"."ID"."</th>";
      echo "<th>"."Nom"."</th>";
      echo "<th>"."Description"."</th>";
      echo "<th>"."Catégorie"."</th>";
      echo "<th>"."Achat"."</th>";
      echo "<th>"."Image"."</th>";
      echo "<th>"."Prix"."</th>";
      echo "<th>"."Panier"."</th>";
      echo "</tr>";
      //affichage des resultats
      while($data = mysqli_fetch_assoc($result1)){
        echo "<tr>";
        echo "<td>".$data['ID_item']."</td>";
        echo "<td>".$data['Nom']."</td>";
        echo "<td>".$data['Description']."</td>";
        echo "<td>".$data['Categorie']."</td>";
        echo "<td>".$data['Type_achat']."</td>";
        echo '<td><img src="data:image;base64,'.base64_encode($data['Image']).'"alt="" style="width: auto; height: 125px;"/></td>';
        echo "<td>".$data['Prix']." €</td>";
        echo '<td align="center"><input type="submit" name="boutton" value="Ajouter"/></td>';
        if (isset($_POST["boutton"])) {
            $valid = 1;
            $id =$data['ID_item'];
            $nom =$data['Nom'];
            $prix =$data['Prix'];
            $type_achat =$data['Type_achat'];
            $categorie =$data['Categorie'];
            $image=$data['Image'];
            $video=$data['Video'];
            $description=$data['Description'];
            $email_admin=$data['Email_admin'];
            $email_vendeur=$data['Email_vendeur'];
            if ($valid == 1) {
                $sql = "INSERT INTO panier(`Email_client`, `ID_item`, `ID_echange`, `ID_enchere`) VALUES ('client1', '$id', '1', '1')";
                $res = mysqli_query($db_handle, $sql);
            }
            $valid = 0;
        }
        echo "</tr>";
      }//end while
      echo "</table>";
      echo '</div>
          <div id="footer">
            <h6>Copyright &copy; 2021, ECE MarketPlace</h6>
          </div>
        </body>
        </html>';
    } 

    if($categorie == 'vip' && $type_achat == 'transaction'){
      $sql = "SELECT * FROM item WHERE Categorie LIKE '%$categorie%' AND Type_achat LIKE '%$type_achat%'";
      $result1 = mysqli_query($db_handle, $sql);
      echo '<!DOCTYPE html>
                <head>
                  <title>ECE MarketPlace</title>
                  <link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
                  <meta charset="utf-8" />
                </head>
                <body>
                  <div id="header">
                    <p>Bienvenue sur ECE MarketPlace</p>
                  </div>
                    <?=>
                  <div id="navigation">
                    <p>Vos résultats de recherche selon les critères : Accéssoire VIP et Transac Vendeur-Client.</p>
                  </div>
                  <div>';
      echo "<table border='1'>";
      echo "<tr>";
      echo "<th>"."ID"."</th>";
      echo "<th>"."Nom"."</th>";
      echo "<th>"."Description"."</th>";
      echo "<th>"."Catégorie"."</th>";
      echo "<th>"."Achat"."</th>";
      echo "<th>"."Image"."</th>";
      echo "<th>"."Prix"."</th>";
      echo "<th>"."Panier"."</th>";
      echo "</tr>";
      //affichage des resultats
      while($data = mysqli_fetch_assoc($result1)){
        echo "<tr>";
        echo "<td>".$data['ID_item']."</td>";
        echo "<td>".$data['Nom']."</td>";
        echo "<td>".$data['Description']."</td>";
        echo "<td>".$data['Categorie']."</td>";
        echo "<td>".$data['Type_achat']."</td>";
        echo '<td><img src="data:image;base64,'.base64_encode($data['Image']).'"alt="" style="width: auto; height: 125px;"/></td>';
        echo "<td>".$data['Prix']." €</td>";
        echo '<td align="center"><input type="submit" name="boutton" value="Ajouter"/></td>';
        if (isset($_POST["boutton"])) {
            $valid = 1;
            $id =$data['ID_item'];
            $nom =$data['Nom'];
            $prix =$data['Prix'];
            $type_achat =$data['Type_achat'];
            $categorie =$data['Categorie'];
            $image=$data['Image'];
            $video=$data['Video'];
            $description=$data['Description'];
            $email_admin=$data['Email_admin'];
            $email_vendeur=$data['Email_vendeur'];
            if ($valid == 1) {
                $sql = "INSERT INTO panier(`Email_client`, `ID_item`, `ID_echange`, `ID_enchere`) VALUES ('client1', '$id', '1', '1')";
                $res = mysqli_query($db_handle, $sql);
            }
            $valid = 0;
        }
        echo "</tr>";
      }//end while
      echo "</table>";
      echo '</div>
          <div id="footer">
            <h6>Copyright &copy; 2021, ECE MarketPlace</h6>
          </div>
        </body>
        </html>';
    } 

    if($categorie == 'meuble' && $type_achat == 'immediat'){
      $sql = "SELECT * FROM item WHERE Categorie LIKE '%$categorie%' AND Type_achat LIKE '%$type_achat%'";
      $result1 = mysqli_query($db_handle, $sql);
      echo '<!DOCTYPE html>
                <head>
                  <title>ECE MarketPlace</title>
                  <link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
                  <meta charset="utf-8" />
                </head>
                <body>
                  <div id="header">
                    <p>Bienvenue sur ECE MarketPlace</p>
                  </div>
                    <?=>
                  <div id="navigation">
                    <p>Vos résultats de recherche selon les critères : Meuble ou objet d art et Achat immédiat.</p>
                  </div>
                  <div>';
      echo "<table border='1'>";
      echo "<tr>";
      echo "<th>"."ID"."</th>";
      echo "<th>"."Nom"."</th>";
      echo "<th>"."Description"."</th>";
      echo "<th>"."Catégorie"."</th>";
      echo "<th>"."Achat"."</th>";
      echo "<th>"."Image"."</th>";
      echo "<th>"."Prix"."</th>";
      echo "<th>"."Panier"."</th>";
      echo "</tr>";
      //affichage des resultats
      while($data = mysqli_fetch_assoc($result1)){
        echo "<tr>";
        echo "<td>".$data['ID_item']."</td>";
        echo "<td>".$data['Nom']."</td>";
        echo "<td>".$data['Description']."</td>";
        echo "<td>".$data['Categorie']."</td>";
        echo "<td>".$data['Type_achat']."</td>";
        echo '<td><img src="data:image;base64,'.base64_encode($data['Image']).'"alt="" style="width: auto; height: 125px;"/></td>';
        echo "<td>".$data['Prix']." €</td>";
        echo '<td align="center"><input type="submit" name="boutton" value="Ajouter"/></td>';
        if (isset($_POST["boutton"])) {
            $valid = 1;
            $id =$data['ID_item'];
            $nom =$data['Nom'];
            $prix =$data['Prix'];
            $type_achat =$data['Type_achat'];
            $categorie =$data['Categorie'];
            $image=$data['Image'];
            $video=$data['Video'];
            $description=$data['Description'];
            $email_admin=$data['Email_admin'];
            $email_vendeur=$data['Email_vendeur'];
            if ($valid == 1) {
                $sql = "INSERT INTO panier(`Email_client`, `ID_item`, `ID_echange`, `ID_enchere`) VALUES ('client1', '$id', '1', '1')";
                $res = mysqli_query($db_handle, $sql);
            }
            $valid = 0;
        }
        echo "</tr>";
      }//end while
      echo "</table>";
      echo '</div>
          <div id="footer">
            <h6>Copyright &copy; 2021, ECE MarketPlace</h6>
          </div>
        </body>
        </html>';
    } 

    if($categorie == 'meuble' && $type_achat == 'offre'){
      $sql = "SELECT * FROM item WHERE Categorie LIKE '%$categorie%' AND Type_achat LIKE '%$type_achat%'";
      $result1 = mysqli_query($db_handle, $sql);
      echo '<!DOCTYPE html>
                <head>
                  <title>ECE MarketPlace</title>
                  <link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
                  <meta charset="utf-8" />
                </head>
                <body>
                  <div id="header">
                    <p>Bienvenue sur ECE MarketPlace</p>
                  </div>
                    <?=>
                  <div id="navigation">
                    <p>Vos résultats de recherche selon les critères : Meuble ou objet d art et Meilleure offre.</p>
                  </div>
                  <div>';
      echo "<table border='1'>";
      echo "<tr>";
      echo "<th>"."ID"."</th>";
      echo "<th>"."Nom"."</th>";
      echo "<th>"."Description"."</th>";
      echo "<th>"."Catégorie"."</th>";
      echo "<th>"."Achat"."</th>";
      echo "<th>"."Image"."</th>";
      echo "<th>"."Prix"."</th>";
      echo "<th>"."Panier"."</th>";
      echo "</tr>";
      //affichage des resultats
      while($data = mysqli_fetch_assoc($result1)){
        echo "<tr>";
        echo "<td>".$data['ID_item']."</td>";
        echo "<td>".$data['Nom']."</td>";
        echo "<td>".$data['Description']."</td>";
        echo "<td>".$data['Categorie']."</td>";
        echo "<td>".$data['Type_achat']."</td>";
        echo '<td><img src="data:image;base64,'.base64_encode($data['Image']).'"alt="" style="width: auto; height: 125px;"/></td>';
        echo "<td>".$data['Prix']." €</td>";
        echo '<td align="center"><input type="submit" name="boutton" value="Ajouter"/></td>';
        if (isset($_POST["boutton"])) {
            $valid = 1;
            $id =$data['ID_item'];
            $nom =$data['Nom'];
            $prix =$data['Prix'];
            $type_achat =$data['Type_achat'];
            $categorie =$data['Categorie'];
            $image=$data['Image'];
            $video=$data['Video'];
            $description=$data['Description'];
            $email_admin=$data['Email_admin'];
            $email_vendeur=$data['Email_vendeur'];
            if ($valid == 1) {
                $sql = "INSERT INTO panier(`Email_client`, `ID_item`, `ID_echange`, `ID_enchere`) VALUES ('client1', '$id', '1', '1')";
                $res = mysqli_query($db_handle, $sql);
            }
            $valid = 0;
        }
        echo "</tr>";
      }//end while
      echo "</table>";
      echo '</div>
          <div id="footer">
            <h6>Copyright &copy; 2021, ECE MarketPlace</h6>
          </div>
        </body>
        </html>';
    } 

    if($categorie == 'meuble' && $type_achat == 'transaction'){
      $sql = "SELECT * FROM item WHERE Categorie LIKE '%$categorie%' AND Type_achat LIKE '%$type_achat%'";
      $result1 = mysqli_query($db_handle, $sql);
      echo '<!DOCTYPE html>
                <head>
                  <title>ECE MarketPlace</title>
                  <link href="stylecompte.css" rel="stylesheet" type="text/css" /> 
                  <meta charset="utf-8" />
                </head>
                <body>
                  <div id="header">
                    <p>Bienvenue sur ECE MarketPlace</p>
                  </div>
                    <?=>
                  <div id="navigation">
                    <p>Vos résultats de recherche selon les critères : Meuble ou objet d art et Transac Vendeur-Client.</p>
                  </div>
                  <div>';
      echo "<table border='1'>";
      echo "<tr>";
      echo "<th>"."ID"."</th>";
      echo "<th>"."Nom"."</th>";
      echo "<th>"."Description"."</th>";
      echo "<th>"."Catégorie"."</th>";
      echo "<th>"."Achat"."</th>";
      echo "<th>"."Image"."</th>";
      echo "<th>"."Prix"."</th>";
      echo "<th>"."Panier"."</th>";
      echo "</tr>";
      //affichage des resultats
      while($data = mysqli_fetch_assoc($result1)){
        echo "<tr>";
        echo "<td>".$data['ID_item']."</td>";
        echo "<td>".$data['Nom']."</td>";
        echo "<td>".$data['Description']."</td>";
        echo "<td>".$data['Categorie']."</td>";
        echo "<td>".$data['Type_achat']."</td>";
        echo '<td><img src="data:image;base64,'.base64_encode($data['Image']).'"alt="" style="width: auto; height: 125px;"/></td>';
        echo "<td>".$data['Prix']." €</td>";
        echo '<td align="center"><input type="submit" name="boutton" value="Ajouter"/></td>';
        if (isset($_POST["boutton"])) {
            $valid = 1;
            $id =$data['ID_item'];
            $nom =$data['Nom'];
            $prix =$data['Prix'];
            $type_achat =$data['Type_achat'];
            $categorie =$data['Categorie'];
            $image=$data['Image'];
            $video=$data['Video'];
            $description=$data['Description'];
            $email_admin=$data['Email_admin'];
            $email_vendeur=$data['Email_vendeur'];
            if ($valid == 1) {
                $sql = "INSERT INTO panier(`Email_client`, `ID_item`, `ID_echange`, `ID_enchere`) VALUES ('client1', '$id', '1', '1')";
                $res = mysqli_query($db_handle, $sql);
            }
            $valid = 0;
        }
        echo "</tr>";
      }//end while
      echo "</table>";
      echo '</div>
          <div id="footer">
            <h6>Copyright &copy; 2021, ECE MarketPlace</h6>
          </div>
        </body>
        </html>';
    }

  }
  //fermer la connexion
  mysqli_close($db_handle);
?>