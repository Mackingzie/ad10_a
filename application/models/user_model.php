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
		$this->simpleloginsecure->create('user@example.com', 'uS$rpass!');
}
