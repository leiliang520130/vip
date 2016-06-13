<?php
/* Smarty version 3.1.29, created on 2016-05-17 15:27:06
  from "F:\web\baidu\matao\Application\View\Home\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573ac7ca861e17_60702215',
  'file_dependency' => 
  array (
    'a47f6cd2cbddab9c627859385cc334abebc06a78' => 
    array (
      0 => 'F:\\web\\baidu\\matao\\Application\\View\\Home\\index.html',
      1 => 1463470011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573ac7ca861e17_60702215 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'header', array (
  0 => 'block_26883573ac7ca80a2e1_51970364',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

        <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_20608573ac7ca821512_47865325',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

        <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'footer', array (
  0 => 'block_30393573ac7ca85e112_73646215',
  1 => false,
  3 => 0,
  2 => 0,
));
}
/* {block 'header'}  file:index.html */
function block_26883573ac7ca80a2e1_51970364($_smarty_tpl, $_blockParentStack) {
?>

<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VS美发</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="./Public/i/favicon1.png">
    <link rel="apple-touch-icon-precomposed" href="./Public/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="./Public/css/amazeui.min.css"/>
    <link rel="stylesheet" href="./Public/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar admin-header">
    <div class="am-topbar-brand">
        <strong>VS</strong> <small>会员</small>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{ target: '#topbar-collapse' }"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span> 设置 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
                    <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="index.php?p=Admin&c=members&a=loginOut"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
    </div>
</header>

<div class="am-cf admin-main">
    <!-- sidebar start -->
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
            <ul class="am-list admin-sidebar-list">
                <li><a href="index.php?p=Home&c=article&a=list"><span class="am-icon-home"></span> 首页</a></li>
                <li class="admin-parent">
                    <a class="am-cf" data-am-collapse="{ target: '#collapse-nav' }"><span class="am-icon-file"></span> 会员管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                    <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                        <li><a href="index.php?p=Home&c=orderuser&a=list"><span class="am-icon-bug"></span>预约美发</a></li>
                        <li><a href="index.php?p=Home&c=orderuser&a=off"><span class="am-icon-bug"></span>已取消的预约</a></li>
                        <li><a href="index.php?p=Home&c=ornum&a=list"><span class="am-icon-bug"></span>未完成订单</a></li>
                        <li><a href="index.php?p=Home&c=ornum&a=finish"><span class="am-icon-bug"></span>完成的订单</a></li>
                        <li><a href="index.php?p=Home&c=money&a=list"><span class="am-icon-bug"></span>充值记录</a></li>
                        <li><a href="index.php?p=Home&c=money&a=list1"><span class="am-icon-bug"></span>消费记录</a></li>
                        <li><a href="index.php?p=Home&c=code&a=list"><span class="am-icon-bug"></span>代金券</a></li>

                    </ul>
                </li>
                <li><a href="index.php?p=Home&c=integral&a=show"><span class="am-icon-table"></span>积分商城</a></li>
                <li><a href="index.php?p=Home&c=shopping&a=list"><span class="am-icon-table"></span>商城订单管理</a></li>
                <li><a href="index.php?p=Home&c=rank&a=list"><span class="am-icon-table"></span>排行榜</a></li>
                <li><a href="index.php?p=Admin&c=members&a=loginOut"><span class="am-icon-sign-out"></span> 注销</a></li>
            </ul>

            <div class="am-panel am-panel-default admin-sidebar-panel">
                <div class="am-panel-bd">
                    <p><span class="am-icon-bookmark"></span> 公告</p>
                    <p>你的美丽---让我们做得更好!</p>
                </div>
            </div>

            <div class="am-panel am-panel-default admin-sidebar-panel">
                <div class="am-panel-bd">
                    <p><span class="am-icon-tag"></span> 充值活动</p>
                    <p>充500送100，充1000送300,充5000送2000</p>
                </div>
            </div>
        </div>
    </div>

    <!-- sidebar end -->



    <!-- content start -->

    <div class="admin-content">
        <?php
}
/* {/block 'header'} */
/* {block 'content'}  file:index.html */
function block_20608573ac7ca821512_47865325($_smarty_tpl, $_blockParentStack) {
?>


        <div class="am-g">
            <div class="am-u-sm-12">
                <form class="am-form">
                    <table class="am-table am-table-striped am-table-hover table-main">
                        <thead>
                        <tr>
                            <th class="table-id">ID</th><th class="table-title">标题</th><th class="table-type">作者</th><th class="table-author am-hide-sm-only">开始日期</th><th class="table-date am-hide-sm-only">结束日期</th><th class="table-date am-hide-sm-only">发布时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
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
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['article_id'];?>
</td>
                            <td><a href="index.php?p=Home&c=article&a=content&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['article_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
                            <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['row']->value['start'];?>
</td>
                            <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['row']->value['end'];?>
</td>
                            <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</td>
                        </tr>
                        <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <!--分页开始-->
        <div>
            <div class="am-fr" style="margin-right: 50px">
                <ul class="am-pagination" style="display: inline-block">
                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == 1) {?>class="am-disabled"<?php }?>><a href="index.php?p=Home&c=article&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">«</a></li>

                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['stat']->value) : $_smarty_tpl->tpl_vars['stat']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['stat']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['i']->value) {?>class="am-active"<?php }?>><a href="index.php?p=Home&c=article&a=list&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
                    <?php }
}
?>

                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['total_pages']->value) {?>class="am-disabled"<?php }?>><a href="index.php?p=Home&c=article&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">»</a></li>
                </ul>
                <div style="display: inline-block">
                    共<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
条记录，到第<input id='page' type='text' size='2' name='page'>页
                    <input onclick='check()'  type='button' id='sbu' value='确定'>
                </div>
            </div>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            function check(){
                var oIpt=document.getElementById('page').value;
                location.href="index.php?p=Home&c=article&a=list&page="+oIpt;
            }
        <?php echo '</script'; ?>
>


        <?php
}
/* {/block 'content'} */
/* {block 'footer'}  file:index.html */
function block_30393573ac7ca85e112_73646215($_smarty_tpl, $_blockParentStack) {
?>

    </div>

    <!-- content end -->

</div>

<a href="#" class="am-show-sm-only admin-menu" data-am-offcanvas="{ target: '#admin-offcanvas' }">
    <span class="am-icon-btn am-icon-th-list"></span>
</a>

<footer>
    <hr>
    <p class="am-padding-left">© 2016 IMAX会员管理系统.</p>
</footer>

<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./Public/js/amazeui.ie8polyfill.min.js"><?php echo '</script'; ?>
>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<?php echo '<script'; ?>
 src="./Public/js/jquery.min.js"><?php echo '</script'; ?>
>
<!--<![endif]-->
<?php echo '<script'; ?>
 src="./Public/js/amazeui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./Public/js/app.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php
}
/* {/block 'footer'} */
}
