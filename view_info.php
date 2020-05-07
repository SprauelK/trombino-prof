<!DOCTYPE html>
<html lang="fr">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Trombétu</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="image\favicon\pronote.png" />
    
</head>
<body>
<header>
    <div class="logo1">
    <img src="image\logo\logotrombino.png" height="57" width="57" alt=""/>
    </div>
    <h1>Trombino-prof |</h1>
    <nav>
  <a href="index.php" id="logo"></a>
        <ul>
            <li class="menu1"><a href="index.php">Accueil</a>
            </li>
            <li class="menu1"><a href="formulaire_inscription.php">Inscription</a>
            </li>
            <li class="menu1"><a href="view_info.php">Chercher un étudiant</a>     	
            </li>
        </ul>
    </nav>
</header>


<?php




$urlApi = "http://trombino-etu.alwaysdata.net/api_json.php?filliere=LPI-RIWS&groupe=C";


$appel = file_get_contents($urlApi);
$info = json_decode($appel, true);

echo "<div class ='meteo'>";

echo "<ul class='center'>";
echo "<li>";
echo "Les élèves de la filière et du groupe: ";
echo "<br>";
echo $info["nom"];
echo "</li>";
echo "<br>";
echo "<li class ='temp-actuel'>";
echo "Nom: ";
echo $info["etudiant"][0]["nom"];
echo "</li>";
echo "<li class ='temp-actuel'>";
echo "Prénom: ";
echo $info["etudiant"][0]["prenom"];
echo "</li>";
echo "<li class ='temp-actuel'>";
echo "Email: ";
echo $info["etudiant"][0]["email"];
echo "</li>";
echo "<li class ='temp-actuel'>";
echo "Numéro de téléphone: ";
echo $info["etudiant"][0]["telephone"];
echo "</li>";
echo "<li class ='temp-actuel'>";
echo "Adresse: ";
echo $info["etudiant"][0]["adresse"];
echo "</li>";
echo "</ul>";
echo "</div>";
echo "<br>";




echo "<div class ='meteo'>";


echo "<li class ='temp-actuel'>";
echo "Nom: ";
echo $info["etudiant"][1]["nom"];
echo "</li>";
echo "<li class ='temp-actuel'>";
echo "Prénom: ";
echo $info["etudiant"][1]["prenom"];
echo "</li>";
echo "<li class ='temp-actuel'>";
echo "Email: ";
echo $info["etudiant"][1]["email"];
echo "</li>";
echo "<li class ='temp-actuel'>";
echo "Numéro de téléphone: ";
echo $info["etudiant"][1]["telephone"];
echo "</li>";
echo "<li class ='temp-actuel'>";
echo "Adresse: ";
echo $info["etudiant"][1]["adresse"];
echo "</li>";
echo "</ul>";
echo"</div>";

?>


</body>
</html>