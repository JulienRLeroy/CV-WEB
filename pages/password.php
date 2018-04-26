<?php
if(isset($_SESSION['user'])) {
	return true;
} else {
	$_SESSION['error'] ="coucou";
}
?>

<form>
	<input type="password" name="pass" placeholder="Saisir un mot de passe">
	<input type="password" name="verif_pass" placeholder="Répéter votre mot de passe">
</form>