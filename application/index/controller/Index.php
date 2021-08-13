<?php
namespace app\index\controller;
use think\Controller;
class Index extends Base
{
	
	public function _initialize(){
		parent::_initialize();
	}
	
    public function index()
    {
		$groupon = db('Groupon')->select();
		$list_type = ["手机平板","电脑办公","数码影音","女性时尚","美食天地","潮流新品","家居商品","其他商品"];
		foreach($groupon as $k => $v){
			$groupon[$k]['difftime'] = 100000;
			$groupon[$k]['jd'] = "60%";
			$groupon[$k]['name'] = "商品名称";
			$groupon[$k]['shop_price'] = "100.00";
			$groupon[$k]['pic'] = '/Picture/Shop/2016-01-03/5688806402f62.jpg';
		}
		$slider = db('Slider')->select();
		
		$this->assign('web_title','demo');
		$this->assign('web_tplpath','/static/');
		$this->assign('login','0');
		$this->assign('groupon',$groupon);
		$this->assign('slider',$slider);
		$this->assign('username','wenzi');
		$this->assign('list_type',$list_type);
		$this->assign('','');
		return view();
    }

    public function turntable($name = 'ThinkPHP5')
    {
       return view('index/activity/turntable');
    }
}
