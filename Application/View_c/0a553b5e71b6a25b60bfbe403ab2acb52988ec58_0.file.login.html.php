<?php
/* Smarty version 3.1.29, created on 2016-05-13 13:59:16
  from "F:\server\www\leiliang\mtwp\Application\View\Admin\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57356d34f3cc77_59013964',
  'file_dependency' => 
  array (
    '0a553b5e71b6a25b60bfbe403ab2acb52988ec58' => 
    array (
      0 => 'F:\\server\\www\\leiliang\\mtwp\\Application\\View\\Admin\\login.html',
      1 => 1463119153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57356d34f3cc77_59013964 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=0.95, user-scalable=no" />
    <title>VS美发</title>
    <link rel="stylesheet" type="text/css" href="./Public/css/ue_grid.css" />
    <link rel="stylesheet" type="text/css" href="./Public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="./Public/css/style2.css" />
    <?php echo '<script'; ?>
 src="./Public/js/jquery-1.7.2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="javascript" src="./Public/js/jquery.easing.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="javascript" src="./Public/js/custom.js"><?php echo '</script'; ?>
>
    <link rel="icon" type="image/png" href="./Public/i/favicon1.png">
    <link href="./Public/css/index.css" rel="stylesheet" type="text/css">
</head>
<body style="padding-top:50px">
<div id="header">
    <div class="common">
        <div style="display: inline-block;line-height: 30px;text-align: center;font-size: 20px"><img src="./Public/images/logo.jpg" alt=""/></div>
        <div class="login fr">
            <div class="loginmenu"><a title="登录或注册"></a></div>
            <ul>
                <li class="openlogin"><a href="" onclick="return false;">会员登录</a></li>
                <li class="reg"><a href="" onclick="return false;">管理员</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>
<div class="loginmask"></div>
<div id="loginalert">
    <div class="pd20 loginpd">
        <h3><i class="closealert fr"></i>
            <div class="clear"></div>
        </h3>
        <div class="loginwrap">
            <div class="loginh">
                <div class="fl">会员登录</div>
                <div class="clear"></div>
            </div>
            <h3><span>用户登录</span><span class="login_warning">用户名或密码错误</span>
                <div class="clear"></div>
            </h3>
            <div class="clear"></div>
            <form action="index.php?p=Home&c=users&a=check" method="post" id="login_form">
                <div class="logininput">
                    <input type="text" name="username" class="loginusername" value="用户名" />
                    <input type="text" class="loginuserpasswordt" value="密码" />
                    <input type="password" name="password" class="loginuserpasswordp" style="display:none" />
                    <input type="text" name="code" id="vercode" class="vercode" value="请输入验证码" style="width: 199px;display: inline-block;"/>
                    <div style="display:inline-block;vertical-align:middle;margin-left: 25px; width: 110px;height: 41px;background: red;">
                        <img  onclick="this.src='index.php?p=Public&c=Captcha&a=showCode&'+Math.random()" src="index.php?p=Public&c=Captcha&a=showCode" title="看不清点击换图!">
                    </div>

                </div>
                <div class="loginbtn">
                    <div class="loginsubmit fl">
                        <input type="submit" value="登录" />
                        <div class="loginsubmiting">
                            <div class="loginsubmiting_inner"></div>
                        </div>
                    </div>
                    <div class="logcheckbox fl">
                        <input id="bcdl" type="checkbox" name="remember" value="1"/>
                        保持登录</div>
                    <div class="fr"><a href="#">忘记密码?</a></div>
                    <div class="clear"></div>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="reg_setp" style="background: #ccc">
    <div class="back_setp">返回</div>
    <div class="blogo"></div>
        <!--管理员登录表单开始-->
    <div id="setp_quicklogin" style="background: #FFFFFF;width: 500px;height: 350px;margin-top: -100px">
    <div class="loginwrap">
        <div class="loginh">
            <div class="fl" style="margin-bottom: 10px;">管理员登录</div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <form action="index.php?p=Admin&c=members&a=check" method="post" id="login_form1">
            <div class="logininput">
                <input type="text" name="username" style="margin-bottom: 20px;margin-top: 10px;"/>
                <input type="password" name="password"/>
                <input type="text" name="code" id="vercode1" class="vercode" value="请输入验证码" style="width: 199px;display: inline-block;"/>
                <div style="display:inline-block;vertical-align:middle;margin-left: 25px; width: 110px;height: 41px;background: red;">
                    <img  onclick="this.src='index.php?p=Public&c=Captcha&a=showCode&'+Math.random()" src="index.php?p=Public&c=Captcha&a=showCode" title="看不清点击换图!">
                </div>

            </div>
            <div class="loginbtn">
                <div class="loginsubmit fl">
                    <input type="submit" value="登录" />
                    <div class="loginsubmiting">
                        <div class="loginsubmiting_inner"></div>
                    </div>
                </div>
                <div class="logcheckbox fl">
                    <input id="bcdl1" type="checkbox" name="remember" value="1"/>
                    保持登录</div>
                <div class="fr"><a href="#">忘记密码?</a></div>
                <div class="clear"></div>
            </div>
        </form>
    </div>
    </div>
    <!--管理员登录表单结束-->
</div>
<div>
    <!-- -------------最新活动---------------  -->
    <div class="Top_Record">
        <div class="record_Top"><p>最新活动</p></div>
        <div class="topRec_List">
            <dl>
                <dd>编号</dd>
                <dd>标题</dd>
                <dd>作者</dd>
                <dd>开始日期--结束日期</dd>
            </dl>
            <div class="maquee">
                <ul>
                    <?php
$_from = $_smarty_tpl->tpl_vars['rowsA']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                    <li>
                        <div><?php echo $_smarty_tpl->tpl_vars['row']->value['article_id'];?>
</div>
                        <div><a href="index.php?p=Admin&c=members&a=content&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['article_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></div>
                        <div><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</div>
                        <div><?php echo $_smarty_tpl->tpl_vars['row']->value['start'];?>
--<?php echo $_smarty_tpl->tpl_vars['row']->value['end'];?>
</div>
                    </li>
                    <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
                </ul>
            </div>
        </div>
    </div>


    <div class="apple">
        <ul>
            <?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_1_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_1_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
            <li><a href="#" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
获得优惠价<?php echo $_smarty_tpl->tpl_vars['row']->value['money'];?>
元</a></li>
            <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_local_item;
}
if ($__foreach_row_1_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_item;
}
?>
        </ul>
    </div>


    <?php echo '<script'; ?>
 type="text/javascript">
        function autoScroll(obj){
            $(obj).find("ul").animate({
                marginTop : "-39px"
            },500,function(){
                $(this).css({ marginTop : "0px"}).find("li:first").appendTo(this);
            })
        }
        $(function(){
            setInterval('autoScroll(".maquee")',3000);
            setInterval('autoScroll(".apple")',2000);

        })

    <?php echo '</script'; ?>
>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
    window.onload = function(){
        var oCode = document.getElementById('vercode');
        oCode.onfocus = function () {
            oCode.value = "";
        }
        var oCode1 = document.getElementById('vercode1');
        oCode1.onfocus = function () {
            oCode1.value = "";
        }
    }
<?php echo '</script'; ?>
>



<?php }
}
