<?php
namespace App\Controller;
use Think\Controller;
use Common\Service\InstallService;
class InstallController extends BaseController {

	//首页
	public function index(){
		$ip = I('param.ip','','htmlspecialchars');
		$host = I('param.host','','htmlspecialchars');
		$array = array(
			'ip'=>$ip,
			'host'=>$host,
			'dateline'=>TIMESTAMP,
		);
		InstallService::addClient($array);
		$this->returnJson(0,'sucess',array('ip' => $ip,'host'=>$host));
	}
}