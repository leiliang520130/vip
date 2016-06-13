<?php
/* Smarty version 3.1.29, created on 2016-05-17 15:26:15
  from "F:\server\www\leiliang\mtwp\Application\View\Admin\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573ac7975616b4_88724272',
  'file_dependency' => 
  array (
    '2684b3815ae5890ad126497fdfc21182ba0994ee' => 
    array (
      0 => 'F:\\server\\www\\leiliang\\mtwp\\Application\\View\\Admin\\index.html',
      1 => 1463469973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573ac7975616b4_88724272 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'header', array (
  0 => 'block_12716573ac797546129_06900723',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_15989573ac7975599b3_11657707',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'footer', array (
  0 => 'block_28170573ac79755d833_64502988',
  1 => false,
  3 => 0,
  2 => 0,
));
}
/* {block 'header'}  file:index.html */
function block_12716573ac797546129_06900723($_smarty_tpl, $_blockParentStack) {
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
    <strong>Sassoon</strong> <small>会员管理系统</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{ target: '#topbar-collapse' }"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
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
        <li><a href="index.php?p=Admin&c=ranking&a=list"><span class="am-icon-home"></span> 首页</a></li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{ target: '#collapse-nav' }"><span class="am-icon-file"></span> 会员管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
            <li><a href="index.php?p=Admin&c=usersAdmin&a=listuser"><span class="am-icon-bug"></span>会员列表</a></li>
            <li><a href="index.php?p=Admin&c=group&a=list"><span class="am-icon-bug"></span>部门分类</a></li>
            <li><a href="index.php?p=Admin&c=members&a=list"><span class="am-icon-bug"></span>员工管理</a></li>
            <li><a href="index.php?p=Admin&c=orderAdmin&a=list"><span class="am-icon-bug"></span>预约管理</a></li>
            <li><a href="index.php?p=Admin&c=cancel&a=list"><span class="am-icon-bug"></span>取消预约</a></li>
            <li><a href="index.php?p=Admin&c=ornum&a=list"><span class="am-icon-bug"></span>未完成订单</a></li>
            <li><a href="index.php?p=Admin&c=ornum&a=finish"><span class="am-icon-bug"></span>完成的订单</a></li>
          </ul>
        </li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{ target: '#collapse-nav1' }"><span class="am-icon-file"></span> 店铺管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav1">
            <li><a href="index.php?p=Admin&c=codesAdmin&a=list"><span class="am-icon-bug"></span>代金券</a></li>
            <li><a href="index.php?p=Admin&c=vip&a=list"><span class="am-icon-bug"></span>vip</a></li>
            <li><a href="index.php?p=Admin&c=topup&a=list"><span class="am-icon-bug"></span>充值活动</a></li>
            <li><a href="index.php?p=Admin&c=gift&a=list"><span class="am-icon-bug"></span>商城管理</a></li>
            <li><a href="index.php?p=Admin&c=shopping&a=list"><span class="am-icon-bug"></span>商城订单</a></li>
          </ul>
        </li>
        <li><a href="index.php?p=Admin&c=plans&a=list"><span class="am-icon-table"></span>套餐管理</a></li>
        <li><a href="index.php?p=Admin&c=article&a=show"><span class="am-icon-table"></span>发布活动</a></li>

        <li><a href="index.php?p=Admin&c=article&a=list"><span class="am-icon-pencil-square-o"></span>管理活动</a></li>
        <li><a href="index.php?p=Admin&c=ranking&a=list"><span class="am-icon-pencil-square-o"></span>排行榜</a></li>

        <li><a href="index.php?p=Admin&c=members&a=loginOut"><span class="am-icon-sign-out"></span> 注销</a></li>
      </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 公告</p>
          <p>服务排行有奖金加成</p>
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
function block_15989573ac7975599b3_11657707($_smarty_tpl, $_blockParentStack) {
?>

    内容
    <?php
}
/* {/block 'content'} */
/* {block 'footer'}  file:index.html */
function block_28170573ac79755d833_64502988($_smarty_tpl, $_blockParentStack) {
?>

  </div>

  <!-- content end -->

</div>

<a href="#" class="am-show-sm-only admin-menu" data-am-offcanvas="{ target: '#admin-offcanvas' }">
  <span class="am-icon-btn am-icon-th-list"></span>
</a>

<footer>
  <hr>
  <p class="am-padding-left">© 2016 sassoon会员管理系统.</p>
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
