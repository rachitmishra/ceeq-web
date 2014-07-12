<?php

class User extends BaseEntity {

	private $name;

	private $email;

	private $number;

	private $deviceCount;

	private $registrationOn;

	private $lastIp;

	private $lastSeen;

	private $isBeta;

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getNumber(){
		return $this->number;
	}

	public function setNumber($number){
		$this->number = $number;
	}

	public function getDeviceCount(){
		return $this->deviceCount;
	}

	public function setDeviceCount($deviceCount){
		$this->deviceCount = $deviceCount;
	}

	public function getRegistrationOn(){
		return $this->registrationOn;
	}

	public function setRegistrationOn($registrationOn){
		$this->registrationOn = $registrationOn;
	}

	public function getLastIp(){
		return $this->lastIp;
	}

	public function setLastIp($lastIp){
		$this->lastIp = $lastIp;
	}

	public function getLastSeen(){
		return $this->lastSeen;
	}

	public function setLastSeen($lastSeen){
		$this->lastSeen = $lastSeen;
	}

	public function getIsBeta(){
		return $this->isBeta;
	}

	public function setIsBeta($isBeta){
		$this->isBeta = $isBeta;
	}

	public function set($user) {
		$this->setId($user->id);
		$this->name = $user->name;
		$this->email = $user->email; 
		$this->number = $user->number;
		$this->deviceCount = $user->device_count;
		$this->registrationOn = $user->registeration_on;
		$this->lastIp = $user->last_ip;
		$this->lastSeen = $user->last_seen;
		$this->isBeta = $user->beta;
	}

	public function serialize(){
		
		return  array_merge( array(
			'name' 			=> $this->getName(),
			'email' 		=> $this->getEmail(),
			'number' 		=> $this->getNumber(),
			'device_count' 	=> $this->getDeviceCount(),
			'registered_on'	=> $this->getRegistrationOn(),
			'last_ip' 		=> $this->getLastIp(),
			'last_seen'		=> $this->getLastSeen(),
			'is_beta'		=> $this->getIsBeta()
			),
			parent::serialize()
		);
	}
}