<?php
	
	/* api status codes */
	define("AUTH_FAILURE", "C401");
	define("AUTH_SUCCESS", "C200");
	define("PARA_FAILURE", "C400");
	define("ROUT_FAILURE", "C405");

	function returnResponse($response, $code, $count=0) {
		
		$response['Content-Type'] = 'application/json';

		$data = array();
		$data["success"]	   = getSuccess($code);
    	$data["message"]	   = getMessage($code);
    	$data["reason"]	       = getReason($code);
    	$data["redirect_url"]  = getRedirectUrl($code);
    	$data["attempt_count"] = getAttemptCount($count);
		
		$response->status(getStatus($code));
		
		$response->body(json_encode($data));
	}

	function getStatus($code){
		switch($code){
			case AUTH_SUCCESS:
				return 200;
			case AUTH_FAILURE:
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
			case ROUT_FAILURE:
				return false;
		}
	}

	function getMessage($code = AUTH_SUCCESS){
		switch($code){
			case AUTH_SUCCESS:
				return "Successful.";
			case AUTH_FAILURE:
			case PARA_FAILURE:
				return "Authentication failed.";
			case ROUT_FAILURE:
				return "Method not allowed.";
		}
	}

	function getReason($code = AUTH_SUCCESS){
		switch($code){
			case PARA_FAILURE:
				return "Incomplete or wrong parameters.";
			case AUTH_SUCCESS:
			case AUTH_FAILURE:
			case ROUT_FAILURE:
				return "NA";
		}
	}

	function getRedirectUrl($code = AUTH_SUCCESS){
		switch($code){
			case AUTH_SUCCESS:
				return "/dashboard";
			case PARA_FAILURE:
				return "NA";
			case ROUT_FAILURE:
				return "/home";
		}
	}

	function getAttemptCount($count = 0){
		return $count++;
	}

	$app->group('/api' , function() use ($app) {
		
		/* session api */
		$app->group('/session' , function() use ($app) {
			
			/* create a session */
			$app->post('/create', function() use ($app) {
		
			$request   = $app->request();

			$ip 	   = $request->getIp();
			$referrer  = $request->getReferer();
			$userAgent = $request->getUserAgent();
			$username  = $request->post('username');
			$password  = $request->post('password');
			$count 	   = $request->post('count');

			if(true){
				if(authenticateUser($username, $password)){
					returnResponse($app->response, AUTH_SUCCESS, $count);
				} else {
					returnResponse($app->response, AUTH_FAILURE, $count);
				}
			} else {
				returnResponse($app->response, PARA_FAILURE, $count);
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
});
