<?php
/* Smarty version 3.1.29, created on 2016-05-17 15:25:14
  from "F:\web\baidu\matao\Application\View\Home\integral\integral.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573ac75a6c6383_36906406',
  'file_dependency' => 
  array (
    '366e6f6fba8edcb5aefcc153cb469bc1903a435c' => 
    array (
      0 => 'F:\\web\\baidu\\matao\\Application\\View\\Home\\integral\\integral.html',
      1 => 1463465254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_573ac75a6c6383_36906406 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_25436573ac75a691cf0_28851446',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:integral/integral.html */
function block_25436573ac75a691cf0_28851446($_smarty_tpl, $_blockParentStack) {
?>

<style>
    .am-g img{
        width: 220px;
        height: 220px;
    }
</style>
<ul class="am-nav" style="margin-bottom: 10px;">
    <li class="am-active"><a href="#">您当前的积分为:<?php echo $_smarty_tpl->tpl_vars['rowUser']->value['integral'];?>
</a></li>
</ul>
<div class="am-g">
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
    <div class="am-u-sm-4">
        <div class="am-thumbnail">
            <img src="./Public/Upload/<?php echo $_smarty_tpl->tpl_vars['row']->value['img'];?>
" alt=""/>
            <div class="am-thumbnail-caption">
                <h3><?php echo $_smarty_tpl->tpl_vars['row']->value['introduce'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['integral'];?>
积分</h3>
                <button <?php if ($_smarty_tpl->tpl_vars['rowUser']->value['integral'] < $_smarty_tpl->tpl_vars['row']->value['integral'] || $_smarty_tpl->tpl_vars['row']->value['stock'] == 0) {?>disabled="disabled"<?php }?>
                type="button"
                class="am-btn am-btn-primary"
                data-am-modal="{ target: '#doc-modal-<?php echo $_smarty_tpl->tpl_vars['row']->value['gift_id'];?>
', closeViaDimmer: 0, width: 400, height: 225 }">
                立即兑换
                </button>
                <div style="float: right;">库存 <?php echo $_smarty_tpl->tpl_vars['row']->value['stock'];?>
</div>
            </div>
        </div>
    </div>
    <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
    <?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row1_1_saved_item = isset($_smarty_tpl->tpl_vars['row1']) ? $_smarty_tpl->tpl_vars['row1'] : false;
$_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row1']->value) {
$_smarty_tpl->tpl_vars['row1']->_loop = true;
$__foreach_row1_1_saved_local_item = $_smarty_tpl->tpl_vars['row1'];
?>
    <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-<?php echo $_smarty_tpl->tpl_vars['row1']->value['gift_id'];?>
">
        <div class="am-modal-dialog">
            <div class="am-modal-hd">
                <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
            </div>
            <div class="am-modal-bd">
                <form class="am-form" action="index.php?p=Home&c=integral&a=exchange" method="post" enctype="multipart/form-data">
                    <legend>本次兑换消耗积分<?php echo $_smarty_tpl->tpl_vars['row1']->value['integral'];?>
</legend>
                    <div>
                        <label for="doc-select-1">收货地址</label>
                        <input type="hidden" name="gift_id" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['gift_id'];?>
"/>
                        <input name="address" type="text" class="am-form-field am-radius" placeholder="" />
                    </div>
                    <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
                </form>
            </div>
        </div>
    </div>
    <?php
$_smarty_tpl->tpl_vars['row1'] = $__foreach_row1_1_saved_local_item;
}
if ($__foreach_row1_1_saved_item) {
$_smarty_tpl->tpl_vars['row1'] = $__foreach_row1_1_saved_item;
}
?>
</div>

<?php
}
/* {/block 'content'} */
}
