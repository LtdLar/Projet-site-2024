<DOCTYPE html>
<html>
<?php
require_once 'display-post.html';

//enregistre les champs remplis dans database
if(isset($_POST['save'])){
	$stars = addslashes($_POST['Stars']);
	$commentary = addslashes($_POST['Commentary']);
	$commentary_username = addslashes($_POST['Commentary_username']);

	header('Location: /');

}
?>
</html>