<form method="post" action="./action/formulaire.php">
	<div class="col-md-offset-2 col-md-8 col-md-offset-2 form-group">
		<label for="input_1">Nom</label>
		<input type="text" id="input_1" placeholder="Votre nom.." class="form-control" name="name" autocomplete="off" >
	</div>
	<div class="col-md-offset-2 col-md-8 col-md-offset-2 form-group">
		<label for="input_2">Prénom</label>
		<input type="text" id="input_2" placeholder="Votre prénom.." class="form-control" name="nickname" autocomplete="off" >
	</div>
	<div class="col-md-offset-2 col-md-8 col-md-offset-2 form-group">
		<label for="input_3">Entreprise</label>
		<input type="text" id="input_3" placeholder="Votre entreprise.." class="form-control" name="company" autocomplete="off" >
	</div>
	<div class="col-md-offset-2 col-md-8 col-md-offset-2 form-group">
		<label for="input_4">Raison</label>
		<input type="text" id="input_4" placeholder="La raison de votre contact.." class="form-control" name="reason" autocomplete="off" >
	</div>
	<div class="col-md-offset-2 col-md-8 col-md-offset-2 form-group">
		<label for="input_5">Téléphone</label>
		<input type="number" id="input_5" placeholder="Votre numéro de téléphone.." class="form-control" name="tel" autocomplete="off" >
	</div>
	<div class="col-md-offset-2 col-md-8 col-md-offset-2 form-group">
		<label for="input_6">Email</label>
		<input type="email" id="input_6" placeholder="Votre adresse mail.." class="form-control" name="email" autocomplete="off" >
	</div>
	<div class="col-md-offset-2 col-md-8 col-md-offset-2 form-group">
		<label for="input_7">Message</label>
		<textarea class="form-control textarea_contact" id="input_7" placeholder="Votre message, demande..." name="message" autocomplete="off" ></textarea>
	</div>
	<div class="col-md-offset-2 col-md-8 col-md-offset-2 form-group center">
		<input type="submit" value="Envoyer" name="submit_contact">
	</div>
</form>