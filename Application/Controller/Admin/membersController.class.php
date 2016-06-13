<?php

//构建控制器类
class membersController extends platController{
    //实现一个显示方法
    public function showAction(){
        $this->display("index.html");

    }
    public function list1Action(){
        $model = new membersModel();
        $rows = $model->getAll();
        $this->assign("rows",$rows);
        $this->display("list.html");
    }
    public function listAction(){
        $pageSize = 4;//每页显示条数
        $showPage = 5; //页码
        //获取分页参数
        $page = isset($_GET['page'])?$_GET['page']:1;
        //分页
        $keyword = isset($_GET['search']) ? $_GET['search']:"";

        //判断分页点
        if($page <= 1) $page=1;
        $model = new membersModel();
        $num = $model->getRecordsCount($keyword);
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
        $rows = $model->getList("*",$page,$pageSize,$keyword);
        if(!$rows){
            //static::jump("index.php?p=Admin&c=members&a=list",3,"搜索不存在!");
            echo "<script>alert('搜索不存在');</script>";
            echo "<meta http-equiv='refresh' content='0,url=index.php?p=Admin&c=members&a=list'>";
            exit;
        }
        $model1 = new groupModel();
        $group = $model1->getAll();
        $this->assign("num",$num);
        $this->assign("group",$group);
        $this->assign("total_pages",$total_pages);
        $this->assign("keyword",$keyword);
        $this->assign("page",$page);
        $this->assign("stat",$stat);
        $this->assign("end",$end);
        $this->assign("rows",$rows);
        $this->display("./members/list.html");
    }
    //实现一个删除方法
    public function removeAction(){
        //拿到id进行下一步删除操作
        $id = $_GET['id'];
        $modelH = new historiesModel();
        $rowH = $modelH->getAll("*"," member_id='$id' ");
        if($rowH){
            echo "<script>alert('该员工有服务记录不能删除!');location.href='index.php?p=Admin&c=members&a=list';</script>";
            exit;
        }
        //创建一个删除model
        $model = new membersModel();
        //调用删除方法
        $model->remove($id);
        //删除后跳转到首页
        header("location:index.php?p=Admin&c=members&a=list");

    }
    //显示代金劵姓名
    private $name;
    private function nameAction(){//获取显示的会员名
        $model=new codesModel();
        $model1=new usersModel();
        $rows=$model->getlist("*","status='未使用'");
        foreach ($rows as $key=>$row){
            $rowu=$model1->getRow($row['user_id']);
            $rows[$key]['username']=$rowu['username'];
        }
        $this->name=$rows;
    }
    //载入登陆页面
    public function loginAction(){
        //活动表
        $model = new articleModel();
        $rowsA = $model->getAll();
        $this->assign("rowsA",$rowsA);

        //代金劵
        $this->nameAction();
        $rows=$this->name;
        $this->assign('rows',$rows);
        $this->display("login.html");
    }
    //显示详细页面
    public function contentAction(){
        $id = $_GET['id'];
        $model = new articleModel();
        $row = $model->getRow($id);
        $this->assign("row",$row);
        $this->display("article/content.html");
    }
    //退出页面
    public function loginOutAction(){
        unset($_SESSION['isLogin']);
        unset($_SESSION['code']);
        if(isset($_COOKIE['id']) && $_COOKIE['pwd']){
            setcookie("id",$_COOKIE['id'],time()-1);
            setcookie("pwd",$_COOKIE['id'],time()-1);
        }
        static::jump("index.php?p=Admin&c=members&a=login",3,"退出成功3秒后跳转!");
    }
    //登陆验证方法
    public function checkAction(){
        //session_start();
        new sessionDBTool();
        $post = $_POST;
        $model = new membersModel();
        $row = $model->check($post);
        if(!CaptchaTool::checkCode($post['code'])){
            //static::jump("index.php?p=Admin&c=members&a=login",3,"验证码错误!");
            echo "<script>alert('验证码错误!');location.href='index.php?p=Admin&c=members&a=login';</script>";
            exit;
        }
        if($row){
            //记录登录ip和时间
            $login = array();
            $last_login = date('Y-m-d H:i:s');
            $last_loginip = $_SERVER["REMOTE_ADDR"];
            $login['member_id'] = $row['member_id'];
            $login['last_login'] = $last_login;
            $login['last_loginip'] = $last_loginip;
            $model = new membersModel();
            $model->update($login);
            //设置session
            $_SESSION['isLogin'] = true;
            /*setcookie("username",$row['username']);
            setcookie("member_id",$row['member_id']);*/
            $_SESSION['member_id'] = $row['member_id'];
            $_SESSION['username'] = $row['username'];
            if(isset($_POST['remember'])){
                setcookie("id",$row['member_id'],time()+3600);
                setcookie("pwd",md5($row['password']),time()+3600);
            }else{
                setcookie("id",$row['member_id'],time()-1);
                setcookie("pwd",md5($row['password']),time()-1);
            }
            static::jump("index.php?p=Admin&c=ranking&a=list");
        }else{
            static::jump("index.php?p=Admin&c=members&a=login",2,"用户名或密码错误!");
        }
    }

    public function insertAction(){
        $post = $_POST;
        $file=$_FILES["photo"];
        $upload = new FileUpLoadTool();
        $name = $upload->upload($file);
        $post['photo'] = $name;
        $model = new membersModel();
        if($model->insert($post)){
            static::jump("index.php?p=Admin&c=members&a=list");
        }else{
            static::jump("index.php?p=Admin&c=members&a=list",3,"数据不合法");
        }
    }
    //添加一个修改方法
    public function updateAction(){
        $post = $_POST;
        $file=$_FILES["photo"];
        $upload = new FileUpLoadTool();
        $name = $upload->upload($file);
        $post['photo'] = $name;
        if($post['photo']==null){
            unset($post['photo']);
        }
        if($post['password'] == null){
            unset($post['password']);
        }else{
            $post['password'] = md5($post['password']);
        }
        $model = new membersModel();
        if($model->update($post)){
            static::jump("index.php?p=Admin&c=members&a=list");
        }else{
            static::jump("index.php?p=Admin&c=members&a=list",3,"用户已存在");
        }
    }

}
