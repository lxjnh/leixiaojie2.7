<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 封装的操作
 * @author leixiaojie <1258411342@qq.com>
 */
// 抽象一个鸟类
class Brid{
	// 成员属性
	private $name = "百灵";
	private $age = 20;
	private $sex = "公";
	// 成员方法
	public function fly(){
		return "正在升天……";
	}
	//取得私有成员属性
	public function __get($name){
		//可以添加限制访问的条件
		if($name == "name"){
			return $this -> $name;
		}
	}
	//修改私有成员属性
	public function __set($name,$value){
		//可以添加限制访问的条件
		if($name == "name"){
			$this -> $name = $value;
		}
	}
	//判断一个属性是否存在
	public function __isset($k){
		return isset($this -> $k);
	}
	//注消成员属性
	public function __unset($k){
		unset($this -> $k);
	}
}
// 实例化
$bailing = new Brid;
echo $bailing -> name;
// var_dump(isset($bailing -> name));
