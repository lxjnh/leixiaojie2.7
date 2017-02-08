<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 类的相关操作
 * @author leixiaojie <1258411342@qq.com>
 */
abstract class Zoo{
	abstract function fly();
	abstract function pa();
}
interface Dog{
	public function chi();
	
}
interface Pig{
	public function shui();
}
class Brid extends Zoo implements Dog,pig{
	// 重写两个方法
	public function fly(){
		
	}
	public function pa(){
		
	}
	public function chi(){
		
	}
	public function shui(){
		
	}
}
