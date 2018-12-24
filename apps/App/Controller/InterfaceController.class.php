<?php
namespace App\Controller;
use Think\Controller;

use Common\Service\GoodsService;
use Common\Service\OrdersService;
use Common\Service\MemberService;
use Common\Service\CouponService;
use Common\Service\PaymentService;
use Common\Helper\ToolsHelper;
use Common\Service\IndexService;

class InterfaceController extends Controller {
	/**
	 * 错误代码说明
	 * 参考 returnData 方法
	 */
    protected $member_id = 0;
	protected $max_buy_num = 99;
	private $member_info = array();// 用户信息
	private $user = 'lyy12345';// 验证获取token的用户名
	private $password = 'lyy54321';// 验证获取token的用户密码
	public function __construct() {
		parent::__construct();
		$this->writeLog('请求参数：'.var_export($_POST,true));
		// 生成token的用户密码
		$user = I('post.user','','htmlspecialchars');
		$pwd = I('post.password','','htmlspecialchars');
		
		if(empty($user) && empty($pwd)){
			// 验证的token
			$token = I('post.token','','htmlspecialchars');
			$this->verifyToken($token);
		}else{
			$this->makeToken($user,$pwd);
		}
	}

	/**
	 * 生成验证的token
	 */
	private function makeToken($user,$pwd){
		if($user === $this->user && $pwd === md5($this->password)){
			$rand_int = rand(100,1000);// 取一个随机数
			$main_str = $user.md5($this->password);// 主体字符串
			$time_str = time();// 取当前时间戳
			$token = md5($rand_int.$main_str.$time_str);
			$cache = S('interface_token',$token,array('prefix'=>'','expire'=>3600));
			if($cache){
				$data = array('token'=>$token);
				$this->returnData(0,'获取token成功',$data);
			}else{
				$this->returnData(104,'缓存token失败',array());
			}
		}else{
			$this->returnData(101,'用户密码验证失败',array());
		}
	}

	/**
	 * 验证token
	 */
	private function verifyToken($token){
		$t = S('interface_token');
		if(empty($t)){
			$this->returnData(102,'token已过期',array());
		}elseif($token !== md5($t)){
			$this->returnData(103,'token有误或已被更新',array());
		}
	}

	/**
	 * 请求结果，返回值
	 */
	private function returnData($code,$data,$msg = ''){
		$return = array();
		$return['code'] = $code;
		switch ($code) {
			case '101':
				# 101 获取token失败，原因：验证用户密码失败
				$return['msg'] = '获取token失败，原因：验证用户密码失败';
				break;
			case '102':
				# 102 获取token失败，原因：token已过期
				$return['msg'] = '验证token失败，原因：token过期';
				break;
			case '103':
				# 103 获取token失败，原因：token有误或已被更新
				$return['msg'] = '验证token失败，原因：token有误或已被更新';
				break;
			case '104':
				# 104 获取token失败，原因：缓存token失败
				$return['msg'] = '验证token失败，原因：缓存token失败';
				break;
			case '1':
				# 1 请求处理失败，请参考返回的信息 msg
				$return['msg'] = $msg;
				break;
			case '0':
				# 请求成功
				$return['msg'] = $msg;
				break;
		}
		$return['data'] = $data;
		$this->writeLog('返回参数：'.var_export($return,true));
		die(json_encode($return));
	}

