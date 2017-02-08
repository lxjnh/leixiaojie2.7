<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 封装的操作
 * @author leixiaojie <1258411342@qq.com>
 */
// 抽象一个鸟类
class Brid{
	// 成员属性
	public $name = "百灵";
	public $age = 20;
	public $sex = "公";
	// 成员方法
	public function fly(){
		return $this -> age."正在升天……";
	}
}
class Bailing extends Brid{
	// 成员属性
	public $home = "草原";
	// 成员方法
	public function chi(){
		return "正在捕食……";
	}
}
class Huibailing extends Bailing{
	
}
// 实例化
$huibailing = new Huibailing;
echo $huibailing -> name;
echo $huibailing -> home;
