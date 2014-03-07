<?php
/**
 * 设计模式 - 单例模式
 * @author echo <wlpphper@gmail.com>
 * 
 * 模式要领:
 * 1.该类只有一个实例
 * 2.该实例需自行创建
 * 3.向整个系统提供该实例
 */
 class Single {
 	private static $_instance = null;
 	private static $_name = null;
 	private static $_age = 27;
 	
 	// 禁止外部实例化
 	private function __construct() {}
 	
 	// 禁止克隆
 	private function __clone() {}
 	
 	// 获取该实例
 	public static function getInstance() {
 		if (!isset(self::$_instance)) {
 			self::$_instance = new self();
 		}
 		return self::$_instance;
 	}
 	
 	public static function setName($name) {
 		self::$_name = $name;
 	}
 	
 	public static function getName() {
 		return self::$_name;
 	}
 	
 	public static function setAge($age) {
 		self::$_age = $age;
 	}
 	
 	public static function getAge() {
 		return self::$_age;
 	}
 }
 
 $a = Single::getInstance();
 $b = Single::getInstance();
 
 $a->setName('echo');
 $a->setAge(35);
 echo $b->getName();
 echo $b->getAge();
 
 var_dump($a === $b);

?>