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
    <h1 class="title">Trombino-étu |</h1>
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

      <!-- -------formulaire d'inscription--------- -->
	<div class = "meteo-div">
	<br>
	<table align="center">
		<tbody id = "meteo">
		<tr>			
			<td width="80%">
				<fieldset class ="login">
					<legend><h2>Inscription</h2> </legend> 
					<div>
					
					<form  method="post" action="inscription.php">
						<p>Nom:  <br/> <input required  minlength="1" type="text" name="nom"/> </p>
						<p>Prénom: <br/> <input required  minlength="1" type="text" name="prenom"/> </p>
						<p>Email: <br/> <input required  minlength="5" type="email" name="email"/> </p>


						<p>Mot de passe: <br/> <input required  minlength="8" type="password" name="password"/> </p>
							
						<input type="submit" name="valider" value="valider"/>
						
						</div>		   
					</form>
					<br>
					<a href="formulaire_connexion.php"><span class="pw-oublie">Vous possedez deja un compte ?</span></a>
					</div>
				</fieldset>
			</td>
		</tr>
		</tbody>
	</table>
 </body>
</html>