<?php
	
	use Respect\Validation\Validator as vln;

	/* api status codes */
	define("AUTH_FAILURE", "401");
	define("AUTH_SUCCESS", "200");
	define("PARA_FAILURE", "400");
	define("ROUT_FAILURE", "405");
	define("USER_FAILURE", "444");
	define("PASS_FAILURE", "445");

	function returnResponse($app, $code, $count=0) {
		
		$app-setCookie('X-XSRF-TOKEN', 'XXXX', '+0 days');

		die("1");
		//$app-setCookie("X-AUTH-TOKEN", getRandomToken(64)."", "7 days");

		$response = $app->response;
		$response['Content-Type'] = 'application/json';

		$data = array();
		$data["success"]	   = getSuccess($code);
    	$data["message"]	   = getMessage($code);
    	$data["reason"]	       = getReason($code);
    	$data["redirect_url"]  = getRedirectUrl($code);
    	$data["attempt_count"] = getAttemptCount($count);
		
		$response->status(getStatus($code));
		
		$response->body(')]},'.json_encode($data));
	}

	function getStatus($code){
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

	function getSuccess($code){
		switch($code){
			case AUTH_SUCCESS:
				return true;
			case AUTH_FAILURE:
			case PARA_FAILURE:
			case USER_FAILURE:
			case PASS_FAILURE:
			case ROUT_FAILURE:
				return false;
		}
	}

	function getMessage($code = AUTH_SUCCESS){
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

	function getReason($code = AUTH_SUCCESS){
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

	function getRedirectUrl($code = AUTH_SUCCESS){
		switch($code){
			case AUTH_SUCCESS:
				return "dashboard";
			case PARA_FAILURE:
				return "NA";
			case ROUT_FAILURE:
				return "home";
		}
	}

	function getAttemptCount($count = 0){
		$count = $count+1;
		return $count;
	}

	$app->group('/api' , function() use ($app) {
		
		/* session api */
		$app->group('/session' , function() use ($app) {
			/* create a session */
			$app->post('/create', function() use ($app) {
		
			$request   = $app->request()->getBody();
			
			if (vln::arr()->validate($request)) {
				
				if (vln::key("csrf_token",
						vln::noWhitespace()->notEmpty())->validate($request)) {
					$csrf_token = $request["csrf_token"];
				} else {
					returnResponse($app, PARA_FAILURE);
				}

				if (vln::key("count",
						vln::numeric()->noWhitespace()->notEmpty())->validate($request)) {
					$count 	   = $request["count"];
				} else {
					returnResponse($app, PARA_FAILURE);	
				}

				if (vln::key("username", 
						vln::email()->noWhitespace()->notEmpty())->validate($request)) {
					$username  = $request["username"];
				} else {
					returnResponse($app, USER_FAILURE, $count);
					$app->stop();
				}

				if (vln::key("password", 
						vln::numeric()->noWhitespace()->notEmpty())->validate($request)) {
					$password  = $request["password"];	
				} else {
					returnResponse($app, PASS_FAILURE, $count);
					$app->stop();	
				}

				if (authenticateUser($username, $password)){
					returnResponse($app, AUTH_SUCCESS);
				} else {
					returnResponse($app, AUTH_FAILURE, $count);
				}

			} else {
				returnResponse($app, PARA_FAILURE);
			}
		});
		
		/* destroy a session */
		$app->post('/destroy', function() use ($app) {
	
			$request  = $app->request;
    		$app->redirect('/', '200');

		});

		/* disallow other http methods */
		$app->map('/create', function() use ($app) {
			returnResponse($app->response, ROUT_FAILURE);
		})->via('GET', 'PUT', 'PATCH','DELETE');

		/* disallow other http methods */
		$app->map('/destroy', function() use ($app) {
			returnResponse($app->response, ROUT_FAILURE);
		})->via('GET', 'PUT', 'PATCH','DELETE');

	});

	$app->group('/data' , function() use ($app) {
	});

	function crypto_rand_secure($min, $max) {
        $range = $max - $min;
        if ($range < 0) return $min; // not so random...
        $log = log($range, 2);
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd >= $range);
        return $min + $rnd;
	}

	function getRandomToken($length){
    	$token = "";
    	$codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    	$codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    	$codeAlphabet.= "0123456789";
    	for($i=0;$i<$length;$i++){
    	    $token .= $codeAlphabet[crypto_rand_secure(0,strlen($codeAlphabet))];
    	}
    return $token;
}
});
