<?php 

use Respect\Validation\Validator as vln;

public class Validator {

	public function isEmail($param, $request) {
		if(vln::key($param, vln::email()->noWhitespace()->notEmpty())->validate($request)) {
			return true;
		}

		return false;
	}

	public function isNumber($param, $request) {
		if(vln::key($param, vln::numeric()->noWhitespace()->notEmpty())->validate($request)) {
			return true;
		}

		return false;
	}

	public function isText($param, $request) {
		if(vln::key($param, vln::noWhitespace()->notEmpty())->validate($request)) {
			return true;
		}

		return false;
	}

	public function isArray($request) {
		if(vln::arr()->validate($request)) {
			return true;
		}

		return false;
	}
}

die("d");