<?php

include ROOT.'/app/mvc/models/entity/User.php';

public class UserModel {

	public function __construct(){
	}

	public function authenticate($username, $password) {
		$query = 'SELECT id FROM login 
		WHERE userid = :username 
		AND userpin = :password 
		LIMIT 1';

		$row = R::getRow( $query, 
			array(':username'=>$username, ':password'=>md5($password)));

		if($row) {
			return $row->getId();
		}

		return false;
	}

	public function create($user) {

	}

	public function read($id) {
		return null;
	}

	public function read() {

	}

	public function update($id) {

	}

	public function delete($id) {

	}

}