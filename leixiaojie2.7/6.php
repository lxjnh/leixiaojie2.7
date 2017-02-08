<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 封装的操作
 * @author leixiaojie <1258411342@qq.com>
 */
// 抽象一个鸟类
class Brid{
	// 成员属性
	protected $name = "点颏";
	public $age = 20;
	public $sex = "母";
	// 成员方法
	public function fly(){
		return $this -> age."正在下蛋……";
	}
	
}
// 实例化一个鸟类
$dianke = new Brid;
$dianke -> age = 30;
echo $dianke -> fly(); 
