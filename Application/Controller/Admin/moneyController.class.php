<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/5/11
 * Time: 11:57
 */
class moneyController extends platController{
    private $very=null;
    private $full=null;
    private $giv=null;
    private $updatevip=null;
    private $updateid=null;
    public function listAction(){
        $model = new historiesModel();
        $id = $_GET['id'];
        $pageSize = 5;//每页显示条数
        $showPage = 5; //页码
        //获取分页参数
        $page = isset($_GET['page'])?$_GET['page']:1;
        if($page <= 1) $page=1;
        $num = $model->getRecordsCountMoney($id);
        $totalPage = ceil($num/$pageSize);
        if($page >= $totalPage) $page = $totalPage;
        //计算页数
        $total_pages = $totalPage;
        //计算偏移量
        $pageoffset = ($showPage-1)/2;
        //初始化数据
        $stat = 1;
        $end = $total_pages;
        if($total_pages>$showPage){
            if($page>$pageoffset+1){

            }
            if($page>$pageoffset){
                $stat = $page - $pageoffset;
                $end = $total_pages>$page+$pageoffset ? $page+$pageoffset : $total_pages;
            }else{
                $stat = 1;
                $end = $total_pages>$showPage ? $showPage : $total_pages;
            }
            if($page+$pageoffset>$total_pages){
                $stat=$stat-($page+$pageoffset-$end);
            }

        }
        if($page > $totalPage) $page = $totalPage;
        $rows = $model->getListMoney("*",$page,$pageSize,$id);
        $this->assign("id",$id);
        $this->assign("num",$num);
        $this->assign("total_pages",$total_pages);
        $this->assign("page",$page);
        $this->assign("stat",$stat);
        $this->assign("end",$end);
        $this->assign("rows",$rows);
        $this->display("money/list.html");
    }
    public function increaseAction(){
        $post = $_POST;
        $user_id=$post['user_id'];
        $amount=$post['amount'];
        $modeltopup=new topupModel();
        $rowtopup=$modeltopup->getAllM();
        foreach($rowtopup as $row){
            if($amount>=$row['money']){
                $this->giv=$row['give'];
            }
        }
        $modelUser=new usersModel();
        $modelvip=new vipModel();
        $allvip=$modelvip->getAll();
        foreach($allvip as $value){
            if($amount>=$value['vip_contidion']){
                $this->updatevip=$value['vip_lelve'];
            }
        }
        $viplelve= $this->updatevip;
        $rowus=$modelUser->getRow("$user_id");
        if($rowus['is_vip']<$viplelve){
            $modelUser->upVip($user_id,$viplelve);
        }
        $recharge=$this->full;
        if(empty($recharge)){
            $post['remainder'] = $post['money']+$post['amount']+$this->giv;
        }else{
            $post['remainder'] = $post['money']+$post['amount']+$post['amount']*$recharge+$this->giv;
        }
        $userModel = new usersModel();
        $post['money'] = $post['remainder'];
        $uid = $post['user_id'];
        $userModel->updateuser($post,"user_id='$uid'");
        $model = new historiesModel();
        if($model->insert($post)){
            static::jump("index.php?p=Admin&c=usersAdmin&a=listuser");
        }else{
            static::jump("index.php?p=Admin&c=usersAdmin&a=listuser",3,"数据不合法");
        }
    }
    public function reduceAction(){
        $post = $_POST;
        $post['code'] = isset($post['code'])?$post['code']:null;
        $user_id=$post['user_id'];
        $modelUser=new usersModel();
        $rowUser=$modelUser->getRowByKey($user_id);
        $vip=isset($rowUser['is_vip']) ? $rowUser['is_vip']: null;
        if(!empty($vip)){
            $modelvip=new vipModel();
            $rowvip=$modelvip->getOne("*","vip_lelve='$vip'");
            $this->very=$rowvip['vip_discount']/10;
        }
        $discount=$this->very;
        $modelCode = new codesModel();
        $code = $post['code'];
        $row = $modelCode->getOne("*","code='$code'");
        if(!empty($post['code'])){
            if(!$row){
                echo "<script>alert('代金劵不存在');location.href='index.php?p=Admin&c=usersAdmin&a=listuser'</script>";
                exit;
            }
            if($row['user_id']!=$post['user_id']){
                echo "<script>alert('代金劵不存在');location.href='index.php?p=Admin&c=usersAdmin&a=listuser'</script>";
                exit;
            }
            if($row['status']=="已使用"){
                echo "<script>alert('代金劵已使用');location.href='index.php?p=Admin&c=usersAdmin&a=listuser'</script>";
                exit;
            }


        }
        //消费积分的保存
        $integral = array();
        //VIP折扣
        if(empty($discount)){
            $shengyu = $row['money'] - $post['amount'];
            $integral['integral'] = $post['amount'];//获得消费积分
        }else{
            $shengyu = $row['money'] - $post['amount']*$discount;
            $integral['integral'] = $post['amount']*$discount;//获得消费积分
        }

        if($shengyu > 0){
            $integral['integral'] = 0;
            $row['money'] = $shengyu;//row['money']积分
            $modelCode->editCode($row);
        }
        if($shengyu <= 0){
            $integral['integral'] = abs($shengyu);
            $post['money'] = $post['money'] + $shengyu;
            if($post['money'] < 0){
                static::jump("index.php?p=Admin&c=usersAdmin&a=listuser",2,"余额不足");
                exit;
            }
            if(!empty($row['code_id'])){
                $row['status'] = "已使用";
                $modelCode->editCode($row);
            }

        }
        /*$shengyu = $post['amount']-$this->codeMoney;
        if($shengyu > 0){
            $post['remainder'] = $post['money']-$shengyu;
        }else{

        }*/
        $post['remainder'] = $post['money'];
        //消费积分
        //$integral['user_id'] = $post['user_id'];
        $user_id = $post['user_id'];
        //$integralModel = new integralModel();
        //$integralModel->insertValues($integral);
        $modelUser = new usersModel();
        $rowUser = $modelUser->getRow($user_id);
        $rowUser['integral'] = $rowUser['integral'] + $integral['integral'];
        $modelUser->modify($rowUser);
        //消费积分结束
        $userModel = new usersModel();
        $post['money'] = $post['remainder'];
        $uid = $post['user_id'];
        $userModel->updateuser($post,"user_id='$uid'");
        $model = new historiesModel();
        if($model->insert($post)){
            static::jump("index.php?p=Admin&c=usersAdmin&a=listuser");
        }else{
            static::jump("index.php?p=Admin&c=usersAdmin&a=listuser",3,"数据不合法");
        }
    }
}