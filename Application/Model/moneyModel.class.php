<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/5/11
 * Time: 11:57
 */
class moneyModel extends Model{
    public function getRowAll($id){

        return $this->getAll("*","user_id='$id'");
    }


}