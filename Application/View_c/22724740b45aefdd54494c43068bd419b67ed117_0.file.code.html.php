<?php
/* Smarty version 3.1.29, created on 2016-05-11 17:30:32
  from "F:\web\baidu\matao\Application\View\Home\code\code.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5732fbb82cf5d1_82988828',
  'file_dependency' => 
  array (
    '22724740b45aefdd54494c43068bd419b67ed117' => 
    array (
      0 => 'F:\\web\\baidu\\matao\\Application\\View\\Home\\code\\code.html',
      1 => 1462959031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_5732fbb82cf5d1_82988828 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_127065732fbb82b0925_80570872',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:code/code.html */
function block_127065732fbb82b0925_80570872($_smarty_tpl, $_blockParentStack) {
?>

<table class="am-table am-table-bordered am-table-radius am-table-striped">
    <thead>
    <tr>
        <th style="vertical-align: middle;">code</th>
        <th style="vertical-align: middle;">金额</th>
        <th style="vertical-align: middle;">状态</th>

    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->tpl_vars['rowc']->value;
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
    <tr style="text-align: center;">
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['code'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['money'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['status'];?>
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
<?php
}
/* {/block 'content'} */
}
