<?php


class Joinus_model extends CI_Model
{
    /**
     * @param $info
     * @return bool
     */
    public function join($info){
        $status = $this->db->insert('joinus',$info);
        return $status > 0;

        $redis = new redis();
        $redis->connect('localhost','6379');
        foreach ($info as $key => $val){
            $redis->set('info:'.$info['phone'].':'.$key,$val);
        }
        return true;
    }

    public function check($info){
        $result = $this->db->get_where('joinus',array('phone'=>$info['phone']))->result_array();
        return empty($result);

        $redis = new redis();
        $redis->connect('localhost','6379');
        if($redis->get('info:'.$info['phone'].':phone')==null){
            return true;
        }
        return false;

    }
}