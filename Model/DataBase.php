<?php
class DataBase{
	private static $conx;
	private static function init(){
		self::$conx=new PDO('mysql:host=localhost;dbname=bookstore','root','');
		return self::$conx;
	}
	public static function getConx(){
		if(is_null(self::$conx)){
			Self::init();
		}
		return self::$conx;
	}
	public static function Execute($rq,$tab){
		$stm= self::getConx()->prepare($rq);
		return $stm->execute($tab);
	}
	public static function Query($rq,$className,$tab=[]){
		$stm= self::getConx()->prepare($rq);
		$r=$stm->execute($tab);
		$stm->setFetchMode(PDO::FETCH_CLASS,$className);
		$res = $stm->fetchAll();
		return $res;
	}
	public static function Find($rq,$className,$tab=[]){
		$stm= self::getConx()->prepare($rq);
		$r=$stm->execute($tab);
		$stm->setFetchMode(PDO::FETCH_CLASS,$className);
		$res = $stm->fetch();
		return $res;
	}
}
?>