	/**
	 * 生成订单
	 * 参数:
	 *  “token”:”121ac6d2788f52684b84653f628139fb”,    // 注意需要md5一次
	 *	“member_id”:”1”,			//用户ID
	 *	“member_name”:”1”,		//用户名
	 *	“member_password”:”1”,	//用户密码 需要md5一次后传递
	 *	“goods_id”:”1”,			//商品ID
	 *	“goods_num”:”1”,			//商品数量
	 *	“goods_price”:”1”,			//商品单价
	 *	“area_info”:”北京 北京市 海淀区”,  //省市区的名称拼到一起，用空格间隔
	 *	”address”:”金隅嘉华大厦1107”,		//地区之后的详细地址
	 *	”mob_phone”:”15038828476”,		//收货人手机号
	 *	”true_name”:”陈可可”,				//收货人姓名
	 *	”order_message”:”速度发货”,		//订单的备注信息
	 *	“return_se_url”:”http://www.abc.com”,			//支付成功的回跳页面，不填则跳到商城默认的回跳页
	 *	“return_er_url”:”http://www.abc.com”,			//支付失败的回跳页面，不填则跳到商城默认的回跳页
	 */
	public function addOrder() {
		
		$member_id = I('post.member_id',0,'intval');
		if(empty($member_id)) $this->returnData(1,array(),'用户ID不能为空');
		$member_name = I('post.member_name','','htmlspecialchars');
		if(empty($member_name)) $this->returnData(1,array(),'用户名不能为空');
		$member_password = I('post.member_password','','htmlspecialchars');
		if(empty($member_password)) $this->returnData(1,array(),'用户密码不能为空');

		$goods_id = I('post.goods_id',0,'intval');
		if(empty($goods_id)) $this->returnData(1,array(),'商品ID不能为空');
		$goods_num = I('post.goods_num',0,'intval');
		if(empty($goods_num)) $this->returnData(1,array(),'商品数量不能为空');

		$true_name = I('post.true_name','','htmlspecialchars');
		if(empty($true_name)) $this->returnData(1,array(),'收货人姓名不能为空');
		$area_info = I('post.area_info','','htmlspecialchars');
		if(empty($area_info)) $this->returnData(1,array(),'收货人省市区不能为空');
		$address = I('post.address','','htmlspecialchars');
		if(empty($address)) $this->returnData(1,array(),'收货人地址不能为空');
		$mob_phone = I('post.mob_phone','','htmlspecialchars');
		if(empty($mob_phone)) $this->returnData(1,array(),'收货人联系电话不能为空');

		$order_message = I('post.order_message','','htmlspecialchars');

		$return_se_url = I('post.return_se_url','','htmlspecialchars');
		$return_se_url = base64_encode($return_se_url);
		$return_er_url = I('post.return_er_url','','htmlspecialchars');
		$return_er_url = base64_encode($return_er_url);
		// member_info 用户信息
		$condition = array();
		$condition['member_id'] = $member_id;
		$member_info = MemberService::getMemberInfo($condition);
		$member_password = \Common\Helper\LoginHelper::passwordMd5($member_password,$member_info['salt']);
		if($member_info['member_username'] !== $member_name){
			$this->returnData(1,array(),'用户名不正确');
		}elseif($member_info['member_passwd'] !== $member_password){
			$this->returnData(1,array(),'用户密码不正确');
		}

		// goods_info 商品信息
		$condition = array();
		$condition['goods_id'] = $goods_id;
		$condition['goods_state'] = 0;// 必须为下架状态
		$goods_info = M('goods')->where($condition)->find();
		$goods_info['goods_num'] = $goods_num;// 商品数量
		
		// address_info 地址信息
		$address_info = array();
		$address_info['address_id'] = 0;
		$address_info['member_id'] = $member_info['member_id'];
		$address_info['member_username'] = '';
		$address_info['true_name'] = $true_name;
		$address_info['area_id'] = 0;
		$address_info['city_id'] = 0;
		$address_info['province_id'] = 0;
		$address_info['area_info'] = $area_info;
		$address_info['address'] = $address;
		$address_info['tel_phone'] = $mob_phone;
		$address_info['mob_phone'] = $mob_phone;
		$address_info['is_default'] = 0;
		
		$resultData = $this->_handleOrder($member_info,$goods_info,$address_info,array(),$order_message,$return_se_url,$return_er_url);

		$code = $resultData['code'];//返回状态码
		
		switch($code) {
			case 0:
				// 添加订单成功，去结算
				$url = SITE_URL."wap/pay.html?order_sn=".$resultData['order_sn']."&return_se_url=".$return_se_url."&return_er_url=".$return_er_url;
				$this->returnData(0,array('pay_url'=>$url),'添加订单成功，请结算');
			case 1:
				$this->returnData(1,array(),'请稍后重试');
			case 2:
				$this->returnData(1,array(),'非法优惠券');
			case 3:
				$this->returnData(1,array(),'库存不足');
		}
	}

