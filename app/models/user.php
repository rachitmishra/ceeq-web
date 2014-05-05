<?php

function authenticateUser($username, $password) {
	$query = 'SELECT id FROM login 
			  WHERE userid = :username 
			  AND userpin = :password 
			  LIMIT 1';
	
	$row = R::getRow( $query, 
			array(':username'=>$username, ':password'=>md5($password)));

	if($row) {
		
		return true;
	}

	return false;
}