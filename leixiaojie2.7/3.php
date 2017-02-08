<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 封装的操作
 * @author leixiaojie <1258411342@qq.com>
 */
//抽象一个鸟类
class Brid {
	// 成员属性
	public $name = "点颏";
	public $age = 30;
	public $sex = "母";
	// 成员方法
	public function fly(){
		return "正在︿(￣︶￣)︿";
	}
}
// 实例化一个鸟
$dianke = new Brid;
// 调用成员属性
echo $dianke -> name;
echo "<br />";
// 调用成员方法
echo $dianke -> fly();
