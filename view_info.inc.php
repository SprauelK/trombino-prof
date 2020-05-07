
<?php

function display_Api(){
$urlApi = "http://localhost/trombino-etu/api_json.php?filliere=LPI-RIWS&groupe=C";

//for "filière" display groupes
//for "groupe" display "name and photo élèves"
//if clique sur élèves
//alors display info élèves


$appel = file_get_contents($urlApi);
$info = json_decode($appel, true);


//for($i=0;$i<sizeof($lines);$i++)
}

?>

