<?php
namespace Admin\Controller;
use Think\Controller;
class TemplateController extends BaseController {
	public function test() {
		$this->display('test');
	}
	public function testadd() {
		if($_POST['ok']){
			$itemtype = $_POST['itemtype'];
			$title = $_POST['title'];
			$is_must = $_POST['is_must'];
			$item_order = $_POST['item_order'];
			$item_options = $_POST['item_options'];
			$add = array(
					'subject'=>date('Y-m-d H:i:s'),
					'desc'=>date('Y-m-d H:i:s'),
					'backurl'=>date('Y-m-d H:i:s'),
			);
			if($itemtype && count($itemtype) && count($title)){
				$fid = M('form')->add($add);
			}
			foreach( $itemtype as $index => $value ) {
				if(empty($value) || empty($title[$index])){
					$this->showmessage('error','第'.($index+1).'内容不完整');
				}
				$id = array();
				if($item_options[$index]){
					foreach( $item_options[$index] as $ok => $ov ) {
						if($ov){
							$add_options = array(
								'title'=>$ov,
								'dateline'=>TIMESTSMP,
							);
							$id[] = M('form_item_options')->add($add_options);
						}
					}
				}
				$addAll[] = array(
					'fid'=>$fid,
					'itemtype'=>$value,
					'title'=>$title[$index],
					'item_order'=>$item_order[$index],
					'content'=>$id ? implode(',',$id) : '',
					//'is_must'=>$is_must[$index],
					'dateline'=>TIMESTSMP,
				);
			}
			if($addAll){
				$return  = M('form_items')->addAll($addAll);
			}
			if($return) {
				$this->showmessage('success','创建成功');
			}
			$this->showmessage('error','创建失败');
		}else{
			$form = array(
				'input'=>'输入框',
				'textarea'=>'textarea文本域',
				'select'=>'select选择框',
				'checkbox'=>'checkbox复选框',
				'radio'=>'radio单选按钮',
				'file'=>'file附件上传',
			);
			$this->assign('form',$form);
			$this->display('testadd');
		}
	}
	public function freightTemplate2(){
		$this->display('freightTemplate2');
    }
	public function freightTemplate(){
		$this->display('freightTemplate');
    }
	public function data(){
		$this->display('data');
    }
	public function fightGroupChoice(){
		$this->display('fightGroupChoice');
    }
	public function FightGroups(){
		$this->display('FightGroups');
    }
	public function iconAlert(){
		$this->display('iconAlert');
    }
	public function coupon(){
		$this->display('coupon');
    }
	public function management(){
		$this->display('management');
    }
	public function tonglan(){
		$this->display('tonglan');
    }
	public function logistics(){
		$this->display('logistics');
    }
	public function LogisticsDetails(){
		$this->display('LogisticsDetails');
    }
	public function select(){
		$this->display('select');
    }
	public function firstpage(){
		$this->display('firstpage');
    }
	public function addSpec(){
		$this->display('addSpec');
    }
	public function addFocus(){
		$this->display('addFocus');
    }
	public function deleCoupon(){
		$this->display('deleCoupon');
    }
	public function login(){
		$this->display('login');
    }
	public function notice(){
		$this->display('notice');
    }
	public function deliverSetting(){
		$this->display('deliverSetting');
    }
	public function shippedSetting(){
		$this->display('shippedSetting');
    }
	public function orderDisplay(){
		$this->display('orderDisplay');
    }
	public function commodityControl(){
		$this->display('commodityControl');
    }
	public function releaseFive(){
		$this->display('releaseFive');
    }
	public function releaseFour(){
		$this->display('releaseFour');
    }
	public function releaseThree(){
		$this->display('releaseThree');
    }
	public function releaseTwo(){
		$this->display('releaseTwo');
    }
	public function releaseOne(){
		$this->display('releaseOne');
    }
	public function statistics(){
		$this->display('statistics');
    }
	public function survey(){
		$this->display('survey');
    }
	public function nav(){
		$this->display('nav');
    }
	public function details2(){
		$this->display('details2');
    }
	public function details(){
		$this->display('details');
    }
	public function classify(){
		$this->display('classify');
    }
	public function evaluate(){
		$this->display('evaluate');
    }
	public function address(){
		$this->display('address');
    }
	public function ImgUpload2(){
		$this->display('ImgUpload2');
    }
	public function Index(){
		$this->display('Index');
    }
	public function OrderProductList(){
		$this->display('OrderProductList');
    }
	public function Tit(){
		$this->display('Tit');
    }
	public function show_index(){
		$this->display('show_index');
    }
	public function Popup(){
		$this->display('Popup');
    }
	public function Color(){
		$this->display('Color');
    }
	public function OrderDetails(){
		$this->display('OrderDetails');
    }
	public function ImgUpload(){
		$this->display('ImgUpload');
    }
	public function SKU(){
		$this->display('SKU');
    }
	public function MailSetting(){
		$this->display('MailSetting');
    }
	public function AddArea(){
		$this->display('AddArea');
    }
	public function RegionalSetting(){
		$this->display('RegionalSetting');
    }
	public function BasicSetting(){
		$this->display('BasicSetting');
    }
	public function OrderMaganement(){
		$this->display('OrderMaganement');
    }
	public function addgroup(){
		$this->display('addgroup');
    }
	public function memberList(){
		$this->display('memberlist');
    }
    public function premissions(){
        $this->display('premissions');
		//$this->display('customer');
    }
	 
	
}