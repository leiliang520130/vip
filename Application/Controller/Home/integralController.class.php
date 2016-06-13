<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/5/15
 * Time: 22:26
 */
class integralController extends userPlatController{
    public function showAction(){
        $model = new usersModel();
        $id = $_SESSION['user_id'];
        $rowUser = $model->getOne("*","user_id='$id'");
        //var_dump($rowUser['integral']);exit;
        $modelGift = new giftModel();
        $rows = $modelGift->getAll();
        $this->assign("rows",$rows);
        $this->assign("rowUser",$rowUser);
        $this->display("integral/integral.html");
    }
    public function exchangeAction(){
        $gift_id = $_POST['gift_id'];
        $modelGift = new giftModel();
        $row = $modelGift->getRowByKey($gift_id);
        $id = $_SESSION['user_id'];
        $modelUser = new usersModel();
        $rowUser = $modelUser->getRowByKey($id);
        $post = array();
        $post['username'] = $rowUser['username'];
        $post['giftname'] = $row['introduce'];
        $post['phone'] = $rowUser['telephone'];
        $post['address'] = $_POST['address'];
        $modelAdd = new addressModel();
        $modelUser = new usersModel();
        $rowInt = $modelUser->getRow($id);
        $shen = $rowInt['integral']-$row['integral'];
        if($shen < 0){
            echo "<script>alert('积分不足兑换失败');location.href='index.php?p=Home&c=integral&a=show'</script>";
            exit;
        }
        $postUser = array();
        $postUser['integral'] = $shen;
        $postUser['user_id'] = $id;
        $modelUser->modify($postUser);
        //更新库存
        $row['stock'] = $row['stock']-1;
        if($row['stock'] < 0){
            echo "<script>alert('库存不足');location.href='index.php?p=Home&c=integral&a=show'</script>";
            exit;
        }
        $modelGift->modify($row);
        //添加商城订单构建方法
        $postShop = array();
        $postShop['realname'] = $rowUser['realname'];
        $postShop['phone'] = $rowUser['telephone'];
        $postShop['address'] = $_POST['address'];
        $postShop['number'] = uniqid(time());
        $modelShop = new shoppingModel();
        $modelShop->insertValues($postShop);
        //添加商城订单构建方法结束
        if($modelAdd->insertValues($post)){
            echo "<script>alert('兑换成功');location.href='index.php?p=Home&c=shopping&a=list'</script>";
        }else{
            echo "<script>alert('兑换失败');location.href='index.php?p=Home&c=integral&a=show'</script>";
        }

    }
}