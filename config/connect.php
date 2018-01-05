<?php 
class database{
	public  static  $db;
	private static $dsn ='mysql:host=localhost;dbname=senxanh';
	private static $username='root';
	private static $pass='';


	public static function connect(){
		if(!isset(self::$db)){
			try{
				self::$db =new PDO(self::$dsn,self::$username,self::$pass);
				self::$db ->exec('SET NAMES utf8');
			}
			catch (PDOException $e){
				echo $e->getMessage();
			}
			return self::$db;
		}
	}
}





 ?>