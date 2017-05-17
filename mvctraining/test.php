<?php 


require_once 'testController.class.php';
require_once 'testModel.class.php';
require_once 'testView.class.php';


// function __autoload($classname) {
//     include $classname . '.class.php';
// }


/*
 * MVC运行流程：
 * 1.浏览者             ->   调用控制器，对它发出指令
 * 2.控制器(C)  ->   按指令选取一个合适的模型
 * 3.模型(M)   ->   按照控制器的指令取相应的数据
 * 4.控制器(C)  ->   按指令选取相应的视图
 * 5.视图(V)   ->   把第三步取到的数据按需显示
 */

$C = new testController();
$C->show();



?>