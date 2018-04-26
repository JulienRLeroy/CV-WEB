<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once("include.php");

if(isset($_POST['submit_contact'])) {
	
	$name = $_POST['name'];
	$nickname = $_POST['nickname'];
	$company = $_POST['company'];
	$reason = $_POST['reason'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$message = $_POST['message'];
	// $id_user = strtoupper($name) . "_" . strtoupper($nickname);
	

	if(empty($name)) {
		
		$_SESSION['error'] = "Vous n'avez pas renseigné de nom..";
		Header("Location: ../?p=contact");
		
	} else if (empty($nickname)) {
		
		$_SESSION['error'] = "Vous n'avez pas renseigné de prénom..";
		Header("Location: ../?p=contact");
		
	} else if (empty($company)) {
		
		$_SESSION['error'] = "Vous n'avez pas renseigné d'entreprise..";
		Header("Location: ../?p=contact");
		
	} else if (empty($reason)) {
		
		$_SESSION['error'] = "Vous n'avez pas renseigné la raison de votre demande de contact..";
		Header("Location: ../?p=contact");
		
	} else if (empty($tel)) {
		
		$_SESSION['error'] = "Vous n'avez pas renseigné de numéro de téléphone";
		Header("Location: ../?p=contact");
		
	} else if (empty($email)) {
		
		$_SESSION['error'] = "Vous n'avez pas renseigné d'adresse mail";
		Header("Location: ../?p=contact");
		
	} else if (empty($message)) {
		
		$_SESSION['error'] = "Vous n'avez renseigné aucun message..";
		Header("Location: ../?p=contact");
		
	} else {
		
		$methodUser = new User_controller();
		if($methodUser->getUserExist($id_user, $email)) { //si true alors dégage

			$_SESSION['error'] = "Il semble que vous ayez déjà remplis le formulaire de contact, connectez-vous ".$id_user."";
			Header("Location: ../?p=contact");	
		}
		else //n' existe pas
		{
			$methodUser = new User_controller();
			if($methodUser->Contact($name, $nickname, $company, $reason, $email, $tel, $message, $id_user)) {
				
				// $methodUser->Login($name, $id_user);
				$_SESSION['valide'] = "Votre message a été envoyé, vous êtes à présent connecté, votre identifiant est : ".$name."_".$nickname."";
				Header("Location: ../?p=password");
			}
			else
			{
				$_SESSION['error'] = "ERREUR : Veuillez contacter l'administrateur du site";
				Header("Location: ../?p=contact");
			}

		}		
	} 
	
	
} 
else {
	
	$_SESSION['error'] = "Vous n'avez rien à faire ici";
	Header("Location: ../?p=contact");
}

?>