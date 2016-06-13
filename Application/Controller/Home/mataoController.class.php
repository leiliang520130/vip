<?php
require APP_PATH.'wechat/autoload.php';
use Overtrue\Wechat\Server;
use Overtrue\Wechat\Message;
use Overtrue\Wechat\Menu;
use Overtrue\Wechat\MenuItem;
use Overtrue\Wechat\Auth;

define('APPID','wx35d218ce2fcbd5b5');
define('TOKEN','matao');
define('SECRET','a1c6d3791a99d3b354830c59dc136ca2');

class mataoController extends Controller
{
    public function indexAction(){
        $server=new Server(APPID,TOKEN);
        $server->on("message","text",function($message){
            if($message['Content']=="帮助"){
                return Message::make('text')->content("1.用户发送“最新活动”，返回活动列表信息
    2.用户发送“解除绑定”文本信息，（如果用户未绑定，提示“未绑定”）则自动解除用户的绑定信息，回复解除绑定成功！
");
            }
            if($message['Content']=="最新活动"){
                $model=new articleModel();
                $rows = $model->getAllhuo();
                $items = array();
                foreach ($rows as $row){
                    $item = $item = Message::make('news_item')->title($row['title'])->url('http://phpweixin.itsource.cn/team13/index.php?p=Home&c=matao&a=articleView&id='.$row['article_id']);
                    $items[]=$item;
                }
                $news = Message::make('news')->items($items);
                return $news;

            }
            if($message['Content']=="解除绑定"){//解除绑定
                $user= $message['FromUserName'];
                $id = $user;
                $model = new usersModel();
                $row = $model->getOne("*", "open_id='$id'");
                if($row){
                    $id = $row['user_id'];
                    $open_id = "";
                    if ($row) {
                        $model->userup($open_id, $id);
                        require CURRENT_VIEW_PATH . 'matao/relieve.html';
                    }
                    return Message::make('text')->content("解绑成功");
                }else{
                    return Message::make('text')->content("您还没有绑定账号");
                }

            }
        });
        $server->on('event', 'subscribe', function($event){
            return Message::make('text')->content('您好！欢迎关注MaTao');
        });
        $server->on('event','click',function($event){
            if($event['EventKey']=="article"){
                $model=new articleModel();
                $rows = $model->getAllhuo();
                $items = array();
                foreach ($rows as $row){
                    $item = $item = Message::make('news_item')->title($row['title'])->url('http://phpweixin.itsource.cn/team13/index.php?p=Home&c=matao&a=articleView&id='.$row['article_id']);
                    $items[]=$item;
                }
                $news = Message::make('news')->items($items);
                return $news;
            }
        });
        echo $server->serve();
    }
    public function verifyAction(){//验证方法获取openid
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
    public function articleViewAction(){//活动
        $id = $_GET['id'];//活动的id
        $model = new articleModel();
        $row = $model->getRow($id);
        $this->assign('row',$row);
        $this->display('content.html');
    }
    public function bindAction(){//绑定
        $user = $this->verifyAction();
        $id=$user['openid'];
        $model = new usersModel();
        $row = $model->getOne("*","open_id='$id'");
        if($row){
            require  CURRENT_VIEW_PATH.'matao/break.html';
        }else{
            require CURRENT_VIEW_PATH.'matao/bind.html';
        }
    }
    public function relieveAction()
    {//解除绑定
        $user = $this->verifyAction();
        $id = $user['openid'];
        $model = new usersModel();
        $row = $model->getOne("*", "open_id='$id'");
        $id = $row['user_id'];
        $open_id = "";
        if ($row) {
            $re = $model->userup($open_id, $id);
            require CURRENT_VIEW_PATH . 'matao/relieve.html';
        }
    }
    public function bangAction(){//绑定
        $user = $this->verifyAction();
        $post=$_POST;
        $model = new usersModel();
        $row = $model->check($post);
        $id=$row['user_id'];
        $open_id=$user['openid'];
        if($row){
            $model->userup($open_id,$id);
            require CURRENT_VIEW_PATH.'matao/bang.html';
        }else{
            echo "用户名或密码错误";
        }
    }
    public function makeAction(){//预约
        $user = $this->verifyAction();
        $id=$user['openid'];
        $model = new usersModel();
        $row = $model->getOne("*", "open_id='$id'");//获取到该会员的所有信息
        if($row){
            $name=$row['realname'];//会员姓名
        $modelorder = new orderModel();
        $rows = $modelorder->getAll("*"," realname='$name' ");
        $this->assign('rows',$rows);
        $this->assign('name',$name);
        $this->display('matao/order.html');
        }else{
            require CURRENT_VIEW_PATH.'matao/bind.html';
        }

    }
    public function addorderAction(){ //引入添加页面
        $name=$_GET['name'];
        $model=new membersModel();//获取
        $rows = $model->getAll();
        $this->assign("rows",$rows);
        $this->assign("name",$name);
        $this->display("matao/addorder.html");
    }
    public function orderaddAction(){//添加预约
        $post=$_POST;
        $name=$_GET['name'];
        $post['realname']=$name;
        $model=new orderModel();
        if($model->insertValues($post)){
            $this->display("matao/ordersucceed.html");
        }else{
            $this->display("matao/orderdefeat.html");
        }
        
    }
    public function expenstAction(){//消费记录
        $user = $this->verifyAction();
        $id=$user['openid'];
        $model = new usersModel();
        $row = $model->getOne("*", "open_id='$id'");//获取到该会员的所有信息
        if($row) {
            $user_id = $row['user_id'];
            $modelmoney = new historiesModel();
            $rows = $modelmoney->getAll("*", "user_id=$user_id and type='消费'");
            $this->assign('rows',$rows);
            $this->display("matao/expenst.html");
        }else{
            require CURRENT_VIEW_PATH.'matao/bind.html';
        }
    }
    public function topupAction(){//充值排行
        $model=new historiesModel();
        $rows=$model->getAllH("user_id,sum(amount) as sum"," `type`='充值' GROUP BY user_id ORDER BY  sum(amount) DESC limit 0,3" );
        $model1=new usersModel();
        $i=0;
        foreach ($rows as $key=>$row){
            $row1=$model1->getRow($row['user_id']);
            $rows[$key]['name']=$row1['realname'];
            $rows[$key]['num']=++$i;
        }
        $this->assign('rows',$rows);
        $this->display("matao/topup.html");
    }
    public function consumptionAction(){//消费排行
        $model=new historiesModel();
        $rows=$model->getAllH("user_id,sum(amount) as sum"," `type`='消费' GROUP BY user_id ORDER BY  sum(amount) DESC limit 0,3" );
        $model1=new usersModel();
        $i=0;
        foreach ($rows as $key=>$row){
            $row1=$model1->getRow($row['user_id']);
            $rows[$key]['name']=$row1['realname'];
            $rows[$key]['num']=++$i;
        }
        $this->assign('rows',$rows);
        $this->display("matao/consumption.html");
    }
    public function serveAction(){//服务排行
        $model=new historiesModel();
        $rows=$model->getAllHi(" member_id,COUNT(member_id)"," GROUP BY member_id ORDER BY COUNT(member_id) DESC limit 0,3" );
        $model2=new membersModel();
        $i=0;
        foreach($rows as $key=>$row){
            $row2=$model2->getRow($row['member_id']);
            $rows[$key]['name']=$row2['realname'];
            $rows[$key]['num']=++$i;
        }
        $this->assign('rows',$rows);
        $this->display("matao/serve.html");
    }

    public function setMenuAction(){//设置按钮
        $menuService = new Menu(APPID,SECRET);
        $button1 = new MenuItem("最新活动","click","article");
        $button2 = new MenuItem("个人信息");
        $button2_1 = new MenuItem("绑定账号","view",'http://phpweixin.itsource.cn/team13/index.php?p=Home&c=matao&a=bind');
        $button2_2 = new MenuItem("预约美发","view",'http://phpweixin.itsource.cn/team13/index.php?p=Home&c=matao&a=make');
        $button2_3 = new MenuItem("消费记录","view",'http://phpweixin.itsource.cn/team13/index.php?p=Home&c=matao&a=expenst');
        $button2->buttons(array($button2_1,$button2_2,$button2_3));
        $button3 = new MenuItem('排行榜');
        $button3_1 = new MenuItem('充值排行',"view",'http://phpweixin.itsource.cn/team13/index.php?p=Home&c=matao&a=topup');
        $button3_2 = new MenuItem('消费排行',"view",'http://phpweixin.itsource.cn/team13/index.php?p=Home&c=matao&a=consumption');
        $button3_3 = new MenuItem('服务之星','view','http://phpweixin.itsource.cn/team13/index.php?p=Home&c=matao&a=serve');
        $button3->buttons(array($button3_1,$button3_2,$button3_3));
        $menus = array($button1,$button2,$button3);
        try{
            $menuService->set($menus);
            echo '设置成功';
        }catch (\Exception$e) {
            echo'设置失败：'.$e->getMessage();
        }
    }
}