<?php
/*
	֧���ɹ���ִ���ض�����Ϊ
*/
namespace App\Behaviors;
class PayAfterBehavior {
	/*
		array (
		'is_stytem_order' => false,//�Ƿ���ϵͳ������true �ǣ�false �ǲ������
		'order_sn' => '201701051916009300',//�������
		'trade_no' => '4001502001201701055312356595',//������ˮ��
	)
	*/
    public function run(&$arg){
       file_put_contents(APP_ROOT.'./be.txt',var_export($arg,true));
    }
}