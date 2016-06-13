<?php
/* Smarty version 3.1.29, created on 2016-05-13 18:49:12
  from "F:\server\www\leiliang\mtwp\Application\View\Admin\vip\vip.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5735b1288acf94_47674611',
  'file_dependency' => 
  array (
    '21a5524c5954c0e4dafd4edc7cf68e2511d42ed4' => 
    array (
      0 => 'F:\\server\\www\\leiliang\\mtwp\\Application\\View\\Admin\\vip\\vip.html',
      1 => 1463136371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_5735b1288acf94_47674611 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_288885735b12888db95_48762505',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:vip/vip.html */
function block_288885735b12888db95_48762505($_smarty_tpl, $_blockParentStack) {
?>

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
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-<?php echo $_smarty_tpl->tpl_vars['row']->value['vip_id'];?>
">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">更改
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <form class="am-form" action="index.php?p=Admin&c=vip&a=edit" method="post" enctype="multipart/form-data">
                <div>
                    <label for="doc-select-1">折扣</label>
                    <input name="vip_discount" type="text" class="am-form-field am-radius" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['vip_discount'];?>
" />
                </div>
                <div>
                    <label for="doc-select-1">等级条件(金额)</label>
                    <input name="vip_contidion" type="text" class="am-form-field am-radius" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['vip_contidion'];?>
" />
                </div>
                <input type="hidden" name="vip_id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['vip_id'];?>
">
                <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
            </form>
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
<div  style="text-align: center">
    <table class="am-table am-table-bordered am-table-radius am-table-striped">
        <thead>
        <tr>
            <th>VIP等级</th>
            <th>折扣</th>
            <th>等级条件(金额)</th>
            <th>操作</th>
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
        <tr>
            <td>vip<?php echo $_smarty_tpl->tpl_vars['row']->value['vip_lelve'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['vip_discount'];?>
折</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['vip_contidion'];?>
</td>
                <td><button
                        type="button"
                        class="am-btn am-btn-primary am-btn-xs"
                        data-am-modal="{ target: '#doc-modal-<?php echo $_smarty_tpl->tpl_vars['row']->value['vip_id'];?>
', closeViaDimmer: 0, width: 400, height: 350 }" >
                    更改
                </button>
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
</div>
<?php
}
/* {/block 'content'} */
}
