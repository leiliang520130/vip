<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/4/25
 * Time: 17:24
 */
class Controller{
    private $smarty;
    public function __construct()
    {
        $this->smarty = new SmartyTool();
        $this->smarty->setCompileDir(APP_PATH.'View_c');
        $this->smarty->setTemplateDir(CURRENT_VIEW_PATH);

    }
    function assign($name,$values=null){
        //var_dump($name,$values);exit;
        $this->smarty->assign($name,$values);
    }
    function display($filename){
        $this->smarty->display($filename);
    }
    protected static function jump($url,$time=0,$msg=""){
        if(!headers_sent()){
            if($time == 0){
                header("location:$url");
            }else{
                echo $msg;
                header("Refresh:$time;url=$url");
            }
        }else{
            if($time == 0){
                echo "<script>location.href='$url'</script>";
            }else{
                echo $msg;
                echo "<meta http-equiv='refresh' content='$time,url=$url'>";
            }
        }
    }
}