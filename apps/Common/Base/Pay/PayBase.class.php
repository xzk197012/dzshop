<?php
namespace Common\Base\Pay;
/*
*�����֧���ص�����
*
*/
abstract class PayBase{
	private function pluginwap() {
		$root  =  static :: getFileDir();//��ȡ������ļ�·��
		list(,$module) = explode('plugins',$root);
		return '/plugins/'.trim($module,'/,\\').'/wap/';
	}
	function successurl() {//֧���ɹ���ת��ַ
		$wap = $this->pluginwap();
		return $wap.'success.html';
	}
	function failurl() {
		$wap = $this->pluginwap();
		return $wap.'fail.html';//ʧ�ܵ�ַ
	}
	function detailurl() {
		$wap = $this->pluginwap();
		return $wap.'detail.html';//ʧ�ܵ�ַ
	}
	abstract function selectOrderBySn($order_sn); //��ѯ�����ӿ�
	abstract function saveOrder($orderinfo); //֧���ɹ���ص����涩���ӿ�
	abstract function payresult($group_sn);//֧���ɹ����سɹ�ҳ���� ��ѯ������ϵ����Ϣ�ӿ�
	abstract function selectOrderByReturnSn($return_sn) ; //�����˿�Ų�ѯ��Ϣ
	abstract function saveReturnOrder($data,$return_type) ; //�����˿�Ų�ѯ��Ϣ return_type �˿�ɷ��ص�״̬ true �ɹ�
	
	abstract function getFileDir();
	/*����ʵ������
	*	public function getFileDir(){
			return dirname(__FILE__);
		}
	*
	*
	*
	*/
}