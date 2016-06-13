<?php

/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/4/28
 * Time: 18:47
 */
class CaptchaController{
    public function showCodeAction(){
        CaptchaTool::generate();
    }

}