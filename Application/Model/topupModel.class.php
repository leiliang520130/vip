<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/13
 * Time: 13:37
 */
class topupModel extends Model
{
    public function getAllM(){
        $sql = "select * from `topup` order by money asc ";
        //echo $sql;exit;
        return $this->db->fetchAll($sql);
    }
}