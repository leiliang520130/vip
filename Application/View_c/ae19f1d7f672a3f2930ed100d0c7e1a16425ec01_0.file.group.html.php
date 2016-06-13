<?php
/* Smarty version 3.1.29, created on 2016-05-10 14:48:59
  from "F:\web\baidu\matao\Application\View\Admin\group\group.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5731845b1c5c96_60478645',
  'file_dependency' => 
  array (
    'ae19f1d7f672a3f2930ed100d0c7e1a16425ec01' => 
    array (
      0 => 'F:\\web\\baidu\\matao\\Application\\View\\Admin\\group\\group.html',
      1 => 1462862741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_5731845b1c5c96_60478645 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_279695731845b19b498_63671771',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:./group/group.html */
function block_279695731845b19b498_63671771($_smarty_tpl, $_blockParentStack) {
?>

<ol class="am-breadcrumb">
    <li><a href="#" class="am-icon-home">首页</a></li>
    <li><a href="#">分类</a></li>
    <li class="am-active">内容</li>
</ol>
<div style="width: 500px;margin-left: 10px">
    <div id="" style="margin-left: 20px; width: 800px;">
        <button
                type="button"
                class="am-btn am-btn-primary am-btn-xs"
                data-am-modal="{ target: '#doc-modal-add', closeViaDimmer: 0, width: 400, height: 150 }">
            添加部门
        </button>
        <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-add">
            <div class="am-modal-dialog">
                <div class="am-modal-hd">
                    <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                </div>
                <div class="am-modal-bd">
                    <form class="am-form" action="index.php?p=Admin&c=group&a=insert" method="post">
                        <div>
                            <label>添加部门名称</label>
                            <input name="name" type="text" class="am-form-field am-radius" placeholder="" />
                        </div>
                        <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="am-table am-table-bordered am-table-radius am-table-striped">
        <thead>
        <tr>
            <th>分类id</th>
            <th>名称</th>
            <th>操作</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['group_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
<td>
            <button
                    type="button"
                    class="am-btn am-btn-primary am-btn-xs"
                    data-am-modal="{ target: '#doc-modal-<?php echo $_smarty_tpl->tpl_vars['row']->value['group_id'];?>
', closeViaDimmer: 0, width: 400, height: 150 }">
                编辑
            </button>
                <a href="index.php?p=Admin&c=group&a=remove&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['group_id'];?>
" onclick="return confirm('你确定要删除?')"><button class="am-btn am-btn-default am-btn-xs">删除</button></a>
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
</div>

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

<!--动态窗口开始-->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-<?php echo $_smarty_tpl->tpl_vars['row1']->value['group_id'];?>
">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">修改部门
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd" style="text-align: left;">
            <form class="am-form" action="index.php?p=Admin&c=group&a=update" method="post">
                <div>
                    <input type="hidden" name="group_id" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['group_id'];?>
"/>
                    <input name="name"  type="text" class="am-form-field am-radius" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['name'];?>
"/>
                </div>
                <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
            </form>


        </div>
    </div>
</div>
<!--动态窗口结束-->

    <?php
$_smarty_tpl->tpl_vars['row1'] = $__foreach_row1_1_saved_local_item;
}
if ($__foreach_row1_1_saved_item) {
$_smarty_tpl->tpl_vars['row1'] = $__foreach_row1_1_saved_item;
}
?>

<?php
}
/* {/block 'content'} */
}
