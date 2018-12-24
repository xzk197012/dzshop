<?php
namespace Common\PayMent\WxPay;
use Common\PayMent\WxPay\WxPayDataBase;
/**
 * 
 * �ύJSAPI�������
 * @author widyhu
 *
 */
class WxPayJsApiPay extends WxPayDataBase
{
	/**
	* ����΢�ŷ���Ĺ����˺�ID
	* @param string $value 
	**/
	public function SetAppid($value)
	{
		$this->values['appId'] = $value;
	}
	/**
	* ��ȡ΢�ŷ���Ĺ����˺�ID��ֵ
	* @return ֵ
	**/
	public function GetAppid()
	{
		return $this->values['appId'];
	}
	/**
	* �ж�΢�ŷ���Ĺ����˺�ID�Ƿ����
	* @return true �� false
	**/
	public function IsAppidSet()
	{
		return array_key_exists('appId', $this->values);
	}


	/**
	* ����֧��ʱ���
	* @param string $value 
	**/
	public function SetTimeStamp($value)
	{
		$this->values['timeStamp'] = $value;
	}
	/**
	* ��ȡ֧��ʱ�����ֵ
	* @return ֵ
	**/
	public function GetTimeStamp()
	{
		return $this->values['timeStamp'];
	}
	/**
	* �ж�֧��ʱ����Ƿ����
	* @return true �� false
	**/
	public function IsTimeStampSet()
	{
		return array_key_exists('timeStamp', $this->values);
	}
	
	/**
	* ����ַ���
	* @param string $value 
	**/
	public function SetNonceStr($value)
	{
		$this->values['nonceStr'] = $value;
	}
	/**
	* ��ȡnotify����ַ���ֵ
	* @return ֵ
	**/
	public function GetReturn_code()
	{
		return $this->values['nonceStr'];
	}
	/**
	* �ж�����ַ����Ƿ����
	* @return true �� false
	**/
	public function IsReturn_codeSet()
	{
		return array_key_exists('nonceStr', $this->values);
	}


	/**
	* ���ö���������չ�ַ���
	* @param string $value 
	**/
	public function SetPackage($value)
	{
		$this->values['package'] = $value;
	}
	/**
	* ��ȡ����������չ�ַ�����ֵ
	* @return ֵ
	**/
	public function GetPackage()
	{
		return $this->values['package'];
	}
	/**
	* �ж϶���������չ�ַ����Ƿ����
	* @return true �� false
	**/
	public function IsPackageSet()
	{
		return array_key_exists('package', $this->values);
	}
	
	/**
	* ����ǩ����ʽ
	* @param string $value 
	**/
	public function SetSignType($value)
	{
		$this->values['signType'] = $value;
	}
	/**
	* ��ȡǩ����ʽ
	* @return ֵ
	**/
	public function GetSignType()
	{
		return $this->values['signType'];
	}
	/**
	* �ж�ǩ����ʽ�Ƿ����
	* @return true �� false
	**/
	public function IsSignTypeSet()
	{
		return array_key_exists('signType', $this->values);
	}
	
	/**
	* ����ǩ����ʽ
	* @param string $value 
	**/
	public function SetPaySign($value)
	{
		$this->values['paySign'] = $value;
	}
	/**
	* ��ȡǩ����ʽ
	* @return ֵ
	**/
	public function GetPaySign()
	{
		return $this->values['paySign'];
	}
	/**
	* �ж�ǩ����ʽ�Ƿ����
	* @return true �� false
	**/
	public function IsPaySignSet()
	{
		return array_key_exists('paySign', $this->values);
	}
}