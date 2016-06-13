<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/4/22
 * Time: 18:15
 */

//创建一个AdminInfo表类
class membersModel extends Model{
    //创建一个删除的方法
    public function remove($id){
        return $this->delete($id);
    }
    public function check($post){
        $username = str_replace("'","",$post['username']);
        $password = md5($post['password']);
        return $this->getOne("*","username='$username' and password='$password'");
    }
    public function getRow($id){
        return $this->getRowByKey($id);

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

    //分页结束
    //获取所以数据的方法
    public function getListAll(){
       return $this->getAll();
    }
    //更新方法
    public function update($post){
        return $this->modify($post);
    }
    //出入方法
    public function insert($post){
        $post['password'] = md5($post['password']);
        return $this->insertValues($post);
    }
}