 <?php 
 
 
 class User_controller {
        
        private $_BDD;
        
			function __construct() {
			
				$this->_BDD = new DB();
			}
						
			public function Contact($name, $nickname, $company, $reason, $email, $tel, $message, $id_user) {   
			   
				$name = htmlentities($this->_BDD->ReturnSite()->quote($name));
				$nickname = htmlentities($this->_BDD->ReturnSite()->quote($nickname));
				$company = htmlentities($this->_BDD->ReturnSite()->quote($company));
				$reason = htmlentities($this->_BDD->ReturnSite()->quote($reason));
				$email = htmlentities($this->_BDD->ReturnSite()->quote($email));
				$tel = htmlentities($this->_BDD->ReturnSite()->quote($tel));
				$message = htmlentities($this->_BDD->ReturnSite()->quote($message));
				$id_user = htmlentities($this->_BDD->ReturnSite()->quote($id_user));
				
			    $req = $this->_BDD->ReturnSite()->query("INSERT INTO contact SET name=$name, nickname=$nickname, company=$company, reason=$reason, email=$email, tel=$tel, message=$message");
				
			    if($req){
					$req2 = $this->_BDD->ReturnSite()->query("INSERT INTO account SET name=$name, nickname=$nickname, company=$company, reason=$reason, email=$email, id_user=$id_user, tel=$tel");
					return true;
				} else {
					return false;
				}
			}	
			
			public function getUserExist($id_user,$email) {

				$id_user = htmlentities($this->_BDD->ReturnSite()->quote($id_user));
				$email = htmlentities($this->_BDD->ReturnSite()->quote($email));

				$req = $this->_BDD->ReturnSite()->query("SELECT * FROM account WHERE id_user=$id_user AND email=$email");

				if($tab = $req->fetch()) { // Ca veut dire qu'il y a deja un email 
					return true; //dégage
				}
				return false; //n'existe pas
				
			}
			
			public function LoginWithoutPassword($name, $nickname, $company, $reason, $email, $tel, $id_user) {
				
				$ndc = htmlentities($this->_BDD->ReturnAuth()->quote($ndc)); // 
				$req = $this->_BDD->ReturnAuth()->query("SELECT * FROM account WHERE name=$name AND nickname=$nickname AND id_user=$id_user");
				
				if($tab = $req ->fetch()) {				  
					$_SESSION['user'] = new Player($tab['name'], $tab['nickname'], $tab['company'], $tab['reason'], $tab['email'], $tab['tel'], $tab['id_user']); // COPIE DE LA CLASS USER
					return true;
				}
				
				return false;
			}
			
			// public function Login($name, $nickname, $company, $reason, $email, $tel, $id_user, $password) {
				
				// $ndc = htmlentities($this->_BDD->ReturnAuth()->quote($ndc)); // 
				// $req = $this->_BDD->ReturnAuth()->query("SELECT * FROM account WHERE name=$name AND nickname=$nickname AND id_user=$id_user");
				
				// if($tab = $req ->fetch()) {				  
					// $_SESSION['user'] = new Player($tab['name'], $tab['nickname'], $tab['company'], $tab['reason'], $tab['email'], $tab['tel'], $tab['id_user']); // COPIE DE LA CLASS USER
					// return true;
				// }
				
				// return false;
			// }
 }
			
			
?>