	/** 
	 * 添加订单数据
	 */
	private function _handleOrder($member_info,$goods_info,$address_info,$coupon =array(),$order_message= '',$return_se_url='',$return_er_url=''){
		$model = M();
		$model->master(true);
		$model->startTrans();
		
		$order_sn = \Common\Helper\ToolsHelper::getOrderSn('order');
		$total_price = 0;//运费generate
		$flag = 1;
		$_fee = array();
		$voucher_price = $coupon ?  $coupon['rpacket_price'] : 0;
		$voucher_code = $coupon ?  $coupon['rpacket_code'] : 0;
		$voucher_limit = $coupon ? $coupon['rpacket_limit'] : 0;//coupon 优惠券
		$rpacket_t_id = $coupon ? $coupon['rpacket_t_id'] : 0;//coupon 优惠券
		$id = $model->table(C('DB_PREFIX').'generate')->master(true)->add(array('id'=>null));//预留分表
		
		$goods_id = $goods_info['goods_id'];
		$goods_num = $goods_info['goods_num'];
		$goods_storage = $goods_info['goods_storage'];

		$_fee[] = OrdersService::getOneLogistics($goods_info);
		if($goods_num > $goods_storage) {
			return array('code'=>3,'order_id'=>0);//库存不足
		}
		$orderGoodinfo[] = array(
				'order_id'=>$id,
				'goods_id'=>$goods_id,
				'goods_name'=>$goods_info['goods_name'],
				'goods_price'=>$goods_info['goods_price'],
				'goods_num'=>$goods_info['goods_num'],
				'goods_image'=>$goods_info['goods_image'],
				'goods_pay_price'=>0,
				'buyer_id'=>$member_info['member_id'],
				'goods_spec'=>$goods_info['spec_name'],
				'gc_id'=>$goods_info['gc_id'],
				'add_time'=>TIMESTAMP,
				'goods_common_id'=>$goods_info['goods_common_id'],
		);
		$total_price += (($goods_info['goods_price']*100)*$goods_num)/100;
		
		$goodResult = $model->table(C('DB_PREFIX').'goods')->master(true)->where('goods_id=%d and goods_storage>=%d',array($goods_id,$goods_info['goods_num']))->setDec('goods_storage',$goods_info['goods_num']);
		if(!$goodResult) {//减库存失败
			$model->rollback();
			return array('code'=>3,'order_id'=>0,'order_sn'=>0);//库存不足
		}
		D('Goods')->delSkuCache($goods_id);
		
		
		if($coupon && $voucher_limit > $total_price) {
			$model->rollback();
			return array('code'=>2,'order_id'=>0,'order_sn'=>0);//优惠券非法
		}
		
		$shipping_fee = OrdersService::getExpense($total_price,$_fee);
		
		$order = array(
			'order_id'=>$id,
			'order_sn'=>$order_sn,
			'pay_sn'=>$order_sn,
			'buyer_id'=>$member_info['member_id'],
			'buyer_name'=>$member_info['member_username'],
			'buyer_email'=>$member_info['member_email'],
			'buyer_phone'=>$member_info['member_mobile'],
			'add_time'=>TIMESTAMP,
			'goods_amount'=>$total_price,//商品总价格
			'order_amount'=>$total_price - $voucher_price + $shipping_fee['shipping_fee'],//订单总价格
			'shipping_fee'=>$shipping_fee['shipping_fee'],//订单运费
			'return_se_url'=>$return_se_url,//成功的回跳地址
			'return_er_url'=>$return_er_url,//失败的回跳地址
		);
		
		$common = array(
			'order_id'=>$id,
			'voucher_price'=>$voucher_price,
			'voucher_code'=>$voucher_code,
			'reciver_name'=>$address_info['true_name'],
			'reciver_info'=>serialize($address_info),
			'reciver_province_id'=>$address_info['area_id'],
			'reciver_city_id'=>$address_info['city_id'],
			'promotion_total'=>0,//订单总优惠金额
			'order_message'=>$order_message,//订单留言
		);

		$ordersResult = $model->table(C('DB_PREFIX').'orders')->master(true)->add($order);
		$orderGoodsResult = $model->table(C('DB_PREFIX').'order_goods')->master(true)->addAll($orderGoodinfo);
		$orderCommon = $model->table(C('DB_PREFIX').'order_common')->master(true)->add($common);
		
		if($orderGoodsResult && $ordersResult && $orderCommon) {
			if(!empty($coupon)) {
				$resultCoupon = OrdersService::_changeCoupon($model,$coupon,$member_info['member_id'],$id);
				if(!$resultCoupon) {
					$flag = 1;
					$model->rollback();
					return array('code'=>$flag,'order_id'=>0,'order_sn'=>0);//库存不足
				}
			}
			$model->commit();
			// 短信通知
			// if($member_info['member_mobile']){
			// 	$smsdata = array('order_sn' => $order_sn,'time' => 30);
			// 	SmsService::insert_sms_notice($member_info['member_id'],$member_info['member_mobile'],$smsdata,'orderpayment');
			// }
			$flag = 0;
		}else{
			$flag = 1;
			$model->rollback();
		}
		return array('code'=>$flag,'order_id'=>!$flag ? $id :0,'order_sn'=>$order_sn);//库存不足
	}

	/**
     * 写日志
     */
    public function writeLog($text) {
        $month = date('Y-m');
        // echo APP_ROOT."/data/Logs/interface/".$month.".txt";die;
        file_put_contents ( APP_ROOT."data/Logs/interface/".$month.".txt", date ( "Y-m-d H:i:s" ) . "  " . $text . "\r\n", FILE_APPEND );
    }
}