<?php

$gatewayUrl = "http://www.tqshq.com/api.php/interface/addOrder";
$data = array() ;

// ��ȡtokenʱʹ�� ��������Ҫ������������
// $data['user'] = 'lyy12345';
// $data['password'] = md5('lyy54321');

//1����ȡtocken,60*60,1Сʱ��Ч
$tstr = time(); //��ǰʱ������
$token_life_intval = 60*60;
$token_str = file_get_contents("token.json");//{"token":"0000000","fresh_time":78789897878}

$token = "" ;
//echo $token_str ;
if(!empty($token_str)){
    $token_obj = json_decode($token_str,true);
    $token = $token_obj["token"];
    $token_life = $token_obj["fresh_time"];
}else{ //��һ�δ���token
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
    $token_str =  $data_json ;
}

if(($token_life+$token_life_intval) <= ($tstr+30) ){ //��ǰ30�����token
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
  $token_str =  $data_json ;
}

$token_obj = json_decode($token_str,true);
$token = $token_obj["token"];
echo ($token) ;

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
    $ch = curl_init();//��ʼ��curl
    curl_setopt($ch, CURLOPT_URL,$url);//ץȡָ����ҳ
    curl_setopt($ch, CURLOPT_HEADER, 0);//����header
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//Ҫ����Ϊ�ַ������������Ļ��
    if($ispost){
        curl_setopt($ch, CURLOPT_POST, 1);//post�ύ��ʽ
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    }
    $data = curl_exec($ch);//����curl
    curl_close($ch);
    return $data;
}

?>
