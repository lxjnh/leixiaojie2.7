<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 封装的操作
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
		return $this -> age."正在升天……";
	}
}
// 实例化一个鸟
$bailing = new Brid;
$bailing -> age = 50;
echo $bailing -> fly();
