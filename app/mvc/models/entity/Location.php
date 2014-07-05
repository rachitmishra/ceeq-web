<!-- SQL

CREATE TABLE IF NOT EXISTS locations (
	id integer(10) PRIMARY KEY AUTO_INCREMENT,
	device_id integer(10) NOT NULL,
	latitude varchar(32) NOT NULL,
	longitude varchar(32) NOT NULL,
	battery_level integer(10) NOT NULL,
	is_moving boolean NULL,
	is_precise boolean NOT NULL,
	last_seen Datetime NOT NULL,
    FOREIGN KEY (device_id) REFERENCES devices(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-->
<?php

class Location extends BaseEntity {

	private $latitude;

	private $longitude;

	private $deviceId;

	private $batteryLevel;

	private $lastSeen;

	private $isMoving;

	private $isPrecise;

	public function getLatitude() {
		return $this->latitude;
	}

	public function setLatitude($latitude) {
		$this->latitude = $latitude;
	}

	public function getLongitude() {
		return $this->longitude;
	}

	public function setLongitude($longitude) {
		$this->longitude = $longitude;
	}

	public function getDeviceId() {
		return $this->deviceId;
	}

	public function setDeviceId($deviceId) {
		$this->deviceId = $deviceId;
	}

	public function getTime() {
		return $this->time;
	}

	public function setTime($time) {
		$this->time = $time;
	}

	public function getIsMoving() {
		return $this->isMoving;
	}

	public function setIsMoving($isMoving) {
		$this->isMoving = $isMoving;
	}

	public function getIsPrecise() {
		return $this->isPrecise;
	}

	public function setIsPrecise($isPrecise) {
		$this->isMoving = $isPrecise;
	}

	public function getBatteryLevel() {
		$this->batteryLevel;
	}

	public function setBatteryLevel($batteryLevel) {
		$this->batteryLevel = $batteryLevel;
	}

	public function serialize(){
		return array_merge( array(
			'latitude' 	=> $this->getLatitude(),
			'longitude' => $this->getLatitude(),
			'time' 		=> $this->getTime(),
			'device_id' => $this->getDeviceId(),
			'is_moving'	=> $this->getIsMoving(),
			'battery_level' => $this->getBatteryLevel()
			),
			$parent::serialize()
		);
	}
}