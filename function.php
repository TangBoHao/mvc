<?php   

//模型调用函数
function M($name)
{
	require_once('lib/Model'.$name.'Model.class.php');
	eval('$obj=new '.$name.'Model()');
	return $obj;
}

 //视图调用函数
function V($name)
{
	require_once('lib/View'.$name.'View.class.php');
	eval('$obj=new '.$name.'View()');
	return $obj;
}

//方法调用函数
function C($name,$method)
{
	require_once('lib/Controller/'.$name.'Controller.class.php');
	eval('$obj=new'.$name.'Controller();$obj->'.$method.'();');
}

function daddslashes(&str)
{
	//首先判断魔法符号是否打开
	return (!get_magic_quotes_gpc())?addslashes($str):$str;
}

