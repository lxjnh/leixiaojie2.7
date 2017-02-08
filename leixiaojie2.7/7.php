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
		return $this -> age."正在升天……";
	}
}
class Bailing extends Brid{
	
}
class Dianke extends Brid{
	
}
// 实例化一个对象
$bailing = new Bailing();
echo $Bailing -> name;
echo $bailing -> fly();
echo "<hr />";
// 实例化一个对象
$dianke = new Dianke();
echo $dianke -> age = 30;
echo $dianke -> fly();
