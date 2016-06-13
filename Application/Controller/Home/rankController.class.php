<?php

/**
 * Created by PhpStorm.
 * User: mttm
 * Date: 2016/5/11
 * Time: 11:03
 */
class rankController extends userPlatController
{
    private  $recharge;//充值
    private $consumption;//消费
    private $serve;//服务
    private function recharge(){
        $model=new historiesModel();
        $rows=$model->getAllH("user_id,sum(amount) as sum"," `type`='充值' GROUP BY user_id ORDER BY  sum(amount) DESC limit 0,3" );
        $model1=new usersModel();
        $i=0;
        foreach ($rows as $key=>$row){
            $row1=$model1->getRow($row['user_id']);
            $rows[$key]['name']=$row1['realname'];
            $rows[$key]['num']=++$i;
        }
        $this->recharge=$rows;
    }
    private function consumption(){
        $model=new historiesModel();
        $rows=$model->getAllH("user_id,sum(amount) as sum"," `type`='消费' GROUP BY user_id ORDER BY  sum(amount) DESC limit 0,3" );
        $model1=new usersModel();
        $i=0;
        foreach ($rows as $key=>$row){
            $row1=$model1->getRow($row['user_id']);
            $rows[$key]['name']=$row1['realname'];
            $rows[$key]['num']=++$i;
        }
        $this->consumption=$rows;
    }
    private function serve(){
        $model=new historiesModel();
        $rows=$model->getAllHi(" member_id,COUNT(member_id)"," GROUP BY member_id ORDER BY COUNT(member_id) DESC limit 0,3" );
        $model2=new membersModel();
        $i=0;
        foreach($rows as $key=>$row){
            $row2=$model2->getRow($row['member_id']);
            $rows[$key]['name']=$row2['realname'];
            $rows[$key]['num']=++$i;
        }
        $this->serve=$rows;
    }
    public function listAction(){
        $this->recharge();
        $this->consumption();
        $this->serve();
        $rowr=$this->recharge;//充值
        $rowc=$this->consumption;//充值
        $rows2=$this->serve;//充值
        $this->assign('rowr',$rowr);//充值
        $this->assign('rowc',$rowc);//充值
        $this->assign('row2',$rows2);//充值
        $this->display("ranking/ranking.html");
    }

}