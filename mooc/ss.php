<?php
include ("ClientDao.php");
$act=$_POST["action"];
$time=$_POST["time"];


$em=new ClientDao();
$em->addaction($act,$time,1,1);

echo $act.' at    '.$time;
?>