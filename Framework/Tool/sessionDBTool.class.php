<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/4/26
 * Time: 23:17
 */
class sessionDBTool{
    private $db;
    public function __construct()
    {

        session_set_save_handler(
            array($this,"open"),
            array($this,"close"),
            array($this,"read"),
            array($this,"write"),
            array($this,"destroy"),
            array($this,"gc")

        );

        session_start();
    }

    public function open(){
       // require "./DB.class.php";
       $this->db = DB::getInstance($GLOBALS['config']['db']);
        return true;
    }
    public function close(){
        return true;
    }
    public function read($sessId){
        $sql = "select sessdata from `session` where sessid='$sessId'";
        $data = $this->db->fetchColumn($sql);
        if($data != null){
            return $data;
        }else{
            return "";
        }
    }
    public function write($sessId,$sessData){
        $sql = "insert into `session` VALUES ('$sessId','$sessData',now()) on duplicate key UPDATE sessdata='$sessData',last_time=now()";
        return $this->db->query($sql);
    }
    public function destroy($sessId){
        $sql = "delete from `session` WHERE sessid='$sessId'";
        return $this->db->query($sql);
    }
    public function gc($lifeTime){
        $sql = "delete from `session` WHERE last_time+$lifeTime<now()";
        return $this->db->query($sql);
    }


}