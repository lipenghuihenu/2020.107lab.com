<?php
$lib_path = __DIR__;
//载入ucpass类
require_once($lib_path.'/lib/Ucpaas.class.php');

Class Sms {
    private $appid = "025de9b5ce79407a90bd35c09ead614b";	//应用的ID，可在开发者控制台内的短信产品下查看
//    private $templateid = "506214";    //可在后台短信产品→选择接入的应用→短信模板-模板ID，查看该模板ID
    private $templateid = "531805";
    private $uid = "";
    private $ucpass;
    public function __construct()
    {
        //初始化必填
        //填写在开发者控制台首页上的Account Sid
        $options['accountsid']='4f3ad4d749acd8c1f57d8bc80c68c1fe';
        //填写在开发者控制台首页上的Auth Token
        $options['token']='a64d00e0a1a3b04b002848ad61b0ed3d';

        //初始化 $options必填
        $this->ucpass = new Ucpaas($options);
    }

    public function send($param, $mobile){
        return $this->ucpass->SendSms($this->appid, $this->templateid, $param, $mobile, $this->uid);
    }
}


