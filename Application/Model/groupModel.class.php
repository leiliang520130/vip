<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/5/10
 * Time: 9:14
 */
class groupModel extends Model{
    //添加一个获取所以记录
    public function getList(){
        return $this->getAll();
    }
    public function insert($post){
        $rows = $this->getList();
        $name = $post['name'];
        foreach($rows as $row){
            if($row['name'] == $name){
                return false;
            }
        }
        return $this->insertValues($post);
    }
    //添加删除的方法
    public function remove($id){
        return $this->delete($id);
    }
    public function update($post){
        $rows = $this->getList();
        $name = $post['name'];
        foreach($rows as $row){
            if($row['name'] == $name){
                return false;
            }
        }
        return $this->modify($post);
    }
}