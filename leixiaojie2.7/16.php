<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 继承的操作
 * @author leixiaojie <1258411342@qq.com>
 */
// 抽象一个鸟类
class Brid{
	// 成员属性
	protected $name = "百灵";
	public $age = 20;
	public $sex = "公";
	// 成员方法
	public function fly(){
		return "正在升天……";
	}
}
class Bailing extends Brid{
	//成员方法
	public function chi($name){
		$this -> name = $name;
		return $this -> name."正在吃……";
	}	
}
//实例化一个对象
$baling = new Bailing();
echo $baling -> chi("黑白鸟");