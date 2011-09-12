<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
</head>

<?php

class User_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	
	function insert_user(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->simpleloginsecure->create($email, $password);
	}
}
