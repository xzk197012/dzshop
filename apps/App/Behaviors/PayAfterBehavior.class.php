<?php
/*
	支付成功后执行特定的行为
*/
namespace App\Behaviors;
class PayAfterBehavior {
	/*
		array (
		'is_stytem_order' => false,//是否是系统订单，true 是，false 是插件订单
		'order_sn' => '201701051916009300',//订单编号
		'trade_no' => '4001502001201701055312356595',//交易流水号
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
