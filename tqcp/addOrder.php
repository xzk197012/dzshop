<?php
header('Content-type:text/html;charset="utf-8"');

$gatewayUrl = "http://www.tqshq.com/api.php/interface/addOrder";

function request_post($url = '',$ispost=true, $post_data = array()) {
    if (empty($url) || empty($post_data)) {
        return false;
    }

    $o = "";
    foreach ( $post_data as $k => $v )
    {
        $o.= "$k=" . urlencode( $v ). "&" ;
    }
    $post_data = substr($o,0,-1);
    $key=md5(base64_encode($post_data));
    if($ispost){
        $url=$url;
    }else{
        $url = $url.'?'.$post_data;
    }

    // $curlPost = 'key='.$key;
    header("Content-type: text/html; charset=utf-8");
    $ch = curl_init();//初始化curl
    curl_setopt($ch, CURLOPT_URL,$url);//抓取指定网页
    curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
    if($ispost){
        curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    }
    $data = curl_exec($ch);//运行curl
    curl_close($ch);
    return $data;
}

$data = $_POST;

// 获取token时使用 正常请求不要带这两个参数
// $data['user'] = 'lyy12345';
// $data['password'] = md5('lyy54321');


//1、获取tocken,60*60,1小时有效
$tstr = time(); //当前时间秒数
$token_life_intval = 60*60;
$token_str = file_get_contents("token.json");//{"token":"0000000","fresh_time":78789897878}

if(!empty($token_str)){
    $token_obj = json_decode($token_str,true);
    $token = $token_obj["token"];
    $token_life = $token_obj["fresh_time"];
}else{ //第一次创建token
    $data['user'] = 'lyy12345';
    $data['password'] = md5('lyy54321');
    $gatewayUrl="http://www.tqshq.com/api.php/interface";
    $res_str = request_post($gatewayUrl,true,$data);
    $res_array = json_decode($res_str,true);
    //var_dump($res_array);
    $data_json='{"token":"';
    $data_json.= $res_array['msg']['token'];
    $data_json.='","fresh_time":';
    $data_json.= time();
    $data_json.='}';
    file_put_contents("token.json",$data_json);
}

if( ($token_life+$token_life_intval) <= ($tstr+30) ){ //提前30秒更新token
  $data['user'] = 'lyy12345';
  $data['password'] = md5('lyy54321');
  $gatewayUrl="http://www.tqshq.com/api.php/interface";
  $res1 = request_post($gatewayUrl,true,$data);
  $res_array1 = json_decode($res1,true);
  //var_dump($res1);
  $data_json='{"token":"';
  $data_json.= $res_array1['msg']['token'];
  $data_json.='","fresh_time":';
  $data_json.= time();
    $data_json.='}';
  file_put_contents("token.json",$data_json);
}else{
    // 正常请求的数据
    if((isset($_POST['goods_id']) || isset($_POST['goods_num']) || isset($_POST['goods_price'])) && (!empty($_POST['goods_id']) || !empty($_POST['goods_num']) || !empty($_POST['goods_price']) )){
        //echo $token;
        $data['token'] = md5($token);
        $data['member_id'] = '1';
        $data['member_name'] = '13907544831';
        $data['member_password'] = md5('hinews218');
        $data['goods_id'] = intval($_POST['goods_id']);
        $data['goods_num'] = intval($_POST['goods_num']);
        $data['goods_price'] = $_POST['goods_price'];
        $data['area_info'] = $_POST['area_info'];
        $data['address'] = $_POST['address'];
        $data['mob_phone'] = $_POST['mob_phone'];
        $data['true_name'] = $_POST['true_name'];
        $data['order_message'] = $_POST['order_message'];
        $data['return_url'] = 'http://www.baidu.com';
				$data['return_se_url'] = ($_POST['return_se_url']);
				$data['return_er_url'] = ($_POST['return_er_url']);
				
        //var_dump($data);
        $res = request_post($gatewayUrl,true,$data);
        //var_dump($res);//die;
        $res_end = json_decode($res,true);
        //header('Location:'.$res_end[]);
        //header('Location:'.$res);die;
        // var_dump($res_end);die;
        header('Location:'.$res_end['data']['pay_url']);
    }

}

/*
*  “token”:”121ac6d2788f52684b84653f628139fb”,    // 注意需要md5一次
*  “member_id”:”1”,            //用户ID
*  “member_name”:”1”,      //用户名
*  “member_password”:”1”,  //用户密码 需要md5一次后传递
*  “goods_id”:”1”,         //商品ID
*  “goods_num”:”1”,            //商品数量
*  “goods_price”:”1”,          //商品单价
*  “return_url”:”http://www.abc.com”,          //支付完成的回跳页面，不填则跳到商城默认的回跳页
*  “area_info”:”北京 北京市 海淀区”,  //省市区的名称拼到一起，用空格间隔
*  ”address”:”金隅嘉华大厦1107”,     //地区之后的详细地址
*  ”mob_phone”:”15038828476”,      //收货人手机号
*  ”true_name”:”陈可可”,              //收货人姓名
*  ”order_message”:”速度发货”,     //订单的备注信息
*/
?>
<!DOCTYPE html>
<html>
<head>
<title>XXX商品购买页面</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    商品ID：<input type="text" value="172" name="goods_id"><br>
    商品数量：<input type="text" value="1" name="goods_num"><br>
    商品价格：<input type="text" readonly value="1.00" name="goods_price"><br>
    寄送地址：<input type="text" name="area_info" value="北京 北京市 海淀区"><br>
    详细地址：<input type="text" name="address" value="金隅嘉华大厦1107"><br />
    收货人手机号：<input type="text" name="mob_phone" value="1002999231"><br>
    收货人姓名：<input type="text" name="true_name" value="凌云义"><br>
    定单备注：<input type="text" name="order_message" value="速度发货"><br>
    <input type="hidden" id="return_se_url" name="return_se_url" value="http://bbs.tqcp.net/"
    <input type="hidden" id="return_er_url" name="return_er_url" value="http://www.tqshq.com/addOrder.php">
    <button type="submit">下单购买</button>
</form>
</body>
</html>
