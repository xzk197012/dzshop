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

       file_put_contents(APP_ROOT.'./be.txt',var_export($arg,true), FILE_APPEND);

$url = "http://www.tqcp.net/xtq_sys_add.php?sn={$arg['order_sn']}" ;
$oCurl = curl_init();
curl_setopt($oCurl, CURLOPT_URL, $url);
curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1 );
$sContent = curl_exec($oCurl);
$aStatus = curl_getinfo($oCurl);
curl_close($oCurl);
if(intval($aStatus["http_code"])==200){
	file_put_contents(APP_ROOT.'./be.txt', "\r\n{$url}\r\n{$sContent}\r\n", FILE_APPEND);
}


    }
}
