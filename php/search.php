<!DOCTYPE html>
<html lang="fr">
<head>
</head>
<body>
<?php
//récupère searchvalue
if(isset($_POST['searchvalue'])){
	$searchvalue = $_POST['searchvalue'];
}

function get_target_in_csv(string $filename, string $target){
	// cible de recherche
	$target = strtolower($target);
	// ouverture de la Database
	$csv = fopen($filename, "r+");
	// liste des résultats
	$result=[];
	// pour ignorer la première ligne	
	$row = fgetcsv($csv);
	// vérifie chaque ligne
	while ($row = fgetcsv($csv)) {
		if (str_contains(strtolower($row[0]), $target)) {
			$result[] = $row;
		} else if (str_contains(strtolower($row[1]), $target)) {
			$result[] = $row;
		} else if (str_contains(strtolower($row[2]), $target)) {
			$result[] = $row;
		} else if (str_contains(strtolower($row[6]), $target)) {
			$result[] = $row;
		} else if (str_contains(strtolower($row[7]), $target)) {
			$result[] = $row;
		}
	}
	return $result;
}
?>
</body>
</html>