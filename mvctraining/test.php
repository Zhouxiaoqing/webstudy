<?php 


require_once 'testController.class.php';
require_once 'testModel.class.php';
require_once 'testView.class.php';


// function __autoload($classname) {
//     include $classname . '.class.php';
// }


/*
 * MVC�������̣�
 * 1.�����             ->   ���ÿ���������������ָ��
 * 2.������(C)  ->   ��ָ��ѡȡһ�����ʵ�ģ��
 * 3.ģ��(M)   ->   ���տ�������ָ��ȡ��Ӧ������
 * 4.������(C)  ->   ��ָ��ѡȡ��Ӧ����ͼ
 * 5.��ͼ(V)   ->   �ѵ�����ȡ�������ݰ�����ʾ
 */

$C = new testController();
$C->show();



?>