<?php 

use Respect\Validation\Validator as v;

class Validatr {

	public static function isEmail($param, $request) {
		if(v::key($param, v::email()->noWhitespace()->notEmpty())->validate($request)) {
			return true;
		}

		return false;
	}

	public static function isNumber($param, $request) {
		if(v::key($param, v::numeric()->noWhitespace()->notEmpty())->validate($request)) {
			return true;
		}

		return false;
	}

	public static function isText($param, $request) {
		if(v::key($param, v::noWhitespace()->notEmpty())->validate($request)) {
			return true;
		}

		return false;
	}

	public static function isArray($request) {
		if(v::arr()->validate($request)) {
			return true;
		}
		return false;
	}

	public static function isJson($request) {
		if(v::json()->validate($request)) {
			return true;
		}
		return false;
	}
}