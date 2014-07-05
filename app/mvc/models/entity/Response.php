<?php 

class Response {

	private $app;

	private $code;

	private $statusCode;

	private $message;

	private $shortMessage;

	private $reditectUrl;

	private $attemptCount;

	private $isError;

	private $response;

	private $helper;

	public function __contruct($app, $code) {
		$this->app = $app;
		$this->code = $code;
		$this->response = $app->response;
		$this->$response['Content-Type'] = 'application/json';
		$helper = new Helper();
		$this->setStatusCode();
		$this-setMessage();
		$this-setShortMessage();
		$this-setRedirectUrl();
		$this-setIsError();
	}

	public function getStatusCode() {
		return $this->$statusCode;
	}

	public function setStatusCode() {
		$this->setStatusCode = $helper->getStatusCode($this->code);
	}

	public function getMessage() {
		return $this->$statusCode;
	}

	public function setMessage() {
		$this->message = $helper->getMessage($this->code);
	}

	public function getShortMessage() {
		return $this->$statusCode;
	}

	public function setShortMessage() {
		$this->shortMessage = $helper->getShortMessage($this->code);
	}

	public function getRedirectUrl() {
		return $this->$statusCode;
	}

	public function setRedirectUrl() {
		$this->redirectUrl = $helper->getRedirectUrl($this->code);
	}

	public function getIsError() {
		return $this->$statusCode;
	}

	public function setIsError() {
		$this->isError = $helper->getError($this->code);
	}

	public function serialize(){
		return array(
			'status_code'	=> $this->getStatusCode(),
			'message' 		=> $this->getMessage(),
			'short_message' => $this->getShortMessage(),
			'redirect_url'  => $this->getRedirectUrl(),
			'attempt_count'	=> $this->getAttemptCount(),
			'is_error' 		=> $this->getIsError()
		);
	}

	public function fire($entity = false){
		$data;
		if($entity) {
			$data = array_merge($this->serialize(), $entity->serialize());
		}
		$this->$response->body(')]},'.json_encode($data));
	}
}