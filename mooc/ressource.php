<?php


class Ressource{
	private $id;
	private $titre;
	private $description;
	private $duree;
	
	public function __construct($id, $no, $description,$duree){
		$this->id=$id;
		$this->titre=$no;
		$this->description=$description;
		$this->duree=$duree;
		
	}

	public function toString(){
		return $this->id. " , " .$this->titre. " , " . $this->description." , ".$this->duree; 
	}

	public function getid(){
		return $this->id;
	}

	public function gettitre(){
		return $this->titre;
	}

	public function getdescription(){
		return $this->description;
	}

	public function setid($id){
		$this->$id=$id;
	}

	public function settitre($titre){
		$this->titre=$titre;
	}

	public function setdescription($description){
		$this->description=$description;
	}

	public function getduree(){
		return $this->duree;
	}

	public function setduree($adr){
		$this->$duree=$adr;
	}

	
	
}

?>