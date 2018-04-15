<?php

function getPages() {
	
		if(isset($_GET['p'])) {
			
			if($_GET['p'] == "metiers") { 
				echo "Métiers"; 
			} else if ($_GET['p'] == "competences") {
				echo "Competénces";
			} else if ($_GET['p'] == "formations") {
				echo "Formations";
			} else if ($_GET['p'] == "folio") {
				echo "Folio";
			} else if ($_GET['p'] == "contact") {
				echo "Contactez-moi";
			} 
		} else {
			echo "Home";
		}
	}
?>