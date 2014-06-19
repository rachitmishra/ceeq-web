<!-- API Controller -->

<?php

include ROOT.'/app/mvc/models/entity/Response.php';

$session = new Session();
$validator = new Validator();
$userModel = new UserModel();
$deviceModel = new DeviceModel();
$locationModel = new LocationModel();

$app->group('/api' , function() use ($app) {
	$app->group('/session' , function() use ($app) {
		$app->post('/create', function() use ($app) {
			$request   = $app->request()->getBody();
			if ($validator->isArray($request)) {

				// if ($validator->isString("api_token", $request)) {
				// 	$csrf_token = $request["api_token"];
				// } else {
				// 	response($app, Constants->PARA_FAILURE);
				// }

				if ($validator->isText("source", $request)){
					$source = $request["source"];
				} else {
					response($app, Constants->PARA_FAILURE);
				}

				// if ($validator->isNumber("count", $request)){
				// 	$count = $request["count"];
				// } else {
				// 	response($app, Constants->PARA_FAILURE);
				// }

				if ($validator->isEmail("username", $request)) {
					$username  = $request["username"];
				} else {
					response($app, Constants->USER_FAILURE);
					$app->stop();
				}

				if ($validator->isNumber("password", $request)) {
					$password  = $request["password"];
				} else {
					response($app, Constants->PASS_FAILURE);
					$app->stop();
				}

				$id = $userModel->authenticate($username, $password);
				if ($id){
					response($app, Constants->AUTH_SUCCESS, $userModel->read($id);
				} else {
					response($app, Constants->AUTH_FAILURE);
				}
			} else {
				response($app, Constants->PARA_FAILURE);
			}
		});

		/* destroy a session */
		$app->post('/destroy', function() use ($app) {
		
			$request  = $app->request;
			$app->redirect('/', '200');
		});
		
		/* disallow other http methods */
		$app->map('/create', function() use ($app) {
			response($app, Constants->ROUT_FAILURE);
		})->via('GET', 'PUT', 'PATCH','DELETE');
		
		/* disallow other http methods */
		$app->map('/destroy', function() use ($app) {
			response($app, Constants->ROUT_FAILURE);
		})->via('GET', 'PUT', 'PATCH','DELETE');
	});
});

function response($app, $code, $entity = null) {
	$response = new Response($app);
	$response->setStatusCode($code);
	$response->fire($entity);	
}