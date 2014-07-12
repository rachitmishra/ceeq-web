<?php

include ROOT.'/app/mvc/models/entity/User.php';

class UserModel {

	public static function authenticate($username, $password) {
		$query = 'SELECT id FROM users 
		WHERE email = :username 
		AND password = :password 
		LIMIT 1';

		$row = R::getCell( $query, 
			array(':username'=>$username, ':password'=>md5($password)));

		if($row) {
			return $row;
		}

		return false;
	}

	public static function create($user) {

	}

	public static function readOne($id) {
		$user_bean =  R::load("users", $id);
		$user = new User();
		$user->set($user_bean);
		return $user;
	}

	public static function read() {

	}

	public static function update($id) {

	}

	public static function delete($id) {

	}

}