<?php
namespace Common\PayMent\WxPay;
use Common\PayMent\WxPay\WxPayDataBase;
/**
 * 
 * ͳһ�µ��������
 * @author widyhu
 *
 */
class WxPayUnifiedOrder extends WxPayDataBase
{
	/**
	* ����΢�ŷ���Ĺ����˺�ID
	* @param string $value 
	**/
	public function SetAppid($value)
	{
		$this->values['appid'] = $value;
	}
	/**
	* ��ȡ΢�ŷ���Ĺ����˺�ID��ֵ
	* @return ֵ
	**/
	public function GetAppid()
	{
		return $this->values['appid'];
	}
	/**
	* �ж�΢�ŷ���Ĺ����˺�ID�Ƿ����
	* @return true �� false
	**/
	public function IsAppidSet()
	{
		return array_key_exists('appid', $this->values);
	}


	/**
	* ����΢��֧��������̻���
	* @param string $value 
	**/
	public function SetMch_id($value)
	{
		$this->values['mch_id'] = $value;
	}
	/**
	* ��ȡ΢��֧��������̻��ŵ�ֵ
	* @return ֵ
	**/
	public function GetMch_id()
	{
		return $this->values['mch_id'];
	}
	/**
	* �ж�΢��֧��������̻����Ƿ����
	* @return true �� false
	**/
	public function IsMch_idSet()
	{
		return array_key_exists('mch_id', $this->values);
	}


	/**
	* ����΢��֧��������ն��豸�ţ��̻��Զ���
	* @param string $value 
	**/
	public function SetDevice_info($value)
	{
		$this->values['device_info'] = $value;
	}
	/**
	* ��ȡ΢��֧��������ն��豸�ţ��̻��Զ����ֵ
	* @return ֵ
	**/
	public function GetDevice_info()
	{
		return $this->values['device_info'];
	}
	/**
	* �ж�΢��֧��������ն��豸�ţ��̻��Զ����Ƿ����
	* @return true �� false
	**/
	public function IsDevice_infoSet()
	{
		return array_key_exists('device_info', $this->values);
	}


	/**
	* ��������ַ�����������32λ���Ƽ�����������㷨
	* @param string $value 
	**/
	public function SetNonce_str($value)
	{
		$this->values['nonce_str'] = $value;
	}
	/**
	* ��ȡ����ַ�����������32λ���Ƽ�����������㷨��ֵ
	* @return ֵ
	**/
	public function GetNonce_str()
	{
		return $this->values['nonce_str'];
	}
	/**
	* �ж�����ַ�����������32λ���Ƽ�����������㷨�Ƿ����
	* @return true �� false
	**/
	public function IsNonce_strSet()
	{
		return array_key_exists('nonce_str', $this->values);
	}

	/**
	* ������Ʒ��֧������Ҫ����
	* @param string $value 
	**/
	public function SetBody($value)
	{
		$this->values['body'] = $value;
	}
	/**
	* ��ȡ��Ʒ��֧������Ҫ������ֵ
	* @return ֵ
	**/
	public function GetBody()
	{
		return $this->values['body'];
	}
	/**
	* �ж���Ʒ��֧������Ҫ�����Ƿ����
	* @return true �� false
	**/
	public function IsBodySet()
	{
		return array_key_exists('body', $this->values);
	}


	/**
	* ������Ʒ������ϸ�б�
	* @param string $value 
	**/
	public function SetDetail($value)
	{
		$this->values['detail'] = $value;
	}
	/**
	* ��ȡ��Ʒ������ϸ�б��ֵ
	* @return ֵ
	**/
	public function GetDetail()
	{
		return $this->values['detail'];
	}
	/**
	* �ж���Ʒ������ϸ�б��Ƿ����
	* @return true �� false
	**/
	public function IsDetailSet()
	{
		return array_key_exists('detail', $this->values);
	}


	/**
	* ���ø������ݣ��ڲ�ѯAPI��֧��֪ͨ��ԭ�����أ����ֶ���Ҫ�����̻�Я���������Զ�������
	* @param string $value 
	**/
	public function SetAttach($value)
	{
		$this->values['attach'] = $value;
	}
	/**
	* ��ȡ�������ݣ��ڲ�ѯAPI��֧��֪ͨ��ԭ�����أ����ֶ���Ҫ�����̻�Я���������Զ������ݵ�ֵ
	* @return ֵ
	**/
	public function GetAttach()
	{
		return $this->values['attach'];
	}
	/**
	* �жϸ������ݣ��ڲ�ѯAPI��֧��֪ͨ��ԭ�����أ����ֶ���Ҫ�����̻�Я���������Զ��������Ƿ����
	* @return true �� false
	**/
	public function IsAttachSet()
	{
		return array_key_exists('attach', $this->values);
	}


