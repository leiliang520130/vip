<?php
/* Smarty version 3.1.29, created on 2016-05-13 13:35:56
  from "F:\server\www\leiliang\mtwp\Application\View\Admin\article\list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573567bc401524_97091609',
  'file_dependency' => 
  array (
    'eb09511548a3b3339a8dd837a3245a832f052883' => 
    array (
      0 => 'F:\\server\\www\\leiliang\\mtwp\\Application\\View\\Admin\\article\\list.html',
      1 => 1463044079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_573567bc401524_97091609 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_7299573567bc3ce894_13583334',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:article/list.html */
function block_7299573567bc3ce894_13583334($_smarty_tpl, $_blockParentStack) {
?>

<div class="am-g">
    <div class="am-u-sm-12">
        <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
                <thead>
                <tr>
                    <th class="table-id">ID</th><th class="table-title">标题</th><th class="table-type">作者</th><th class="table-author am-hide-sm-only">开始日期</th><th class="table-date am-hide-sm-only">结束日期</th><th class="table-date am-hide-sm-only">发布时间</th><th class="table-set">操作</th>
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
                    <td><a href="index.php?p=Admin&c=article&a=content&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['article_id'];?>
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
                    <td>
                        <div>
                                <a href="index.php?p=Admin&c=article&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['article_id'];?>
">编辑</a> |
                                <a href="index.php?p=Admin&c=article&a=remove&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['article_id'];?>
" onclick="return confirm('你确定要删除?')">删除</a>
                        </div>
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
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == 1) {?>class="am-disabled"<?php }?>><a href="index.php?p=Admin&c=article&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">«</a></li>

            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['stat']->value) : $_smarty_tpl->tpl_vars['stat']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['stat']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['i']->value) {?>class="am-active"<?php }?>><a href="index.php?p=Admin&c=article&a=list&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
            <?php }
}
?>

            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['total_pages']->value) {?>class="am-disabled"<?php }?>><a href="index.php?p=Admin&c=article&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
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
        location.href="index.php?p=Admin&c=article&a=list&page="+oIpt;
    }
<?php echo '</script'; ?>
>
<!--分页结束-->
<?php
}
/* {/block 'content'} */
}
