<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 继承的操作
 * @author leixiaojie <1258411342@qq.com>
 */
// 抽象一个鸟类
class Brid{
	// 成员属性
	public $name = "百灵";
	public $age = 20;
	public $sex = "公";
	// 成员方法
	public function __construct($name,$age,$sex){
		$this -> name = $name;
		$this -> age = $age;
		$this -> sex = $sex;
	}
	public function fly(){
		return "正在升天……";
	}
}
class Bailing extends Brid{
	public function fly(){
		//重载父类中的方法
		echo parent::fly();
		return "这个没有冲突";
	}
}
//实例化一个对象
$bailing = new Bailing("黑白",50,"母");
echo $bailing -> fly();