	/**
	* �����̻�ϵͳ�ڲ��Ķ�����,32���ַ��ڡ��ɰ�����ĸ, ����˵�����̻�������
	* @param string $value 
	**/
	public function SetOut_trade_no($value)
	{
		$this->values['out_trade_no'] = $value;
	}
	/**
	* ��ȡ�̻�ϵͳ�ڲ��Ķ�����,32���ַ��ڡ��ɰ�����ĸ, ����˵�����̻������ŵ�ֵ
	* @return ֵ
	**/
	public function GetOut_trade_no()
	{
		return $this->values['out_trade_no'];
	}
	/**
	* �ж��̻�ϵͳ�ڲ��Ķ�����,32���ַ��ڡ��ɰ�����ĸ, ����˵�����̻��������Ƿ����
	* @return true �� false
	**/
	public function IsOut_trade_noSet()
	{
		return array_key_exists('out_trade_no', $this->values);
	}


	/**
	* ���÷���ISO 4217��׼����λ��ĸ���룬Ĭ������ң�CNY������ֵ�б������������
	* @param string $value 
	**/
	public function SetFee_type($value)
	{
		$this->values['fee_type'] = $value;
	}
	/**
	* ��ȡ����ISO 4217��׼����λ��ĸ���룬Ĭ������ң�CNY������ֵ�б�����������͵�ֵ
	* @return ֵ
	**/
	public function GetFee_type()
	{
		return $this->values['fee_type'];
	}
	/**
	* �жϷ���ISO 4217��׼����λ��ĸ���룬Ĭ������ң�CNY������ֵ�б�������������Ƿ����
	* @return true �� false
	**/
	public function IsFee_typeSet()
	{
		return array_key_exists('fee_type', $this->values);
	}


	/**
	* ���ö����ܽ�ֻ��Ϊ���������֧�����
	* @param string $value 
	**/
	public function SetTotal_fee($value)
	{
		$this->values['total_fee'] = $value;
	}
	/**
	* ��ȡ�����ܽ�ֻ��Ϊ���������֧������ֵ
	* @return ֵ
	**/
	public function GetTotal_fee()
	{
		return $this->values['total_fee'];
	}
	/**
	* �ж϶����ܽ�ֻ��Ϊ���������֧������Ƿ����
	* @return true �� false
	**/
	public function IsTotal_feeSet()
	{
		return array_key_exists('total_fee', $this->values);
	}


	/**
	* ����APP����ҳ֧���ύ�û���ip��Native֧�������΢��֧��API�Ļ���IP��
	* @param string $value 
	**/
	public function SetSpbill_create_ip($value)
	{
		$this->values['spbill_create_ip'] = $value;
	}
	/**
	* ��ȡAPP����ҳ֧���ύ�û���ip��Native֧�������΢��֧��API�Ļ���IP����ֵ
	* @return ֵ
	**/
	public function GetSpbill_create_ip()
	{
		return $this->values['spbill_create_ip'];
	}
	/**
	* �ж�APP����ҳ֧���ύ�û���ip��Native֧�������΢��֧��API�Ļ���IP���Ƿ����
	* @return true �� false
	**/
	public function IsSpbill_create_ipSet()
	{
		return array_key_exists('spbill_create_ip', $this->values);
	}


	/**
	* ���ö�������ʱ�䣬��ʽΪyyyyMMddHHmmss����2009��12��25��9��10��10���ʾΪ20091225091010���������ʱ�����
	* @param string $value 
	**/
	public function SetTime_start($value)
	{
		$this->values['time_start'] = $value;
	}
	/**
	* ��ȡ��������ʱ�䣬��ʽΪyyyyMMddHHmmss����2009��12��25��9��10��10���ʾΪ20091225091010���������ʱ������ֵ
	* @return ֵ
	**/
	public function GetTime_start()
	{
		return $this->values['time_start'];
	}
	/**
	* �ж϶�������ʱ�䣬��ʽΪyyyyMMddHHmmss����2009��12��25��9��10��10���ʾΪ20091225091010���������ʱ������Ƿ����
	* @return true �� false
	**/
	public function IsTime_startSet()
	{
		return array_key_exists('time_start', $this->values);
	}


	/**
	* ���ö���ʧЧʱ�䣬��ʽΪyyyyMMddHHmmss����2009��12��27��9��10��10���ʾΪ20091227091010���������ʱ�����
	* @param string $value 
	**/
	public function SetTime_expire($value)
	{
		$this->values['time_expire'] = $value;
	}
	/**
	* ��ȡ����ʧЧʱ�䣬��ʽΪyyyyMMddHHmmss����2009��12��27��9��10��10���ʾΪ20091227091010���������ʱ������ֵ
	* @return ֵ
	**/
	public function GetTime_expire()
	{
		return $this->values['time_expire'];
	}
	/**
	* �ж϶���ʧЧʱ�䣬��ʽΪyyyyMMddHHmmss����2009��12��27��9��10��10���ʾΪ20091227091010���������ʱ������Ƿ����
	* @return true �� false
	**/
	public function IsTime_expireSet()
	{
		return array_key_exists('time_expire', $this->values);
	}


