<!DOCTYPE html>
<html lang="fr">
<head>
</head>
<body>
<?php
//récupère searchvalue
if(isset($_POST['send'])){
	$send = $_POST['send'];
}

function get_target_in_csv(string $filename, string $target1, string $target2){
	// cible de recherche
	$email = $target1;
    $password = $target2;
	// ouverture de la Database Userlist
	$csv = fopen($filename, "r+");
	// pour ignorer la première ligne	
	$row = fgetcsv($csv);
	// vérifie chaque ligne pour chercher les noms d'utilisateur et mot de passe
	while ($row = fgetcsv($csv)) {
		if ((str_contains($row[0], $email)) && (str_contains($row[2], $password))) {
			$result = true;
        }
        else{ 
			$result = false;
        }
	}
	return $result;
}
?>
</body>
</html>

