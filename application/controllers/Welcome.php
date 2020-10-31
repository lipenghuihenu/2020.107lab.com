<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Joinus_model','join');
    }

    public function index()
	{
		$this->load->view('2020/former');
	}

	public function page2018()
    {
        $this->load->view('2018/former');
    }

    public function page2019(){
	    $this->load->view('2019/former');
    }

    public function joinUs(){
        $data = $this->input->post('data');
        $data = explode('&',$data);
        $flag = true;
        foreach ($data as &$value){
            $value = urldecode($value);
            list($key,$val) = explode('=',$value,2);
            $info[$key] = $val;
            if($val == '') $flag = false;
        }
        $info['time'] = date('y-m-d h:m:s',time());
        if($flag && $this->join->check($info)){
            $result = $this->join->join($info);
        }elseif(!$flag){
            exit(json_encode(['code'=>2,'msg'=>'请填写完整的数据！','data'=>[]],JSON_UNESCAPED_UNICODE));
        }else{
            exit(json_encode(['code'=>3,'msg'=>'已报名请勿重复报名！！','data'=>[]],JSON_UNESCAPED_UNICODE));
        }

        if($result === true){
            $this->load->library('Sms');
            $status = $this->sms->send($info['name'],$info['phone']);
            ob_clean();
            exit(json_encode(['code'=>0,'msg'=>'报名成功','data'=>[]],JSON_UNESCAPED_UNICODE));
        }else{
            exit(json_encode(['code'=>1,'msg'=>'报名失败','data'=>[]],JSON_UNESCAPED_UNICODE));
        }
    }
}
