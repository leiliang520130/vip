<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/4/22
 * Time: 18:15
 */

//创建一个AdminInfo表类
class usersModel extends Model{
    //创建一个删除的方法
    public function remove($id){
        return $this->delete($id);
    }
    public function check($post){//验证
        $username = str_replace("'","",$post['username']);
        $password = MD5($post['password']);
        return $this->getOne("*","username='$username' and password='$password'");
    }
    public function getRow($id){//通过主键获取一条数据
        $r=$this->getRowByKey($id);
        return $r;
    }
    public function insert($post){//添加会员
        return $this->insertValues($post);
    }
    public function updateuser($post,$id){//更新会员信息
        return $this->modify($post,$id);
    }
    public function updateVip($id,$where){//更新会员vip
        return $this->upVip($id,$where);
    }
    public function upVip($id,$where){//更新vip
        $sql="update users set is_vip='$where' WHERE user_id=$id";
        return $this->db->query($sql);
    }
    //分页的制作
    public function getRecordsCount($keyword){
        return $this->getCount($keyword);
    }
    public function getList($fields="*",$page=1,$pageSize=2,$keyword){
        return $this->getPage($fields,$page,$pageSize,$keyword);
    }
    //分页开始
    public function getCount($keyword=""){
        $sql = "select count(*) from `{$this->getTable()}` where username like '%$keyword%' or telephone like '%$keyword%'";
        return $this->db->fetchColumn($sql);
    }
    //获取分页
    public function getPage($fields="*",$page=1,$pageSize=2,$keyword=""){
        $start = ($page-1)*$pageSize;
        $sql = "select $fields from `{$this->getTable()}` where `username` like '%{$keyword}%' or `telephone` like '%{$keyword}%' limit $start,$pageSize";
        return $this->db->fetchAll($sql);
    }
    public function userup($openid,$id){
        $sql = "update users set open_id='$openid' where user_id=$id";
       return $this->db->query($sql);
    }

    //分页结束

}
