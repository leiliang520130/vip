<?php
/* Smarty version 3.1.29, created on 2016-05-13 09:16:27
  from "F:\web\baidu\matao\Application\View\Home\content.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57352aeb1ca2b8_96344329',
  'file_dependency' => 
  array (
    '3f74b274093957261091a6bad5dc76c869c32a15' => 
    array (
      0 => 'F:\\web\\baidu\\matao\\Application\\View\\Home\\content.html',
      1 => 1463101614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57352aeb1ca2b8_96344329 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Sidebar | Amaze UI Example</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate icon" type="image/png" href="./Public/i/favicon.png">
    <link rel="stylesheet" href="./Public/css/amazeui.min.css"/>
    <style>
        @media only screen and (min-width: 641px) {
            .am-offcanvas {
                display: block;
                position: static;
                background: none;
            }

            .am-offcanvas-bar {
                position: static;
                width: auto;
                background: none;
                -webkit-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            .am-offcanvas-bar:after {
                content: none;
            }

        }

        @media only screen and (max-width: 640px) {
            .am-offcanvas-bar .am-nav>li>a {
                color:#ccc;
                border-radius: 0;
                border-top: 1px solid rgba(0,0,0,.3);
                box-shadow: inset 0 1px 0 rgba(255,255,255,.05)
            }

            .am-offcanvas-bar .am-nav>li>a:hover {
                background: #404040;
                color: #fff
            }

            .am-offcanvas-bar .am-nav>li.am-nav-header {
                color: #777;
                background: #404040;
                box-shadow: inset 0 1px 0 rgba(255,255,255,.05);
                text-shadow: 0 1px 0 rgba(0,0,0,.5);
                border-top: 1px solid rgba(0,0,0,.3);
                font-weight: 400;
                font-size: 75%
            }

            .am-offcanvas-bar .am-nav>li.am-active>a {
                background: #1a1a1a;
                color: #fff;
                box-shadow: inset 0 1px 3px rgba(0,0,0,.3)
            }

            .am-offcanvas-bar .am-nav>li+li {
                margin-top: 0;
            }
        }

        .my-head {
            margin-top: 40px;
            text-align: center;
        }

        .my-button {
            position: fixed;
            top: 0;
            right: 0;
            border-radius: 0;
        }
        .my-sidebar {
            padding-right: 0;
            border-right: 1px solid #eeeeee;
        }

        .my-footer {
            border-top: 1px solid #eeeeee;
            padding: 10px 0;
            margin-top: 10px;
            text-align: center;
        }
       .am-u-md-push-3 {
                left: 0%;
            }
        .am-u-md-9 {
            width: 100%;
        }
    </style>
</head>
<body>
<header class="am-g my-head">
    <div class="am-u-sm-12 am-article">
        <h1 class="am-article-title"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</h1>
        <p class="am-article-meta"><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</p>
    </div>
</header>
<hr class="am-article-divider"/>
<div class="am-g am-g-fixed">
    <div class="am-u-md-9 am-u-md-push-3">
       <?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>

    </div>
</div>

<footer class="my-footer">

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
</body>
</html>
<?php }
}
