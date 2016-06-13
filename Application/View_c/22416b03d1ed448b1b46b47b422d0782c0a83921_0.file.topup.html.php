<?php
/* Smarty version 3.1.29, created on 2016-05-13 16:58:23
  from "F:\web\baidu\matao\Application\View\Admin\topup\topup.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5735972f0967a7_36002763',
  'file_dependency' => 
  array (
    '22416b03d1ed448b1b46b47b422d0782c0a83921' => 
    array (
      0 => 'F:\\web\\baidu\\matao\\Application\\View\\Admin\\topup\\topup.html',
      1 => 1463129902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_5735972f0967a7_36002763 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_236815735972f04e7f2_33385233',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:topup/topup.html */
function block_236815735972f04e7f2_33385233($_smarty_tpl, $_blockParentStack) {
?>

<button style="width: 200px;"
        type="button"
        class="am-btn am-btn-primary am-btn-xs"
        data-am-modal="{ target: '#doc-modal-add', closeViaDimmer: 0, width: 400, height: 260 }">
    添加充值
</button>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-add">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">添加充值
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <form class="am-form" action="index.php?p=Admin&c=topup&a=add" method="post" enctype="multipart/form-data">
                <div>
                    <label for="doc-select-1">充值</label>
                    <input name="money" type="text" class="am-form-field am-radius" placeholder="" />
                </div>
                <div>
                    <label for="doc-select-1">赠送</label>
                    <input name="give" type="text" class="am-form-field am-radius" placeholder="" /></div>
                <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
            </form>
        </div>
    </div>
</div>
<?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row1_0_saved_item = isset($_smarty_tpl->tpl_vars['row1']) ? $_smarty_tpl->tpl_vars['row1'] : false;
$_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row1']->value) {
$_smarty_tpl->tpl_vars['row1']->_loop = true;
$__foreach_row1_0_saved_local_item = $_smarty_tpl->tpl_vars['row1'];
?>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-<?php echo $_smarty_tpl->tpl_vars['row1']->value['top_id'];?>
">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">更改
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <form class="am-form" action="index.php?p=Admin&c=topup&a=edit" method="post" enctype="multipart/form-data">
                <div>
                    <label for="doc-select-1">充值</label>
                    <input name="money" type="text" class="am-form-field am-radius" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['money'];?>
" />
                </div>
                <div>
                    <label for="doc-select-1">赠送</label>
                    <input name="give" type="text" class="am-form-field am-radius" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['give'];?>
" />
                </div>
                <input type="hidden" name="top_id" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['top_id'];?>
">
                <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
            </form>
        </div>
    </div>
</div>
<?php
$_smarty_tpl->tpl_vars['row1'] = $__foreach_row1_0_saved_local_item;
}
if ($__foreach_row1_0_saved_item) {
$_smarty_tpl->tpl_vars['row1'] = $__foreach_row1_0_saved_item;
}
?>
<table class="am-table am-table-bordered am-table-radius am-table-striped">
    <thead>
    <tr>
        <th style="text-align: center">充值金额</th>
        <th style="text-align: center">赠送金额</th>
        <th style="text-align: center">操作</th>
    </tr>
    </thead>
    <tbody>
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
    <tr style="text-align: center;">
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['money'];?>

        </td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['give'];?>

        </td>
        <td><button
                type="button"
                class="am-btn am-btn-primary am-btn-xs"
                data-am-modal="{ target: '#doc-modal-<?php echo $_smarty_tpl->tpl_vars['row']->value['top_id'];?>
', closeViaDimmer: 0, width: 400, height: 260 }" >
            更改
        </button>
            <a href="index.php?p=Admin&c=topup&a=remove&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['top_id'];?>
" onclick="return confirm('你确定要删除?')"><button class="am-btn am-btn-primary am-btn-xs">删除</button></a>
        </td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_local_item;
}
if ($__foreach_row_1_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_item;
}
?>
    </tbody>
</table>
<?php
}
/* {/block 'content'} */
}
