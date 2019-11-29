<?php


class Interaction{
	private $id;
	private $action;
	private $time;
	private $date;
	private $user;
	private $ressource;
	
	public function __construct($id, $no, $time,$date){
		$this->id=$id;
		$this->action=$no;
		$this->time=$time;
		$this->date=$date;
		
	}

	public function toString(){
		return $this->id. " , " .$this->action. " , " . $this->time." , ".$this->date; 
	}

	public function getid(){
		return $this->id;
	}

	public function getaction(){
		return $this->action;
	}

	public function gettime(){
		return $this->time;
	}

	public function setid($id){
		$this->id=$id;
	}

	public function setaction($action){
		$this->action=$action;
	}

	public function settime($time){
		$this->time=$time;
	}

	public function getdate(){
		return $this->date;
	}

	public function setdate($adr){
		$this->date=$adr;
	}

	public function getuser(){
		return $this->user;
	}
	public function setuser($act){
		$this->user=$act;
	}
	public function getressource(){
		return $this->ressource;
	}
	public function setressource($act){
		$this->ressource=$act;
	}


	
}

?>