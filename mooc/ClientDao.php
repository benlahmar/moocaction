<?php
include ("DBInteraction.php");
include ("user.php");
include ("IClientDao.php");
include ("ressource.php");
include ("interaction.php");
class ClientDao implements IClientDao{

//$dsn="mysql:host=localhost;dbname=mooc";
	public function adduser($nom,$login,$pass)
	{
		$sql="insert into user(nom,login,pass) values('".$nom."','".$login."','".$pass."')";
		DBInteraction::connect("mysql:host=localhost;dbname=mooc");

		DBInteraction::maj($sql);


		DBInteraction::disconnect();

	}
	
public function auth($login,$pass)
	{
		$c;
		$sql="select * from user where log='".$login."' and pass='".".$pass."."')";
		DBInteraction::connect("mysql:host=localhost;dbname=mooc");

		$pdostat=DBInteraction::select($sql);
		if ($ct
         = $pdostat->fetch(PDO::FETCH_ASSOC)) {
         	$c=new User($ct['id'],$ct['nom'],$ct['log'],$ct['pass']);
  
 		}


		DBInteraction::disconnect();
		return $c;

	}

	public function finduserById($id)
	{
		$c;
		$sql="select * from user where id=".$id;
		DBInteraction::connect("mysql:host=localhost;dbname=mooc");

		$pdostat=DBInteraction::select($sql);
		if ($ct
         = $pdostat->fetch(PDO::FETCH_ASSOC)) {
         	$c=new User($ct['id'],$ct['nom'],$ct['log'],$ct['pass']);
  
 		}


		DBInteraction::disconnect();
		return $c;
	}

	public function findressourcetById($id){

	}

	public function addressource($titre,$description,$duree)
	{
		$sql="insert into resssource(titre,description,duree) values('".$titre."','".$description."','".$duree."')";
		DBInteraction::connect("mysql:host=localhost;dbname=mooc");

		DBInteraction::maj($sql);


		DBInteraction::disconnect();
	}


	public function addaction($action,$time,$iduser,$idressource){

		$sql="insert into interaction(action,time,iduser,idressource) values('".$action."','".$time."',".$iduser.",".$idressource.")";
		DBInteraction::connect("mysql:host=localhost;dbname=mooc");

		DBInteraction::maj($sql);


		DBInteraction::disconnect();
	}
	public function findactionByIduser($iduser,$idressource){

	}
}
?>