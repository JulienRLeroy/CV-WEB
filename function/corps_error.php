<?php
	function corps_error() {
		
		if(isset($_SESSION['error'])) {
			
			echo $_SESSION['error'];
			
			unset($_SESSION['error']);
		}
		
		if(isset($_SESSION['valide'])) {
			
			echo $_SESSION['valide'];
			
			unset($_SESSION['valide']);
		}
	}
	
?> 