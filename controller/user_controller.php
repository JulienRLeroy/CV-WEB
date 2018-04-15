 <?php 
 
 
 class User_controller {
        
        private $_BDD;
        
			function __construct() {
			
				$this->_BDD = new DB();
			}
						
			public function Contact($name, $nickname, $company, $reason, $email, $tel, $message) {   
			   
				$name = htmlentities($this->_BDD->ReturnSite()->quote($name));
				$nickname = htmlentities($this->_BDD->ReturnSite()->quote($nickname));
				$company = htmlentities($this->_BDD->ReturnSite()->quote($company));
				$reason = htmlentities($this->_BDD->ReturnSite()->quote($reason));
				$email = htmlentities($this->_BDD->ReturnSite()->quote($email));
				$tel = htmlentities($this->_BDD->ReturnSite()->quote($tel));
				$message = htmlentities($this->_BDD->ReturnSite()->quote($message));
				$id_user = ($name. "_" .$nickname); // t'en es ici
				
			    $req = $this->_BDD->ReturnSite()->query("INSERT INTO contact SET name=$name, nickname=$nickname, company=$company, reason=$reason, email=$email, tel=$tel, message=$message");
				
			    if($req){
					return true;
				} else {
					return false;
				}
			}	
			
			public function getUserExist($name, $nickname) {

				$name = htmlentities($this->_BDD->ReturnSite()->quote($name));
				$nickname = htmlentities($this->_BDD->ReturnSite()->quote($nickname));
				$id_user = ($name. "_" .$nickname);

				$req = $this->_BDD->ReturnSite()->query("SELECT * FROM account where id_user=$id_user");

				if($req != true) { 
					return true;
				} else {
					return false;
				}
			}
			
			// public function Login($name, $nickname, $company, $reason, $email, $tel) {
				
				// $ndc = htmlentities($this->_BDD->ReturnAuth()->quote($ndc)); // 
				// $req = $this->_BDD->ReturnAuth()->query("SELECT * FROM account WHERE name=$name AND nickname=$nickname");
				
				// if($tab = $req ->fetch()) {				  
					// $_SESSION['user'] = new Player($tab['username'], $tab['email'], $tab['vote'], $tab['id'], $tab['last_ip'], $tab['parrain'], $tab['rank']); // COPIE DE LA CLASS PLAYER
					// return true;
				// }
				
				// return false;
			// }
 }
			
			
?>