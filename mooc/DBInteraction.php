<?php

class DBInteraction{
	private static $dsn;
	private static $pdo;
	private static $pdostat;


	public static function connect($dsn)
	{
		 self::$pdo=new PDO($dsn,"root","");
		 return self::$pdo;
	}

	public static function select($sql)
	{
		self::$pdostat=self::$pdo->query($sql);
		return self::$pdostat;
	}
	public static function maj($sql)
	{
		self::$pdostat=self::$pdo->query($sql);
		return self::$pdostat;
	}
	public static function disconnect()
	{
		self::$pdo=null;
	}
}
?>