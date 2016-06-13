<?php
require APP_PATH.'wechat/autoload.php';
use Overtrue\Wechat\Server;
use Overtrue\Wechat\Message;
use Overtrue\Wechat\Menu;
use Overtrue\Wechat\MenuItem;
use Overtrue\Wechat\Auth;
/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/5/16
 * Time: 14:27
 */
define('APPID','wx090dfc843cc5dba0');
define('TOKEN','leiliang');
define('SECRET','32428822afd1ab8cf6f7b1e5eb49246d');

class leiliangController extends Controller{
    public function indexAction(){
        $server=new Server(APPID, TOKEN);
        //监听text消息
        $server->on('message', 'text', function($message) {
            //$FromUserName = $message['FromUserName'];
            //$ToUserName = (string)$xml->ToUserName;
            //$Content = $message['Content'];
            if($message['Content'] == '帮助'){
                return Message::make('text')->content('1.用户发送“最新活动”，返回活动列表信息
2.用户发送“解除绑定”文本信息，（如果用户未绑定，提示“未绑定”）则自动解除用户的绑定信息，回复解除绑定成功！');
            }
            if($message['Content'] == '最新活动'){
                $model = new articleModel();
                $articles = $model->getAllhuo();
                $items = array();
                foreach($articles as $article){
                    $item = Message::make('news_item')->title($article['title'])->url('http://phpweixin.itsource.cn/team13/index.php?p=Home&c=leiliang&a=content&id='.$article['article_id']);
                    $items[] = $item;
                }
                $news = Message::make('news')->items($items);
                return $news;
            }
            if($message['Content'] == '解除绑定'){
                $open_id = $message['FromUserName'];//用户的openid
                //判断用户的openid是否已绑定
                //去数据表里面查该openid是否存在
                $model = new usersModel();
                $row = $model->getOne("*","open_id='$open_id'");
                if($row){
                    $id = $row['user_id'];
                    $open_id = "";
                    $model->userup($open_id,$id);//绑定成功
                    return Message::make('text')->content("解绑成功");
                }else{
                    return Message::make('text')->content("未绑定");
                }

            }
           return Message::make('text')->content($message['Content']);
        });

        //关注事件
        $server->on('event', 'subscribe', function($event){
            return Message::make('text')->content('您好！欢迎关注');
        });

        //监听click事件
        $server->on('event', 'click', function($event) {

            //error_log('收到关注事件，关注者openid: ' . $event['FromUserName']);
           if($event['EventKey'] == 'article'){//如果点击的是 “最新活动”菜单
                //从数据表里面获取最新活动（最多10条）
                $model = new articleModel();
                $articles = $model->getAllhuo();
                $items = array();
                foreach($articles as $article){
                    $item = Message::make('news_item')->title($article['title'])->url('http://phpweixin.itsource.cn/team13/index.php?p=Home&c=leiliang&a=content&id='.$article['article_id']);
                    $items[] = $item;
                }
                $news = Message::make('news')->items($items);
                return $news;
           }

            //return Message::make('text')->content($event['EventKey']);//可以调试点击的是哪个菜单
        });

        echo $server->serve();
    }

    //添加最新活动页面
    public function contentAction(){
        $id = $_GET['id'];
        $model = new articleModel();
        $row = $model->getRow($id);
        $this->assign("row",$row);
        $this->display("content.html");
    }

    public function bind(){
        //获取用户openid
        session_start();
        $auth = new Auth(APPID, SECRET);
        if (empty($_SESSION['weixin_user'])) {
            $user = $auth->authorize(); // 返回用户 Bag
            $_SESSION['weixin_user'] = $user->all();
            // 跳转到其它授权才能访问的页面
        } else {
            $user = $_SESSION['weixin_user'];
        }

        return $user;
    }

    //绑定账号页面
    public function bindAction()
    {
        $user = $this->bind();
        $open_id = $user['openid'];//用户的openid
        //判断用户的openid是否已绑定
        //去数据表里面查该openid是否存在
        $model = new usersModel();
        $result = $model->getOne("*","open_id='$open_id'");
        //该openid对应的用户是否存在
        if($result){//如果存在，显示解绑按钮
            $this->display("leiliang/rebang.html");
        }else{//如果不存在，显示绑定表单
            $this->display("leiliang/bind.html");
        }

    }
    //绑定验证
    public function bangAction()
    {
        $user = $this->bind();
        $post = $_POST;
        //登录验证，去数据表里面查出该账号密码对应的用户$user
        $model = new usersModel();
        $row = $model->check($post);
        $id = $row['user_id'];
        $open_id = $user['openid'];
        if($row){ //用户存在
            //绑定（update），将openid放入对应用户的记录里面
            $model->userup($open_id,$id);//绑定成功
            $this->display("leiliang/bang.html");
        }else{//用户不存在
            echo "说明用户名或密码不正确";
        }

    }

    //解除绑定
    public function rebangAction(){
        $user = $this->bind();
        $open_id = $user['openid'];//用户的openid
        //判断用户的openid是否已绑定
        //去数据表里面查该openid是否存在
        $model = new usersModel();
        $row = $model->getOne("*","open_id='$open_id'");
        $id = $row['user_id'];
        $open_id = "";
        $model->userup($open_id,$id);//绑定成功
        $this->display("leiliang/rebangsuccess.html");
    }
    public function orderAction(){
        $user = $this->bind();
        $open_id = $user['openid'];//用户的openid
        //判断用户的openid是否已绑定
        //去数据表里面查该openid是否存在
        $model = new usersModel();
        $row = $model->getOne("*","open_id='$open_id'");
        //该openid对应的用户是否存在
        if($row){//如果存在，显示解绑按钮
            $modelorder = new orderModel();
            $name = $row['realname'];
            $rows = $modelorder->getAll("*"," realname='$name' ");
            $this->assign("rows",$rows);
            $this->display("leiliang/order.html");
        }else{//如果不存在，显示绑定表单
            echo "你还没有绑定";
            $this->display("leiliang/bind.html");
        }
    }

    //添加预约的方法
    public function showOrderAction(){
        $model=new membersModel();//显示理发师
        $rowm=$model->getListAll();
        $this->assign('rowm',$rowm);
        $user = $this->bind();
        $open_id = $user['openid'];//用户的openid
        //判断用户的openid是否已绑定
        //去数据表里面查该openid是否存在
        $model = new usersModel();
        $row = $model->getOne("*","open_id='$open_id'");
        if($row){
            $realname = $row['realname'];
            $this->assign("realname",$realname);
            $this->display("leiliang/addOrder.html");
        }else{
            echo "你还没有绑定";
            $this->display("leiliang/bind.html");
        }
    }
    //预约入库
    public function addOrderAction(){
        $post=$_POST;
        $model=new orderModel;
        if($model->insertorder($post)){//判断返回结果
            $this->display("leiliang/ordersuccess.html");
        }else{
            echo "预约失败";
        }
    }

    //消费记录
    public function historiesAction(){
            $user = $this->bind();
            $open_id = $user['openid'];//用户的openid
            //判断用户的openid是否已绑定
            //去数据表里面查该openid是否存在
            $model = new usersModel();
            $row = $model->getOne("*","open_id='$open_id'");
            if($row){
                $user_id = $row['user_id'];
                $model=new historiesModel();
                $rows = $model->getRowAll($user_id);
                $this->assign("rows",$rows);
                $this->display("leiliang/consume.html");
            }else{
                echo "你还没有绑定";
                $this->display("leiliang/bind.html");
            }


    }
    //排行榜

    public function rechargeAction(){
        $model=new historiesModel();
        $rows=$model->getAllH("user_id,sum(amount) as sum"," `type`='充值' GROUP BY user_id ORDER BY  sum(amount) DESC limit 0,3" );
        $model1=new usersModel();
        $i=0;
        foreach ($rows as $key=>$row){
            $row1=$model1->getRow($row['user_id']);
            $rows[$key]['name']=$row1['realname'];
            $rows[$key]['num']=++$i;
        }
        $this->assign("rows",$rows);
        $this->display("leiliang/rank1.html");
    }
    public function consumptionAction(){
        $model=new historiesModel();
        $rows=$model->getAllH("user_id,sum(amount) as sum"," `type`='消费' GROUP BY user_id ORDER BY  sum(amount) DESC limit 0,3" );
        $model1=new usersModel();
        $i=0;
        foreach ($rows as $key=>$row){
            $row1=$model1->getRow($row['user_id']);
            $rows[$key]['name']=$row1['realname'];
            $rows[$key]['num']=++$i;
        }
        $this->assign("rows",$rows);
        $this->display("leiliang/rank2.html");
    }
    public function serveAction(){
        $model=new historiesModel();
        $rows=$model->getAllHi(" member_id,COUNT(member_id)"," GROUP BY member_id ORDER BY COUNT(member_id) DESC limit 0,3" );
        $model2=new membersModel();
        $i=0;
        foreach($rows as $key=>$row){
            $row2=$model2->getRow($row['member_id']);
            $rows[$key]['name']=$row2['realname'];
            $rows[$key]['num']=++$i;
        }
        $this->assign("rows",$rows);
        $this->display("leiliang/rank3.html");
    }

    //添加菜单
    public function setMenuAction(){
        $menuService = new Menu(APPID, SECRET);
        $button0 = new MenuItem("最新活动", 'click', 'article');//设置一个一级菜单

        $button1=new MenuItem("个人信息");//设置一个带二级菜单的一级菜单
        $button1_1 = new MenuItem('绑定账号', 'view', 'http://phpweixin.itsource.cn/team13/index.php?p=Home&c=leiliang&a=bind');
        $button1_2 = new MenuItem('预约美发', 'view', 'http://phpweixin.itsource.cn/team13/index.php?p=Home&c=leiliang&a=order');
        $button1_3 = new MenuItem('消费记录', 'view', 'http://phpweixin.itsource.cn/team13/index.php?p=Home&c=leiliang&a=histories');


        $button2=new MenuItem("排行榜");//设置一个带二级菜单的一级菜单
        $button2_1 = new MenuItem('充值排行', 'view', 'http://phpweixin.itsource.cn/team13/index.php?p=Home&c=leiliang&a=recharge');
        $button2_2 = new MenuItem('消费排行', 'view', 'http://phpweixin.itsource.cn/team13/index.php?p=Home&c=leiliang&a=consumption');
        $button2_3 = new MenuItem('服务之星', 'view', 'http://phpweixin.itsource.cn/team13/index.php?p=Home&c=leiliang&a=serve');



        $button1->buttons(array($button1_1,$button1_2,$button1_3 ));
        $button2->buttons(array($button2_1,$button2_2,$button2_3 ));
        $menus=array($button0,$button1,$button2);
        try {
            $menuService->set($menus);// 请求微信服务器
            echo '设置成功！';
        } catch (\Exception $e) {
            echo '设置失败：' . $e->getMessage();
        }
    }

    //测试页面
    public function testAction(){
        $this->display("leiliang/weixin.html");
    }

    //获取菜单
    public function getMenuAction()
    {
        $menuService = new Menu(APPID, SECRET);
        $menus = $menuService->get();
        echo '<pre>';
        var_dump($menus);
    }
}