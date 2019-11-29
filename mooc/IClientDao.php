<?php

 interface  IClientDao
{
	public function adduser($nom,$login,$pass);
	
	public function finduserById($id);

	public function addressource($titre,$description,$duree);
	public function findressourcetById($id);


	public function addaction($action,$time,$iduser,$idressource);
	public function findactionByIduser($iduser,$idressource);

}

?>