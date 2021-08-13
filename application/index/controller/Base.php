<?php
namespace app\index\controller;
use think\Controller;
class Base extends Controller
{
	public function _empty(){
		$this->redirect("./Wap/index.html");
	}

    protected function _initialize(){
		$config =   session('DB_CONFIG_DATA');
        if(!$config){
            $config =  config_lists();
            session('DB_CONFIG_DATA',$config);
        }
        config($config);
        define('UID',is_login());
		$this->web_path=__ROOT__."/";
		$this->web_title=config("WEB_SITE_TITLE");
		$this->web_logo="/".config('TMPL_PATH')."/Wap/images/".config("WEB_LOGO");
		$this->web_keywords=config("WEB_SITE_KEYWORD");
		$this->web_description=config("WEB_SITE_DESCRIPTION");
		$this->web_icp=config("WEB_SITE_ICP");
		$this->web_url=config("WEB_URL");
		$this->web_currency=config("WEB_CURRENCY");
		$this->wx_pay=config('WX_PAY_MCHID');
        $this->ali_pay=config('ALI_PAY_PARTNER');
        $this->band_pay=config('BAND_PAY_MID');
        $this->yun_pay=config('YUN_PAY_ID');
        $this->pay_pal=config('PAY_PAL');
		$this->web_time=NOW_TIME;
		activity(3,'',UID);
		$this->tplpath="./".config('TMPL_PATH')."/Wap/";
		$this->web_tplpath=$this->web_path.config('TMPL_PATH')."/Wap/";
		config('CACHE_PATH',RUNTIME_PATH."/Cache/".MODULE_NAME."/Wap/");
		$user_auth=session('user_auth');
		$this->username=$user_auth['username'];
		$this->user_msg = M('Message')->where(['uid'=>UID,'is_read'=>0])->count();
    }
    


}