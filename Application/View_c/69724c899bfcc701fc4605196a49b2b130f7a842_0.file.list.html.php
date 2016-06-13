<?php
/* Smarty version 3.1.29, created on 2016-05-11 23:16:15
  from "F:\web\baidu\matao\Application\View\Admin\plans\list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57334cbfeb8ad8_44853469',
  'file_dependency' => 
  array (
    '69724c899bfcc701fc4605196a49b2b130f7a842' => 
    array (
      0 => 'F:\\web\\baidu\\matao\\Application\\View\\Admin\\plans\\list.html',
      1 => 1462952993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_57334cbfeb8ad8_44853469 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_1615557334cbfe628b8_13313213',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:plans/list.html */
function block_1615557334cbfe628b8_13313213($_smarty_tpl, $_blockParentStack) {
?>

<div id="" style="text-align: left;width: 800px;">
    <button style="width: 200px;"
            type="button"
            class="am-btn am-btn-primary am-btn-xs"
            data-am-modal="{ target: '#doc-modal-add', closeViaDimmer: 0, width: 400, height: 300 }">
        添加套餐
    </button>
    <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-add">
        <div class="am-modal-dialog">
            <div class="am-modal-hd">添加套餐
                <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
            </div>
            <div class="am-modal-bd">
                <form class="am-form" action="index.php?p=Admin&c=plans&a=insert" method="post">
                    <div>
                        <label for="doc-select-1">名称</label>
                        <input name="name" type="text" class="am-form-field am-radius"/>
                    </div>
                    <div>
                        <label for="doc-select-1">价格</label>
                        <input name="money" type="text" class="am-form-field am-radius"/>
                    </div>

                    <div class="am-form-group">
                        状态:
                        <label class="am-radio-inline">
                            <input type="radio" checked="checked" value="1" name="status">上线
                        </label>
                        <label class="am-radio-inline">
                            <input type="radio" value="0" name="status">下线
                        </label>
                    </div>
                    <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
                </form>
            </div>
        </div>
    </div>
</div>
<table class="am-table am-table-bordered am-table-striped am-table-compact">
    <thead>
    <tr>
        <th>ID</th>
        <th>名称</th>
        <th>价格</th>
        <th>状态</th>
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
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['plan_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['money'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['status'];?>
</td>
        <td>
            <button
                    type="button"
                    class="am-btn am-btn-primary am-btn-xs"
                    data-am-modal="{ target: '#doc-modal-<?php echo $_smarty_tpl->tpl_vars['row']->value['plan_id'];?>
', closeViaDimmer: 0, width: 400, height: 300 }">
                编辑
            </button>
            <a href="index.php?p=Admin&c=plans&a=remove&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['plan_id'];?>
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
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-<?php echo $_smarty_tpl->tpl_vars['row1']->value['plan_id'];?>
">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">套餐管理
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd" style="text-align: left;">
            <form class="am-form" action="index.php?p=Admin&c=plans&a=update" method="post">
                <div>
                    <input type="hidden" name="plan_id" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['plan_id'];?>
"/>
                    <label for="doc-select-1">名称</label>
                    <input name="name" type="text" class="am-form-field am-radius" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['name'];?>
" />
                </div>
                <div>
                    <label for="doc-select-1">价格</label>
                    <input name="money" type="text" class="am-form-field am-radius" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['money'];?>
" />
                </div>

                <div class="am-form-group">
                    状态:
                    <label class="am-radio-inline">
                        <input type="radio" <?php if ($_smarty_tpl->tpl_vars['row1']->value['status'] == 1) {?>checked="checked"<?php }?>  value="1" name="status">上线
                    </label>
                    <label class="am-radio-inline">
                        <input type="radio" <?php if ($_smarty_tpl->tpl_vars['row1']->value['status'] == 0) {?>checked="checked"<?php }?> value="0" name="status">下线
                    </label>
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
<!--分页开始-->
<div>
    <div class="am-fr" style="margin-right: 50px">
        <ul class="am-pagination" style="display: inline-block">
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == 1) {?>class="am-disabled"<?php }?>><a href="index.php?p=Admin&c=plans&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">«</a></li>

            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['stat']->value) : $_smarty_tpl->tpl_vars['stat']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['stat']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['i']->value) {?>class="am-active"<?php }?>><a href="index.php?p=Admin&c=plans&a=list&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
            <?php }
}
?>

            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['total_pages']->value) {?>class="am-disabled"<?php }?>><a href="index.php?p=Admin&c=plans&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
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
        location.href="index.php?p=Admin&c=plans&a=list&page="+oIpt;
    }
<?php echo '</script'; ?>
>
<!--分页结束-->
<?php
}
/* {/block 'content'} */
}
