<?php

$app->group('/api' , function() use ($app) {
	$app->group('/v1' , function() use ($app) {
		$app->group('/session' , function() use ($app) {
			$app->post('/create', function() use ($app) {

				$request  = json_decode($app->request()->getBody(), true);

				if (Validatr::isArray($request)) {

					if (Validatr::isText("api_token", $request)) {
						$apiToken = $request["api_token"];
					} else {
						response($app, PARA_FAILURE);
						$app->stop(); 
					}
					 
					if (Validatr::isText("source", $request)){
						$source = $request["source"];
					} else {
						response($app, PARA_FAILURE);
						$app->stop();
					}

					if (Validatr::isNumber("count", $request)){
						$count = $request["count"];
					} else {
						response($app, PARA_FAILURE);
						$app->stop();
					}

					if (Validatr::isEmail("username", $request)) {
						$username  = $request["username"];
					} else {
						response($app, USER_FAILURE);
						$app->stop();
					}

					if (Validatr::isNumber("password", $request)) {
						$password  = $request["password"];
					} else {
						response($app, PASS_FAILURE);
						$app->stop();
					}


					$id = UserModel::authenticate($username, $password);

					if ($id){
						response($app, AUTH_SUCCESS, UserModel::readOne($id));
					} else {
						response($app, AUTH_FAILURE);
					}
				} else {
					response($app, PARA_FAILURE);
				} 
			});

			/* destroy a session */
			$app->post('/destroy', function() use ($app) {
				$request  = $app->request;
				$app->redirect('/', '200');
			});

			/* disallow other http methods */
			$app->map('/create', function() use ($app) {
				response($app, ROUT_FAILURE);
			})->via('GET', 'PUT', 'PATCH','DELETE');

			/* disallow other http methods */
			$app->map('/destroy', function() use ($app) {
				response($app, ROUT_FAILURE);
			})->via('GET', 'PUT', 'PATCH','DELETE');

		});
	});
});

function response($app, $code, $entity = null) {
	$response = $app->response;
	$response['Content-Type'] = 'application/json';
	$data = array(
		'status_code'	=> Helper::getStatus($code),
		'message' 		=> Helper::getMessage($code),
		'short_message' => Helper::getShortMessage($code),
		'redirect_url'  => Helper::getRedirectUrl($code),
		'is_error' 		=> Helper::getError($code)
	);

	if($entity) {
		$data = array_merge($data, array('user'=>$entity->serialize()));
	} 

	$app->response->body(')]},'.json_encode($data));
}