<DOCTYPE html>
<html>
<?php
require_once 'get_new_post.html';

//enregistre les champs remplis dans database	
if(isset($_POST['save'])){
	$title = addslashes($_POST['Post_title']);
	$username = addslashes($_POST['Poster_username']);
	$content = addslashes($_POST['Content']);
	$stars = "";
	$commentary = "";
	$commentary_username = "";
	$keyword = addslashes($_POST['keyword']);
	$category = addslashes($_POST['category']);

	header('Location: /');

}
?>
</html>