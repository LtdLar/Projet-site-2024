
<?php
if(isset($_POST['submit'])){
	$nom= filter_input(INPUT_POST, "nom");
    $prenom = filter_input(INPUT_POST, "prenom");
    $sujet = filter_input(INPUT_POST, "sujet");
    $email = filter_input(INPUT_POST, "email");
	
	$output= array(
		'nom' => $nom,
		'prenom' => $prenom,
		'sujet' => $sujet,
		'email' => $email,
	);
		
	$file= fopen("data.csv","w"); #FOPEN marche pas ??
   
	
	
	$delimiter=",";

    fputcsv($file,$output);
	
	fclose($file);
	
		

}


?>

<html lang=fr> 

<h1> Coucou c'est un formulaire</h1>

<form name="inscription" method="post" action="">

 <h3> F.A.Q </h3>
 <h4 text-align="center"> Posez votre question ici</h4>
 <div class="div1">
    Votre Nom
  </div>
        <div class="div2">
            <input type="text" name="nom" class="champ" />
        </div>
    <br />
 <div class="div1">
    Votre Prénom
    </div>
        <div class="div2">
            <input type="text" name="prenom" class="champ" />
        </div><br />
 <div class="div1">
    Intitulé de la demande
    </div>
        <div class="div2">
            <input type="text" name="prenom" class="champ" maxlength="40"/>
        </div><br />
 <div class="div1">
    Votre Email
    </div>
        <div class="div2">
            <input type="text" name="email" class="champ" />
        </div><br />
 <div class="div2">
        <textarea name="textarea" rows="10" cols="50" placeholder="Racontez-nous tout..." class="champ2"></textarea>
    </div>
	 <input type="submit" name="submit" value="Submit">
	
    
    </form>


</html>