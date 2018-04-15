<?php
include_once "connect_db.php";

class User {
	
	private $_BDD;
	private $_id;
	private $_name;
	private $_nickname; 
	private $_company; 
	private $_reason; 
	private $_email;
	private $_tel; 
	private $_message; 

	function __construct($id, $name, $nickname, $company, $reason, $email, $tel, $message) {
	    
		$this->_BDD = new DB();
		$this->_id = $id;
		$this->_name = $name;
		$this->_nickname = $nickname;
		$this->_company = $company;
		$this->_reason = $reason;
		$this->_email = $email;
		$this->_tel = $tel;
		$this->_message = $message;
		
	}

	
	public function getUsername() {
		return $this->name;
	}
	
	public function getNickname() {
		return $this->nickname;
	}
	
	public function getCompany() {
		return $this->company;
	}
	
	public function getReason() {
		return $this->reason;
	}
	
	public function getEmail() {
		return $this->email;
	}
	
	public function getTel() {
		return $this->tel;
	}
	
	public function getMessage() {
		return $this->message;
	}
	
	
}
?> 