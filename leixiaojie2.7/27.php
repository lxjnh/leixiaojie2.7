<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 接口的操作
 * @author leixiaojie <1258411342@qq.com>
 */
interface Brid{
	// 成员属性
	const NAME = "黑白鸟";
	//定义一个方法不用写方法体
	public function fly();
}
interface Zoo{
	public function pa();
}
class Bailing implements Brid,Zoo{
	//子类中重写接口中父类的方法
	public function fly($name){
		self::NAME = $name;
		return self::NAME."正在飞……";
	}
	public function pa(){
		return "正在爬……";
	}
}
// 实例化
$bailing = new Bailing;
echo $bailing -> fly("画眉鸟");
