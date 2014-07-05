<?php 

class BaseEntity {
	
	private $id;

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function serialize(){
		return array(
			'id'	=> $this->getId()
		);
	}
}