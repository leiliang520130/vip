<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/4/28
 * Time: 18:06
 */
class CaptchaTool{
    //数据取字符串
    public static function getCode($max=4){
        $str="123456789QERTYUIPASDFGHJKLZXCVBNM";
        $str=str_shuffle($str);
        return substr($str,0,$max);
    }
    //绘制验证码
    public static function generate(){
        //绘制一个真彩色画布
        $img = imagecreatetruecolor(110,41);
        //设置一个颜色，背景待用
        $color = imagecolorallocate($img,255,255,255);
        //验证码边框颜色
        $lineColor = imagecolorallocate($img,218,226,229);
        //填充画布背景颜色
        imagefill($img,0,0,$color);
        //获取随机验证码
        $str = self::getCode();
        //session_start();
        //保存在session中等待验证
        new sessionDBTool();
        //写入session
        $_SESSION['code'] = $str;
        //随机画出获取的随机字符
        for($i=0; $i<4; $i++){
            $str1=substr($str,$i,1);
            $x = ($i*100/4) + rand(7,10);
            $y = rand(5,20);
            $fontColor = imagecolorallocate($img,mt_rand(0,255),mt_rand(120,255),mt_rand(0,255));
            imagestring($img,6,$x,$y,$str1,$fontColor);
           // imageline($img,mt_rand(0,110),mt_rand(0,41),mt_rand(0,110),mt_rand(0,41),$lineColor);
        }
        //绘制矩形
        imagerectangle($img,0,0,109,40,$lineColor);
        //设计网页的显示模式
        header("content-type:image/jpeg;charset=utf-8");
        //画jpeg图
        imagejpeg($img);
        //释放图片资源
        imagedestroy($img);
    }
    //验证方法
    public static function checkCode($code){
        //session_start();
       // echo $code;
       // echo $_SESSION['code'];
       // exit;
        return strtoupper($code) == $_SESSION['code'];
    }

}