	/**
	* ������Ʒ��ǣ�����ȯ�������Żݹ��ܵĲ�����˵���������ȯ�������Ż�
	* @param string $value 
	**/
	public function SetGoods_tag($value)
	{
		$this->values['goods_tag'] = $value;
	}
	/**
	* ��ȡ��Ʒ��ǣ�����ȯ�������Żݹ��ܵĲ�����˵���������ȯ�������Żݵ�ֵ
	* @return ֵ
	**/
	public function GetGoods_tag()
	{
		return $this->values['goods_tag'];
	}
	/**
	* �ж���Ʒ��ǣ�����ȯ�������Żݹ��ܵĲ�����˵���������ȯ�������Ż��Ƿ����
	* @return true �� false
	**/
	public function IsGoods_tagSet()
	{
		return array_key_exists('goods_tag', $this->values);
	}


	/**
	* ���ý���΢��֧���첽֪ͨ�ص���ַ
	* @param string $value 
	**/
	public function SetNotify_url($value)
	{
		$this->values['notify_url'] = $value;
	}
	/**
	* ��ȡ����΢��֧���첽֪ͨ�ص���ַ��ֵ
	* @return ֵ
	**/
	public function GetNotify_url()
	{
		return $this->values['notify_url'];
	}
	/**
	* �жϽ���΢��֧���첽֪ͨ�ص���ַ�Ƿ����
	* @return true �� false
	**/
	public function IsNotify_urlSet()
	{
		return array_key_exists('notify_url', $this->values);
	}


	/**
	* ����ȡֵ���£�JSAPI��NATIVE��APP����ϸ˵���������涨
	* @param string $value 
	**/
	public function SetTrade_type($value)
	{
		$this->values['trade_type'] = $value;
	}
	/**
	* ��ȡȡֵ���£�JSAPI��NATIVE��APP����ϸ˵���������涨��ֵ
	* @return ֵ
	**/
	public function GetTrade_type()
	{
		return $this->values['trade_type'];
	}
	/**
	* �ж�ȡֵ���£�JSAPI��NATIVE��APP����ϸ˵���������涨�Ƿ����
	* @return true �� false
	**/
	public function IsTrade_typeSet()
	{
		return array_key_exists('trade_type', $this->values);
	}


	/**
	* ����trade_type=NATIVE���˲����ش�����idΪ��ά���а�������ƷID���̻����ж��塣
	* @param string $value 
	**/
	public function SetProduct_id($value)
	{
		$this->values['product_id'] = $value;
	}
	/**
	* ��ȡtrade_type=NATIVE���˲����ش�����idΪ��ά���а�������ƷID���̻����ж��塣��ֵ
	* @return ֵ
	**/
	public function GetProduct_id()
	{
		return $this->values['product_id'];
	}
	/**
	* �ж�trade_type=NATIVE���˲����ش�����idΪ��ά���а�������ƷID���̻����ж��塣�Ƿ����
	* @return true �� false
	**/
	public function IsProduct_idSet()
	{
		return array_key_exists('product_id', $this->values);
	}


	/**
	* ����trade_type=JSAPI���˲����ش����û����̻�appid�µ�Ψһ��ʶ���µ�ǰ��Ҫ���á���ҳ��Ȩ��ȡ�û���Ϣ���ӿڻ�ȡ���û���Openid�� 
	* @param string $value 
	**/
	public function SetOpenid($value)
	{
		$this->values['openid'] = $value;
	}
	/**
	* ��ȡtrade_type=JSAPI���˲����ش����û����̻�appid�µ�Ψһ��ʶ���µ�ǰ��Ҫ���á���ҳ��Ȩ��ȡ�û���Ϣ���ӿڻ�ȡ���û���Openid�� ��ֵ
	* @return ֵ
	**/
	public function GetOpenid()
	{
		return $this->values['openid'];
	}
	/**
	* �ж�trade_type=JSAPI���˲����ش����û����̻�appid�µ�Ψһ��ʶ���µ�ǰ��Ҫ���á���ҳ��Ȩ��ȡ�û���Ϣ���ӿڻ�ȡ���û���Openid�� �Ƿ����
	* @return true �� false
	**/
	public function IsOpenidSet()
	{
		return array_key_exists('openid', $this->values);
	}
}