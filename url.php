<?php
//΢�Ų˵���ת

$n=0 ;
if (isset($_GET['n'])){
	$n = intval($_GET['n']) ;
}

$cUrl = "http://mall.weicainet.cn/" ;

switch ($n)
{
case 11: //����35��̳
$cUrl = "http://bbs.weicainet.com/bbs.php" ;
  break;  
case 12: //������̳
  $cUrl = "http://99.tqcp.net/forum.php?mod=forumdisplay&fid=2&mobile=2" ;
  break;
case 13: //΢�ʵ㲥
  $cUrl = "http://mall.weicainet.cn/index-8.html" ;
  break;
case 14: //��Ա��ѡ
  $cUrl = "http://mall.weicainet.cn/top10.php" ;
  break;
case 15: //��ͼ����
  $cUrl = "http://mall.weicainet.cn/caiban_list.php" ;
  break;
case 16: //������㲥
  $cUrl = "http://mall.weicaipl3.cn/index-4.html" ;
  break;
case 21: //ɱ��ƽ̨
  $cUrl = "http://www.tqcp.net/wx_smlr2015.php" ;
  break;  
case 22: //֥�鿪��
$cUrl = "http://www.tqcp.net/ca/canvas.html" ;
//  $cUrl = "http://mall.weicainet.cn/zm-8.html" ;
  break;
case 23: //����ͳ��
  $cUrl = "http://www.tqcp.net/count_type.php" ;
  break;
case 24: //����ʰ�
  $cUrl = "http://www.tqcp.net/wxgg_jdcb2016a.php" ;
  break;
case 25: //���๦��
$cUrl = "http://www.tqcp.net/wx_gdgn2015.php" ;
  break;
case 31: //��������
  $cUrl = "http://tool.weicainet.cn/lottery_sj.php" ;
  break;  
case 32: //΢�ſͷ�
  $cUrl = "http://wpa.qq.com/msgrd?v=3&uin=37472612&site=qq&menu=yes" ;
  break;
case 33: //΢�����
  $cUrl = "http://soft.tqcp.net/qrcode/o.php" ;
  break;
case 34: //�����̳�
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

