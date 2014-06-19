<!-- SQL

CREATE TABLE IF NOT EXISTS devices (
	id integer(10) PRIMARY KEY AUTO_INCREMENT,
	user_id integer(10) NOT NULL,
	name varchar(32) NULL,
	imeiNumber_number varchar(24) NOT NULL,
	type varchar(24) NULL,
	model_name varchar(24) NOT NULL,
	code_name varchar(24) NULL,
	manufacturer_name varchar(24) NOT NULL,
	is_tablet boolean NOT NULL,
	is_rooted boolean NOT NULL,
	is_device_admin_allowed boolean NOT NULL,
	current_sim_number varchar(24) NULL,
	current_imsi_number varchar(24) NULL,
	current_operator_name varchar(24) NULL,
	current_gcm_id varchar(64) NOT NULL,
	last_location_id integer(10) NULL,
	last_seen Datetime NOT NULL,
	FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
-->

<?php 

public class Device extends BaseEntity {

	private int $userId;

	private String $name;

	private int $imeiNumber;

	private String $type;

	private String $modelName;

	private String $codeName;

	private String $manufacturerName;

	private boolean $isTablet;

	private boolean $isRooted;

	private boolean $isDeviceAdminAllowed;

	private int $currentSimNumber;

	private int $currentImsiNumber;

	private String $currentOperatorName;

	private int $currentGcmId;

	private	int $lastLocationId;

	private String $lastSeen;

	public function getUserId(){
		return $this->userId;
	}

	public function setUserId($userId){
		$this->userId = $userId;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getImeiNumberNumber(){
		return $this->imeiNumberNumber;
	}

	public function setImeiNumberNumber($imeiNumberNumber){
		$this->imeiNumberNumber = $imeiNumberNumber;
	}

	public function getType(){
		return $this->type;
	}

	public function setType($type){
		$this->type = $type;
	}

	public function getModelName(){
		return $this->modelName;
	}

	public function setModelName($modelName){
		$this->modelName = $modelName;
	}

	public function getCodeName(){
		return $this->codeName;
	}

	public function setCodeName($codeName){
		$this->codeName = $codeName;
	}

	public function getManufacturerName(){
		return $this->manufacturerName;
	}

	public function setManufacturerName($manufacturerName){
		$this->manufacturerName = $manufacturerName;
	}

	public function getIsTablet(){
		return $this->isTablet;
	}

	public function setIsTablet($isTablet){
		$this->isTablet = $isTablet;
	}

	public function getIsRooted(){
		return $this->isRooted;
	}

	public function setIsRooted($isRooted){
		$this->isRooted = $isRooted;
	}

	public function getIsDeviceAdminAllowed(){
		return $this->isDeviceAdminAllowed;
	}

	public function setIsDeviceAdminAllowed($isDeviceAdminAllowed){
		$this->isDeviceAdminAllowed = $isDeviceAdminAllowed;
	}

	public function getCurrentSimNumber(){
		return $this->currentSimNumber;
	}

	public function setCurrentSimNumber($currentSimNumber){
		$this->currentSimNumber = $currentSimNumber;
	}

	public function getCurrentImsiNumber(){
		return $this->currentImsiNumber;
	}

	public function setCurrentImsiNumber($currentImsiNumber){
		$this->currentImsiNumber = $currentImsiNumber;
	}

	public function getCurrentOperatorName(){
		return $this->currentOperatorName;
	}

	public function setCurrentOperatorName($currentOperatorName){
		$this->currentOperatorName = $currentOperatorName;
	}

	public function getCurrentGcmId(){
		return $this->currentGcmId;
	}

	public function setCurrentGcmId($currentGcmId){
		$this->currentGcmId = $currentGcmId;
	}

	public function getLastLocationId(){
		return $this->lastLocationId;
	}

	public function setLastLocationId($lastLocationId){
		$this->lastLocationId = $lastLocationId;
	}

	public function getLastSeen(){
		return $this->lastSeen;
	}

	public function setLastSeen($lastSeen){
		$this->lastSeen = $lastSeen;
	}

	public function serialize(){
		return array_merge( array(
			'user_id' 					=> $this->getUserId(),
			'name' 						=> $this->getName(),
			'imeiNumber_number' 		=> $this->getImeiNumberNumber(),
			'type'						=> $this->getType(),
			'model_name'				=> $this->getModelName(),
			'code_name' 				=> $this->getCodeName(),
			'manufacturer_name'  		=> $this->getManufacturerName(),
			'is_tablet' 				=> $this->getIsTablet(),
			'is_rooted' 				=> $this->getIsRooted(),
			'is_device_admin_allowed' 	=> $this->getIsDeviceAdminAllowed(),
			'current_sim_number' 		=> $this->getCurrentSimNumber(),
			'current_imsi_number' 		=> $this->getCurrentImsiNumber(),
			'current_operator_name' 	=> $this->getCurrentOperatorName(),
			'current_gcm_id'			=> $this->getCurrentGcmId(),
			'last_location_id'			=> $this->getLastLocationId(),
			'last_seen'					=> $this->getLastSeen()
			),
			$parent::serialize()
		);
	}
}