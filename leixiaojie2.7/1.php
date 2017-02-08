<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 封装的操作
 * @author leixiaojie <1258411342@qq.com>
 */
// 抽象一个鸟
class Brid{
	// 成员属性
	public $name = "百灵";
	public $age = 20;
	public $sex = "公";
	// 成员方法
	public function fly(){
		return "正在天上飞……";
	}
	
}
// 实例化一个鸟
$bailing = new Brid;
// 调用成员属性
echo $bailing -> name;
echo "<br />";
// 调用成员方法
echo $bailing -> fly();
