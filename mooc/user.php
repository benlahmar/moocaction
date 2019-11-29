<?php


class User{
	private $id;
	private $nom;
	private $log;
	private $pass;
	
	public function __construct($id, $no, $log,$pass){
		$this->id=$id;
		$this->nom=$no;
		$this->log=$log;
		$this->pass=$pass;
		
	}

	public function toString(){
		return $this->id. " , " .$this->nom. " , " . $this->log." , ".$this->pass; 
	}

	public function getid(){
		return $this->id;
	}

	public function getnom(){
		return $this->nom;
	}

	public function getlog(){
		return $this->log;
	}

	public function setid($id){
		$this->$id=$id;
	}

	public function setnom($nom){
		$this->nom=$nom;
	}

	public function setlog($log){
		$this->log=$log;
	}

	public function getpass(){
		return $this->pass;
	}

	public function setpass($adr){
		$this->$pass=$adr;
	}

	
	
}

?>