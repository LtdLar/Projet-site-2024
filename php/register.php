<?php
require_once 'register.html';

//enregistre les champs remplis dans userlist
if(isset($_POST['send'])){
	$email = addslashes($_POST['E-mail']);
	$Username = addslashes($_POST['Username']);
	$Password = addslashes($_POST['Password']);
	$Hobby = addslashes($_POST['Hobby']);

	header('Location: /');

}