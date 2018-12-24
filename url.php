<?php
//微信菜单跳转

$n=0 ;
if (isset($_GET['n'])){
	$n = intval($_GET['n']) ;
}

$cUrl = "http://mall.weicainet.cn/" ;

switch ($n)
{
case 11: //排列35论坛
$cUrl = "http://bbs.weicainet.com/bbs.php" ;
  break;  
case 12: //特区论坛
  $cUrl = "http://99.tqcp.net/forum.php?mod=forumdisplay&fid=2&mobile=2" ;
  break;
case 13: //微彩点播
  $cUrl = "http://mall.weicainet.cn/index-8.html" ;
  break;
case 14: //会员精选
  $cUrl = "http://mall.weicainet.cn/top10.php" ;
  break;
case 15: //彩图册子
  $cUrl = "http://mall.weicainet.cn/caiban_list.php" ;
  break;
case 16: //排列五点播
  $cUrl = "http://mall.weicaipl3.cn/index-4.html" ;
  break;
case 21: //杀码平台
  $cUrl = "http://www.tqcp.net/wx_smlr2015.php" ;
  break;  
case 22: //芝麻开门
$cUrl = "http://www.tqcp.net/ca/canvas.html" ;
//  $cUrl = "http://mall.weicainet.cn/zm-8.html" ;
  break;
case 23: //精彩统计
  $cUrl = "http://www.tqcp.net/count_type.php" ;
  break;
case 24: //经典彩版
  $cUrl = "http://www.tqcp.net/wxgg_jdcb2016a.php" ;
  break;
case 25: //更多功能
$cUrl = "http://www.tqcp.net/wx_gdgn2015.php" ;
  break;
case 31: //开奖号码
  $cUrl = "http://tool.weicainet.cn/lottery_sj.php" ;
  break;  
case 32: //微信客服
  $cUrl = "http://wpa.qq.com/msgrd?v=3&uin=37472612&site=qq&menu=yes" ;
  break;
case 33: //微彩软件
  $cUrl = "http://soft.tqcp.net/qrcode/o.php" ;
  break;
case 34: //特区商城
$cUrl = "https://m.tqcp.net/down-3.html" ;
  //$cUrl = "http://www.tqshq.com/wap/" ;
  break;
case 35:
$cUrl = "http://mall.weicaipl3.cn/club/club_wx.php" ;
  break;
default:
}

header("location:{$cUrl}") ;
?>

