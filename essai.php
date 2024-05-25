<?php
// fichier qui s'accupe de l'inscript pour le fichier fanart2.html

// récupération des input, puisqu'ils sont required normallement ils sont là
$nom = isset($_POST["nom"])?$_POST["nom"] : "";
$url = isset($_POST["url"])?$_POST["url"] : "";
$email = isset($_POST["email"])?$_POST["email"] : "";
$textarea = isset($_POST["textarea"])?$_POST["textarea"] : "";

// fairer l'ajout dans le csv
// l'userlist.csv est bizarre avec les infos qu'on demande mais le gros est là
// header de Userlist.csv: "E-mail","Username","Password","Hobby"
$output = array(
    'email' => $email,
    'nom' => $nom,
    'prenom' => $url, // censé être password
    'sujet' => $textarea, // censé être hobby
);

// enregistre dans --------------> USERDB <-----------------
$file = fopen("UserDB.csv","w"); #FOPEN marche pas ??


// transforme l'array en string type csv
$result = fputcsv($file, $output));

// il me semble que fputcsv renvoie un bool si succès, donc check le succès
if ($result != true) {
    // affiche une erreur, mais peut aussi renvoyer une erreur dans le formulaire meme si c'est chiant (faut faire avec une session)
    // donc on l'affiche en raw avec echo
    echo "Erreur lors de l'inscrtiption.";
}

// ferme l'handle
fclose($file);
// redirige vers la page envoi
header("Location: /envoi.html");
