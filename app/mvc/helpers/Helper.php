<?php 

class Helper {

	public static function getStatus($code){
		switch($code){
			case AUTH_SUCCESS:
			return 200;
			case AUTH_FAILURE:
			case USER_FAILURE:
			case PASS_FAILURE:
			return 401;
			case PARA_FAILURE:
			return 400;
			case ROUT_FAILURE:
			return 405;
		}
	}

	public static function getError($code){
		switch($code){
			case AUTH_SUCCESS:
			return false;
			case AUTH_FAILURE:
			case PARA_FAILURE:
			case USER_FAILURE:
			case PASS_FAILURE:
			case ROUT_FAILURE:
			return true;
		}
	}

	public static function getMessage($code = AUTH_SUCCESS){
		switch($code){
			case AUTH_SUCCESS:
			return "Authentication successful.";
			case AUTH_FAILURE:
			case PARA_FAILURE:
			case USER_FAILURE:
			case PASS_FAILURE:
			return "Authentication failed.";
			case ROUT_FAILURE:
			return "Method not allowed.";
		}
	}

	public static function getShortMessage($code = AUTH_SUCCESS){
		switch($code){
			case PARA_FAILURE:
			return "Incomplete or wrong parameters.";
			case USER_FAILURE:
			return "Incorrect username or password.";
			case PASS_FAILURE:
			return "Incorrect username or password.";
			case AUTH_SUCCESS:
			case AUTH_FAILURE:
			case ROUT_FAILURE:
			return "NA";
		}
	}

	public static function getRedirectUrl($code = AUTH_SUCCESS){
		switch($code){
			case AUTH_SUCCESS:
			return "dashboard";
			case PARA_FAILURE:
			return "NA";
			case ROUT_FAILURE:
			return "home";
		}
	}

	public function getAttemptCount($count = 0){
		$count = $count+1;
		return $count;
	}
}