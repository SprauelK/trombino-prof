<?php

	//recuperation des paramètres login
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	

	$doesUserExist = FALSE;
	$fichier = "./data/liste_info_profs.csv";
	$lines = file($fichier);

	foreach ($lines as $line){
		if(strstr($line,$email)){

			$doesUserExist = TRUE;
			break;
		}
	}

	if( $doesUserExist == TRUE )
	{
	
			echo '<p>l email existe deja, veuillez <a href="index.php">vous connectez</a></p>';
		
		exit();  
	}

	else {
		$fichier_end = fopen($fichier,"a");
		fwrite($fichier_end,"\n");
		fwrite($fichier_end, $nom. ";" .$prenom. ";" .$email. ";" .$password);
		
		fclose($fichier_end);
		header('Location: ./index.php');
		exit();
	}

?>