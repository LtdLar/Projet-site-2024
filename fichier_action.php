<?php 

// exemple de fichier action avec méthode POST

// vérif que on post avec un input avec l'attribut name input_name qui existe, ou met une valeu par défaut
$arg1 = isset($_POST["input_name"])?$_POST["input_name"] : "";

// code qui fait des trucs
// ....

// renvoie le résulat
echo $result;