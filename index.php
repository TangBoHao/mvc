<?php
//url形式： index.php?controller=控制器名&method=方法名
require_once('function.php');
$controllerAllow=array('test','index');
$methodAllow=array('test','index');
$controller=daddslashes($_GET['controller']);
$method=daddslashes($_GET['method']);
C($controller,$method);