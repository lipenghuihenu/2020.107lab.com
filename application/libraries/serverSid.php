<?php
//载入ucpass类
require_once('lib/Ucpaas.class.php');

//初始化必填
//填写在开发者控制台首页上的Account Sid
$options['accountsid']='4f3ad4d749acd8c1f57d8bc80c68c1fe';
//填写在开发者控制台首页上的Auth Token
$options['token']='a64d00e0a1a3b04b002848ad61b0ed3d';

//初始化 $options必填
$ucpass = new Ucpaas($options);