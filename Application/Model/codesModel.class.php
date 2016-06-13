<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/11
 * Time: 15:05
 */
class codesModel extends Model
{
    public function getlist($table,$where){
      return $this->getAll($table,$where);
    }
    public function insertCode($post){
        return $this->insertValues($post);
    }
    public function removeCode($id){
        return $this->delete($id);
    }
    public function editCode($post){
        return $this->modify($post);
    }

}